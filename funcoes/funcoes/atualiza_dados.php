<?php
session_start();
$id = $_SESSION['id'];
include ('conn.php');
if (empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['nome']) || empty($_POST['email'])){
	# code...
	$_SESSION['check']	= 1;
	$_SESSION['msg']	= 'Todos os campos são obrigatórios!';
	header('location: ../registro.php');
	exit();
}

$sql = "UPDATE usuarios SET nome = '$_POST[nome]', 
email = '$_POST[email]',
usuario = '$_POST[usuario]',
senha = '$_POST[senha]' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {

	$_SESSION['check'] 			= 1;
	$_SESSION['msg'] 			= 'Dados atualizados com sucesso.';
	$_SESSION['alert_color'] 	= 1;
	$_SESSION['usuario'] 		= $_POST['usuario'];
	header('Location:../conta.php');
	exit();

} else {
	$_SESSION['check'] = 1;
	$_SESSION['msg'] = "Error: " . $sql . "<br>" . $conn->error;
	header('Location:../conta.php');
	exit();


}