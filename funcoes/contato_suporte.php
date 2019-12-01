<?php 
include 'verifica_session_start.php';
include 'conn.php';

$sql = "INSERT INTO msg_suporte ( assunto, nome, telefone, mensagem, email)
VALUES 
(
	'$_POST[assunto]',
	'$_POST[nome]',
	'$_POST[telefone]',
	'$_POST[mensagem]',
	'$_POST[email]'
	
)";


if ($conn->query($sql) === TRUE) {

	$_SESSION['check'] 			= 1;
	$_SESSION['msg']			= '<strong>Mensagem enviada!</strong> Aguarde o contato.';
	$_SESSION['alert_color']	= 1;
	header("location: ../suporte.php");
	exit();

} else {

	echo "Error: " . $sql . "<br>" . $conn->error;



}


 ?>