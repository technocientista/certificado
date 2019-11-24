<?php 
session_start();
include 'conn.php';
$id = $_GET['id'];

$sql = "SELECT * FROM usuarios ";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
	while($linha = $resultado->fetch_assoc()) {
		if ($id == $linha["id"]) {
			# code...
			$status = $linha['status'];
		}
		
		
	}
}

if ($status) {
	# code...
	$sql2 = "UPDATE usuarios SET status = 0 WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $sql2);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "O Status do usuário foi atualizado";
		$_SESSION['check'] = 1;
		$_SESSION['alert_color'] = 1;
		header("Location: ../admin.php");
		exit();

	}else{

		$_SESSION['msg'] = "Erro: Status não atualizado";
		
		header("Location: ../admin.php");
		exit();
	}
}else{
	
			# code...
	$sql2 = "UPDATE usuarios SET status = 1 WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $sql2);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "O Status do usuário foi atualizado";
		$_SESSION['check'] = 1;
		$_SESSION['alert_color'] = 1;
		header("Location: ../admin.php");
		exit();
	}else{

		$_SESSION['msg'] = "Erro: Status não atualizado";
		
		header("Location: ../admin.php");
		exit();
	}
	
}



?>