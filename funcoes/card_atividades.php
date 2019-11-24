<?php 

include 'conn.php';



$sql = "SELECT * FROM atividade AS a JOIN situacao_ativ AS s ON a.fk_situacao_ativ_id_situacao_ativ = s.id_situacao_ativ ";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
	while($linha = $resultado->fetch_assoc()) {

		$id_atv 			= $linha["id_atv"];
		$nome_atv 			= $linha["nome_atv"];
		$data_inicial_atv 	= $linha["data_inicial_atv"];
		$carga_horaria_atv 	= $linha["carga_horaria_atv"];
		$data_final_atv 	= $linha["data_final_atv"];
		$local 				= $linha["local"];
		$descricao 			= $linha["descricao"];
		$status 			= $linha["status_atv"];
		$situacao 			= $linha["situacao_ativ"];

		if ( $status) {

			?>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="box  box-success">
					<div class="box-header">
						<h5 class="box-title"><?php echo $nome_atv; ?></h5>
					</div>
					<div class="box-body">
						<img class="box box-success" src="img/01.jpg">
						<p><?php echo $descricao; ?></p>
						<p><strong>Local: </strong><?php echo $local; ?></p>
						<p><strong>Data inicial: </strong><?php echo $data_inicial_atv; ?></p>
						<p><strong>Data final: </strong><?php echo $data_final_atv; ?></p>
						<p><strong>Carga horária: </strong><?php echo $carga_horaria_atv; ?></p>
						<p class="text-right"><a href="funcoes/particip_ativ.php?id=<?php echo $id_atv; ?>" class="btn btn-success" alt="Participar" title="Participar">Participar</a></p>
					</div>
				</div>
			</div>
			<?php 
		}
	}
}
?>