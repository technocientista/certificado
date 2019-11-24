<?php 
session_start();
include 'conn.php';
$id = $_GET['id'];

$sql = "SELECT * FROM participa";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
	while($linha = $resultado->fetch_assoc()) {
		if ($id == $linha["id_participa"]) {
			# code...
			$status_participa = $linha['status_participa'];
		}
		
		
	}
}

if ($status_participa) {
	# code...
	$sql2 = "UPDATE participa SET status_participa = 0, fk_situacao_ativ_id_situacao_ativ = 6 WHERE id_participa='$id'";
	$resultado_usuario = mysqli_query($conn, $sql2);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "O item foi apagado com sucesso!";
		$_SESSION['check'] = 1;
		$_SESSION['alert_color'] = 1;
		header("Location: ../participante.php");
		exit();

	}else{

		$_SESSION['msg'] = "Erro: Status não atualizado";
		$_SESSION['check'] = 1;
		header("Location: ../participante.php");
		exit();
	}
}



?>