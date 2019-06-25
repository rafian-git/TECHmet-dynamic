<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$location = $_POST['location'];
$subject = $_POST['subject'];
$formcontent="From: [".$name."]\n\n"."Message:\n".$message."\n\nLocation: (".$location.")\n\n\n\nWish You All The Best TECHmet..!!!\n";
$recipient = "inbox@techmetbd.com";
$mailheader = "From: $email \r\n";

if(mail($recipient, $subject, $formcontent, $mailheader))
{
    header("Location: contact.php?success=1");
    // print_r($_POST);
}
else
    header("Location: contact.php?error=1");
?>