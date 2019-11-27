<?php
include 'funcoes/conn.php';
$usuario_logado = $_SESSION['id'];


$sql = "SELECT * FROM usuario ";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
	while($linha = $resultado->fetch_assoc()) {

		$status_usuario			= $linha["status_usuario"];
		$nome_usuario			= $linha["nome_usuario"];
		$email_usuario			= $linha["email_usuario"];
		$cpf_usuario			= $linha["cpf_usuario"];
		$login 					= $linha["login"];
		$tel_usuario			= $linha["tel_usuario"];
		$id_usuario				= $linha["id_usuario"];


		
		include 'linha_tabela_admin.php';
	}
}else{
	echo 'Sem resultados';
}
?>
