<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$to = "info@enik-energy.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email;
$headers = "From: ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("LOCATION: http://www.enik-energy.com");
?>
