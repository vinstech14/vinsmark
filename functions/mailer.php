<?php
require_once("../database/databasecon.php");
require_once("functions.php");
require_once("../vendor/autoload.php"); // Include PHPMailer autoload file

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendVerificationEmail($email, $verification_code) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;                       // Enable verbose debug output
        $mail->isSMTP();                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';     // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                   // Enable SMTP authentication
        $mail->Username   = 'publicattorneyoffice@gmail.com'; // SMTP username
        $mail->Password   = 'nfwrqwxlgunqmiar';  // SMTP password
        $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                    // TCP port to connect to

        //Recipients
        $mail->setFrom('publicattorneyoffice@gmail.com', 'PAO');
        $mail->addAddress($email);                  // Add a recipient
        // Content
        $mail->isHTML(true);                        // Set email format to HTML
        $mail->Subject = 'Email Verification';
        $mail->Body    = "Verification Code: '$verification_code'";

        $mail->send();
        echo $verification_code;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
