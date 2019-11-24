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

if ($status_participa && $situacao_participa != 3) {
	# code...
	$sql2 = "UPDATE participa SET fk_situacao_ativ_id_situacao_ativ = 3 WHERE id_participa='$id'";
	$resultado_usuario = mysqli_query($conn, $sql2);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "O aluno foi aprovado!";
		$_SESSION['check'] = 1;
		$_SESSION['alert_color'] = 1;
		header("Location: ../responsavel.php");
		exit();

	}else{

		$_SESSION['msg'] = "Erro: Não foi possível aprovar o aluno";
		$_SESSION['check'] = 1;
		header("Location: ../responsavel.php");
		exit();
	}
}else{

	$_SESSION['msg'] = "O aluno não pode ser aprovado pois ele <strong>cancelou</strong> esse curso ou já está <strong>aprovado</strong>.";
	$_SESSION['check'] = 1;
	header("Location: ../responsavel.php");
	exit();
}



?>