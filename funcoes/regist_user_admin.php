<?php 
session_start();
include 'conn.php';

$sql = "INSERT INTO usuario ( nome_usuario, login, senha, email_usuario, fk_papel_id_papel, cpf_usuario, tel_usuario)
VALUES 
(
	'$_POST[nome_usuario]',
	'$_POST[login]',
	'$_POST[senha]',
	'$_POST[email_usuario]',
	'$_POST[fk_papel_id_papel]',
	'$_POST[cpf_usuario]',
	'$_POST[tel_usuario]'
)";


if ($conn->query($sql) === TRUE) {

	$_SESSION['check'] 			= 1;
	$_SESSION['msg']			= 'Novo usuário cadastrado!';
	$_SESSION['alert_color']	= 1;
	header("location: ../admin.php");
	exit();

} else {

	echo "Error: " . $sql . "<br>" . $conn->error;



}