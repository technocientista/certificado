<?php
session_start();
$id = $_SESSION['id'];
include ('conn.php');
if (empty($_POST['email'])){
	# code...
	$_SESSION['check'] = true;
	$_SESSION['msg'] = 'O campo e-mail é obrigatório.';
	header('Location:../email.php');
	exit();
}

$sql = "UPDATE usuarios SET email = '$_POST[email]' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {

	$_SESSION['check'] = true;
	$_SESSION['msg'] = 'E-mail salvo com sucesso.';
	$_SESSION['alert_color'] = 1;
	header('Location:../index.php');
	exit();

} else {

	echo "Error: " . $sql . "<br>" . $conn->error;
	


}