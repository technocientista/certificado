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
			$situacao_participa = $linha['fk_situacao_ativ_id_situacao_ativ'];
		}
		
		
	}
}

if ($status_participa && $situacao_participa == 3) {
	# code...
	$sql2 = "UPDATE participa SET fk_situacao_ativ_id_situacao_ativ = 2 WHERE id_participa='$id'";
	$resultado_usuario = mysqli_query($conn, $sql2);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "Assinatura de aprovação realizada com sucesso!";
		$_SESSION['check'] = 1;
		$_SESSION['alert_color'] = 1;
		header("Location: ../diretor.php");
		exit();

	}else{

		$_SESSION['msg'] = "Erro de conexão: Não foi possível aprovar o aluno";
		$_SESSION['check'] = 1;
		header("Location: ../diretor.php");
		exit();
	}
}else{

	$_SESSION['msg'] = "<strong>Impossível assinar.</strong> O aluno não ainda foi aprovado";
	$_SESSION['check'] = 1;
	header("Location: ../diretor.php");
	exit();
}



?>