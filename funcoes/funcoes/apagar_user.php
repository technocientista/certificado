<?php
session_start();
include_once("conn.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM usuarios WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado apagado com sucesso</p>";
		header("Location: ../admin.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro: O Usuário não foi apagado</p>";
		header("Location: ../admin.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um it</p>";
	header("Location: ../admin.php");
}
