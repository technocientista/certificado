<?php
session_start();

include "conn.php";
if (empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['nome']) || empty($_POST['email'])){
	# code...
	$_SESSION['check']	= 1;
	$_SESSION['msg']	= 'Todos os campos são obrigatórios!';
	header('location: ../registro.php');
	exit();
}

$sql = "INSERT INTO usuarios ( nome, usuario, senha, email)
VALUES 
(
	'$_POST[nome]',
	'$_POST[usuario]',
	'$_POST[senha]',
	'$_POST[email]'
)";

$novo_usuario = $_POST["usuario"];

$select = "SELECT * FROM usuarios ";
$resultado = $conn->query($select);

if ($resultado->num_rows > 0) {
	while($linha = $resultado->fetch_assoc()) {

		$usuario = $linha["usuario"];
		
				
	}
}


if (!strcmp($usuario,$novo_usuario)) {
					# code...
	$_SESSION['check'] 	= true;
	$_SESSION['msg']	= 'Este usuário já existe!';
	header("location: ../registro.php");
	exit();
}else{
	if ($conn->query($sql) === TRUE) {

		$_SESSION['check'] = true;
		$_SESSION['msg']	= 'Novo usuário cadastrado!';
		$_SESSION['alert_color']	= 1;
		header("location: ../registro.php");
		exit();

	} else {

		echo "Error: " . $sql . "<br>" . $conn->error;



	}


}



