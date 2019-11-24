<?php
session_start();
include 'conn.php';
$id = $_GET['id'];

$sql = "SELECT * FROM atividade";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
	while($linha = $resultado->fetch_assoc()) {
		if ($id == $linha["id_atv"]) {
			# code...
			$status_atv = $linha['status_atv'];
			$situacao_ativ = $linha['fk_situacao_ativ_id_situacao_ativ'];
		}
		
		
	}
}

if ($status_atv && $situacao_ativ == 1) {
	$sql2 = "UPDATE atividade SET status_atv = 1, fk_situacao_ativ_id_situacao_ativ = 9 WHERE id_atv='$id';";
	$resultado_usuario = mysqli_query($conn, $sql2);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "A atividade foi iniciada com sucesso!";
		$_SESSION['check'] = 1;
		$_SESSION['alert_color'] = 1;
		header("Location: ../atividades.php");
		exit();

	}else{

		$_SESSION['msg'] = "Erro de conexão: Não foi possível iniciara atividade.";
		$_SESSION['check'] = 1;
		header("Location: ../atividades.php");
		exit();
	}
}