<?php
include 'contact.html';

include 'connection.php';
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$emailid = $_POST['emailid'];
$contactno = $_POST['contactno'];
$address = $_POST['address'];

$sql = "INSERT INTO `contact_us` (`name`,`subject`,`message`,`emailid`,`contactno`,`address`) VALUES('$name','$subject','$message','$emailid','$contactno','$address')";

$result = mysqli_query($conn,$sql);
  
if ($result== TRUE){
    echo ( "<script type='text/javascript'>alert('Thank You for Contacting Us..');
    windows.history.log(-1);
    
     </script>");}



?>