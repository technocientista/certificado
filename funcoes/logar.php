<?php
session_start();
include ('conn.php');


$usuario = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT * FROM usuario WHERE login = '{$usuario}' AND senha = '{$senha}'";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
	# code...
	while($linha = $result->fetch_assoc()) {
		if ($usuario==$linha["login"]) {
			# code...
			$_SESSION['id'] 	= $linha["id_usuario"];
			$id 				= $linha["id_usuario"];
			$fk_papel_id_papel 	= $linha["fk_papel_id_papel"];
			$_SESSION['papel'] 	= $fk_papel_id_papel;
			
			//$status = $linha["status"];
		}
	}

	/*if (!$status) {
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
	}*/
	
	if ($fk_papel_id_papel==1) {

		$_SESSION['usuario'] = $usuario;
		header('Location:../responsavel.php');
		exit();
	}
	if ($fk_papel_id_papel==2) {
		$_SESSION['usuario'] = $usuario;
		header('Location:../participante.php');
		exit();
	}
	if ($fk_papel_id_papel==3) {
		$_SESSION['usuario'] = $usuario;
		header('Location:../diretor.php');
		exit();
	}
	if ($fk_papel_id_papel==4) {
		$_SESSION['usuario'] = $usuario;
		header('Location:../admin.php');
		exit();
	}
	
}else{
	$_SESSION['check'] = 1;
	$_SESSION['msg'] = 'Usuário ou senha inválidos.';
	header('Location:../index.php');
	exit();
}



