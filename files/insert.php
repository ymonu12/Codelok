<?php
require 'PHPMailerAutoload.php';
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $phone =  $_REQUEST['phone'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = "ssl://smtp.gmail.com";
echo !extension_loaded('openssl')?"Not Available":"Available";
   // Specify main and backup SMTP servers
   // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ymonu6488@gmail.com';                 // SMTP username
$mail->Password = 'Monu@123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->setFrom('ymonu6488@gmail.com', 'HEllo');
$mail->addAddress($_REQUEST['email'], 'Joe User');     // Add a recipient
$mail->addReplyTo('ymonu6488@gmail.com', 'Information');
// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = $_REQUEST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>