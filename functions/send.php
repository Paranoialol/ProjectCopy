<?php
$email = $_POST['email'];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone_number'];
$subject = "=?utf-8?B?".base64_encode("Сообщение c сайта")."?=";
$headers = "From: $email/r/nReply-to: $email/r/nContent-type: text/html; charset=utf-8/r/n";
$sucess = mail('cto@appsidedev.com', $subject, $headers);
?>