<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\exception;

require_once "vendor\autoload.php";

$mail = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP

$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                       // 1 = errors and messages
                                       // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "testst00re@gmail.com";  // GMAIL username
$mail->Password   = "pbuerhpwkuqwbzox";            // GMAIL password

$mail->SetFrom($_SESSION['email'], $_SESSION['name']);

$mail->AddReplyTo($_SESSION['email'], $_SESSION['name']);

$mail->Subject    = $_SESSION['header'];
$mail->isHTML(true);
$mail->Body =  "<h1> header : " . $_SESSION['header'] . "</h1>" . "<h3 style='color:rgb(130,130,130)'>" . $_SESSION['masg'] . "</h3>" . "<br>" . "<br>" . "<h2 style='color:rgb(0,90,158);'> my gmail : " . $_SESSION['email'] . "</h2>" . "</div>";

$mail->AddAddress("yousefosama1885@gmail.com", "yousef");

if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    $_SESSION['sent'] = "not sent";
} else {
    $_SESSION['sent'] = "sent";
}

header("location:contact.php");


?>