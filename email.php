<?php
use PHPMailer\PhpMailer\PHPMailer;
use PHPMailer\PhpMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PhpMailer.php';
require 'phpmailer/src/SMTP.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'youremail';
    $mail->Password = 'yourpassword';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('youremail');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    try {
        $mail->send();
        echo "<script>alert('Email është dërguar me sukses'); window.location.href = 'contact.php';</script>";
        exit; 
    } catch (Exception $e) {
        echo "<script>alert('Ka ndodhur një gabim gjatë dërgimit të email-it: {$mail->ErrorInfo}'); window.location.href = 'contact.php';</script>";
        exit; 
    }
} else {
    header("Location: contact.php");
    exit;
}
?>
