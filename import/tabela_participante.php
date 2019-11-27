
<?php 
include 'funcoes/conn.php';
$id = $_SESSION['id'];

$sql = "SELECT * FROM (((participa AS p 
JOIN usuario AS u  ON p.fk_usuario_id_usuario = u.id_usuario)
JOIN situacao_ativ AS s ON p.fk_situacao_ativ_id_situacao_ativ = s.id_situacao_ativ)
JOIN atividade AS a ON p.fk_atv_id_atv = a.id_atv)";


$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
	
	while($linha = $resultado->fetch_assoc()) {
		
		$id_atv 				= $linha["id_atv"];
		$nome_atv 				= $linha["nome_atv"];
		$carga_horaria_atv 		= $linha["carga_horaria_atv"];
		$data_inicial_atv 		= $linha["data_inicial_atv"];
		$data_final_atv 		= $linha["data_final_atv"];
		$local 					= $linha["local"];
		$descricao 				= $linha["descricao"];
		$situacao_ativ2 		= $linha["fk_situacao_ativ_id_situacao_ativ"];

		$id_usuario 			= $linha["fk_usuario_id_usuario"];
		

		$id_situacao_ativ 		= $linha["id_situacao_ativ"];
		$situacao_ativ 			= $linha["situacao_ativ"];

		$id_participa 			= $linha["id_participa"];
		$status_participa 		= $linha['status_participa'];

		
		if ($id == $id_usuario && $status_participa == 1) {

			if ($status_participa) {
				if ( $id_situacao_ativ == 3) {
					echo "<tr class='aprovados linha'>";
					include 'linha_tabela_participante.php';
				}
				if ($id_situacao_ativ == 8) {
					echo "<tr class='reprovados linha'>";
					include 'linha_tabela_participante.php';

				}
				if ($id_situacao_ativ == 4) {
					echo "<tr class='emitidos linha'>";
					include 'linha_tabela_participante.php';

				}
				if ($id_situacao_ativ == 5) {
					echo "<tr class='correcao linha'>";
					include 'linha_tabela_participante.php';

				}
				if ($id_situacao_ativ == 2) {
					echo "<tr class='assinados linha'>";
					include 'linha_tabela_participante.php';

				}
				if ($id_situacao_ativ == 6) {
					echo "<tr class='cancelados linha'>";
					include 'linha_tabela_participante.php';

				}
				if ($id_situacao_ativ == 1 || $id_situacao_ativ == 7 || $id_situacao_ativ == 9 ) {
					echo "<tr class='todos linha'>";
					include 'linha_tabela_participante.php';
				}
			} 
		}
	}
}

?>
