<?php

require_once __DIR__ . '/config.php';

function clean($v){
    return trim(strip_tags($v ?? ""));
}

$name = clean($_POST['name'] ?? "");
$email = clean($_POST['email'] ?? "");
$company = clean($_POST['company'] ?? "");
$industry = clean($_POST['industry'] ?? "");
$message = clean($_POST['message'] ?? "");
$website = clean($_POST['website'] ?? "");

if ($website !== "") {
    header("Location: /contact.php?success=1");
    exit;
}

try{

    $mail = getMailer();

    $mail->addAddress('joe@ironcladiso.com','IronClad ISO');

    $mail->Subject = "New IronClad ISO Inquiry";

    $mail->Body = "
    <h2>New Website Inquiry</h2>
    <p><b>Name:</b> {$name}</p>
    <p><b>Email:</b> {$email}</p>
    <p><b>Company:</b> {$company}</p>
    <p><b>Industry:</b> {$industry}</p>
    <p><b>Message:</b></p>
    <p>{$message}</p>
    ";

    $mail->AltBody = "
Name: $name
Email: $email
Company: $company
Industry: $industry

Message:
$message
";

    $mail->send();

    header("Location: /contact.php?success=1");
    exit;

}catch(Exception $e){

    header("Location: /contact.php?error=1");
    exit;
}
