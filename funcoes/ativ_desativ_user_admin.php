<?php 
session_start();
include 'conn.php';
$id = $_GET['id'];

$sql = "SELECT * FROM usuario";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
	while($linha = $resultado->fetch_assoc()) {
		if ($id == $linha["id_usuario"]) {
			# code...
			$status_usuario = $linha['status_usuario'];
		}
	}
}

if ($status_usuario) {
	# code...
	$sql = "UPDATE usuario SET status_usuario = 0 WHERE id_usuario='$id'";
	$resultado_usuario = mysqli_query($conn, $sql);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "O usuário foi desativado!";
		$_SESSION['check'] = 1;
		$_SESSION['alert_color'] = 1;
		header("Location: ../admin.php");
		exit();

	}else{

		$_SESSION['msg'] = "Erro de conexão: Status não atualizado";
		$_SESSION['check'] = 1;
		header("Location: ../admin.php");
		exit();
	}
}else{
	$sql = "UPDATE usuario SET status_usuario = 1 WHERE id_usuario='$id'";
	$resultado_usuario = mysqli_query($conn, $sql);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "O usuário foi ativado!";
		$_SESSION['check'] = 1;
		$_SESSION['alert_color'] = 1;
		header("Location: ../admin.php");
		exit();

	}else{

		$_SESSION['msg'] = "Erro de conexão: Status não atualizado";
		$_SESSION['check'] = 1;
		header("Location: ../admin.php");
		exit();
	}
}



?>