<?php 
session_start();
include 'conn.php';
$id = $_GET['id'];

$sql = "SELECT * FROM ait ";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
	while($linha = $resultado->fetch_assoc()) {
		if ($id == $linha["ait"]) {
			# code...
			$status = $linha['status'];
		}
		
		
	}
}

if (!$status) {
	# code...
	$sql2 = "UPDATE ait SET status = 1 WHERE ait='$id'";
	$resultado_usuario = mysqli_query($conn, $sql2);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "O item foi apagado com sucesso!";
		$_SESSION['check'] = 1;
		$_SESSION['alert_color'] = 1;
		header("Location: ../lista.php");
		exit();

	}else{

		$_SESSION['msg'] = "Erro: Status não atualizado";
		
		header("Location: ../lista.php");
		exit();
	}
}



?>