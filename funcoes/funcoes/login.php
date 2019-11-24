<?php
session_start();
include ('conn.php');
if (empty($_POST['usuario']) || empty($_POST['senha'])){
	# code...
	$_SESSION['check'] = true;
	$_SESSION['msg'] = 'Digite usuário e senha';
	header('Location:../index.php');
	exit();
}



$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT * FROM usuarios WHERE usuario = '{$usuario}' AND senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
	# code...
	while($linha = $result->fetch_assoc()) {
		if ($usuario==$linha["usuario"]) {
			# code...
			$_SESSION['id'] = $linha["id"];
			$id = $linha["id"];
			$email = $linha["email"];
			$status = $linha["status"];
		}
	}
	if (!$status) {
		# code...
		$_SESSION['check'] = true;
		$_SESSION['msg'] = 'Usuário desativado! Entre em contato com o desenvolvedor.';
		header('Location:../index.php');
		exit();
	}else{
		if ($id==1) {
			$_SESSION['usuario'] = $usuario;
			header('Location:../admin.php');
			exit();
		}
	}

	if ($email == null) {
		$_SESSION['check'] = true;
		$_SESSION['msg'] = 'Digite um e-mail válido. Este servirá para redefinição de senha.';
		header('Location:../email.php');
		exit();
	}

	$_SESSION['usuario'] = $usuario;
	header('Location:../cadastro.php');
	exit();
}else{
	$_SESSION['check'] = true;
	$_SESSION['msg'] = 'Usuário ou senha inválidos.';
	header('Location:../index.php');
	exit();
}



