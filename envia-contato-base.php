<?php

// Arquivo base sem a senha do e-mail
// copie esse arquivo com o nome envia-contato.php
// e adicione a senha do e-mail para funcionar


require_once("mail/PHPMailerAutoload.php");
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;

$mail->SMTPDebug = 0;

$mail->Username = 'tumatmailer@gmail.com';
$mail->Password = '';

$mail->setFrom('tumatmailer@gmail.com', 'TumaTi');
$mail->addAddress('jgsoaresdias@gmail.com');

$mail->Subject = 'Email de contato da loja';
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if ($mail->send()){
	$_SESSION['success'] = 'Mensagem enviada com sucesso';
	header('Location: index.php');
} else {
	$_SESSION['danger'] = 'Erro ao enviar mensagem ' . $mail->ErrorInfo;
	header('Location: contato.php');
}
die();
