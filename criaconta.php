<?php
require_once("banco-usuario.php");
require_once("banco-criaconta.php");
require_once("mail/PHPMailerAutoload.php");
require_once("mail/credenciais.php");

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];
$confirma = $_POST['confirma'];

if (usuarioExiste($conexao, $email)) {
	$_SESSION["danger"] = "Usuário {$email} já existe";
	header("Location: cadastro-formulario.php");
	die();
}

if ($senha != $confirma) {
	$_SESSION["danger"] = "Senhas não conferem.";
	header("Location: cadastro-formulario.php");
	die();
}

$chave = criaContaPendente($conexao, $email, $senha);

if ($chave){
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;

	$mail->SMTPDebug = 0;

	$mail->Username = REMETENTE;
	$mail->Password = SENHA_REMETENTE;

	$mail->setFrom(REMETENTE, NOME_REMETENTE);
	$mail->addAddress($email);

	$mail->Subject = 'Confirmação de cadastro na LojaPHP';
	$mail->msgHTML("<html><p>Para concluir, acesse a URL: http://lojaphp-fork.hyrule/confirma-conta.php?chave={$chave}</p></html>");
	$mail->AltBody = "Para concluir, acesse a URL: http://lojaphp-fork.hyrule/confirma-conta.php?chave={$chave}";

	if ($mail->send()){
		$_SESSION['success'] = "Para concluir o cadastro, acesse a URL enviada para o email: {$email}";
		header('Location: index.php');
	} else {
		$_SESSION['danger'] = "Erro ao enviar mensagem de cadastro para {$email} " . $mail->ErrorInfo;
		header('Location: cadastro-formulario.php');
	}
	die();
}