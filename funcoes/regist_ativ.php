<?php 
session_start();
include 'conn.php';

$sql = "INSERT INTO atividade ( nome_atv, data_inicial_atv, carga_horaria_atv, data_final_atv, local)
VALUES 
(
	'$_POST[nome_atv]',
	'$_POST[data_inicial_atv]',
	'$_POST[carga_horaria_atv]',
	'$_POST[data_final_atv]',
	'$_POST[local]'
	
)";


if ($conn->query($sql) === TRUE) {

	$_SESSION['check'] 			= 1;
	$_SESSION['msg']			= 'Nova atividade cadastrado!';
	$_SESSION['alert_color']	= 1;
	header("location: ../atividades.php");
	exit();

} else {

	echo "Error: " . $sql . "<br>" . $conn->error;



}