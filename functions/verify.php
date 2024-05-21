<?php
require_once("mailer.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $verification_code = random_int(100000, 999999);
    $res = sendVerificationEmail($email, $verification_code);
}
?>