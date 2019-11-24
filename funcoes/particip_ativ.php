<?php 


session_start();
include 'conn.php';
$id = $_GET['id'];
$id_user = $_SESSION['id'];

if (isset($_SESSION['id'])) {

	$select = "SELECT * FROM participa";

	$resultado = $conn->query($select);

	if ($resultado->num_rows > 0) {

		while($linha = $resultado->fetch_assoc()) {
			$id_usuario 			= $linha["fk_usuario_id_usuario"];
			$fk_atv_id_atv 			= $linha["fk_atv_id_atv"];
			$status_participa 		= $linha['status_participa'];

			if ($id_user == $id_usuario && $id == $fk_atv_id_atv ) {
				if (!$status_participa) {
					$sql = "UPDATE participa SET status_participa = 1, fk_situacao_ativ_id_situacao_ativ = 1 WHERE id_participa = '{$id}'";
					$resultado_usuario = mysqli_query($conn, $sql);
					if(mysqli_affected_rows($conn)){
						$_SESSION['msg'] = "Atividade adicionada com sucesso!";
						$_SESSION['check'] = 1;
						$_SESSION['alert_color'] = 1;
						header("Location: ../participante.php");
						exit();
					}
				}else{
					$_SESSION['msg'] = "Essa atividade já está adicionada!";
					$_SESSION['check'] = 1;
					header("Location: ../participante.php");
					exit();
				}
			}
		}


		$sql = "INSERT INTO participa (fk_usuario_id_usuario, fk_atv_id_atv) VALUES ('{$id_user}', '{$id}')";
		$resultado_usuario = mysqli_query($conn, $sql);
		if(mysqli_affected_rows($conn)){
			$_SESSION['msg'] = "Atividade adicionada com sucesso!";
			$_SESSION['check'] = 1;
			$_SESSION['alert_color'] = 1;
			header("Location: ../participante.php");
			exit();

		}else{

			$_SESSION['msg'] = "ERRO: Atividade não adicionada!";
			$_SESSION['check'] = 1;
			header("Location: ../participante.php");
			exit();
		}
	}

}else{
	$_SESSION['msg'] = "<strong>Atenção: </strong>Registre-se ou faça <a href='index.php'><strong>Login</strong></a> para poder participar das atividades.";
	$_SESSION['check'] = 1;
	header("Location: ../registro.php");
	exit();
}


?>