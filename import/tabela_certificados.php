
<?php 
include 'funcoes/conn.php';
$id = $_SESSION['id'];

$sql = "SELECT * FROM (((participa AS p 
JOIN usuario AS u  ON p.fk_usuario_id_usuario = u.id_usuario)
JOIN situacao_ativ AS s ON p.fk_situacao_ativ_id_situacao_ativ = s.id_situacao_ativ)
JOIN atividade AS a ON p.fk_atv_id_atv = a.id_atv)
WHERE id_usuario='$id'";


$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
	
	while($linha = $resultado->fetch_assoc()) {


		$id_atv 				= $linha["id_atv"];
		$nome_atv 				= $linha["nome_atv"];
		$carga_horaria_atv 		= $linha["carga_horaria_atv"];
		
		$id_usuario 			= $linha["fk_usuario_id_usuario"];

		$situacao_participa 	= $linha['id_situacao_ativ'];
		$status_participa 		= $linha['status_participa'];

		if ($situacao_participa == 4) {

			$id_participa 		= $linha["id_participa"];
			
			$sql2 = "SELECT * FROM certificado ";

			$result = $conn->query($sql2);

			if ($result->num_rows > 0) {

				while($linha = $result->fetch_assoc()) {

					$id_certificado 		= $linha["id_certificado"];
					$fk_participa 			= $linha["fk_participa_id_participa"];
					$situacao_certificado 	= $linha["fk_situacao_certif_id_situacao_certif"];

					if ($fk_participa == $id_participa ) {
						
						include 'import/linha_tabela_certificados.php';
						
					}

					
				}
			}


		}
	}

}







?>
