<?php
session_start();
$id = $_SESSION['id'];
include "conn.php";

$placa = $_POST['placaLetras'].$_POST['placaNum'];
$sql = "INSERT INTO ait ( placa, veiculo, inf, rua, num, lado, hora, usuario)
VALUES 
('".strtoupper($placa)."',
	'".strtoupper($_POST['veiculo'])."',
	'".strtoupper($_POST['inf'])."',
	'".strtoupper($_POST['rua'])."',
	'$_POST[num]',
	'$_POST[lado]',
	'$_POST[hora]',
	'$id'
)";



if ($conn->query($sql) === TRUE) {

	$_SESSION['check'] = true;
	$_SESSION['msg'] = 'Notificação cadastrada com sucesso.';
	$_SESSION['alert_color'] = 1;
	header("location: ../cadastro.php");
	exit();

} else {

	echo "Error: " . $sql . "<br>" . $conn->error;
	


}



