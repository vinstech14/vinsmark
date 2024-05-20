<?php
$verification_code = random_int(100000, 999999);

sendVerificationEmail($email, $verification_code);
?>