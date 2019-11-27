<?php 

include "funcoes/conn.php";
$usuario_logado = $_SESSION['id'];


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
		$status 			= $linha["status_atv"];
		$situacao_ativ 		= $linha["situacao_ativ"];
		$responsavel 		= $linha["responsavel"];
		$id_situacao_ativ 	= $linha["fk_situacao_ativ_id_situacao_ativ"];

		if ($usuario_logado==$responsavel) {
			if ( $status && $id_situacao_ativ != 6) {

				?>
				<tr class="ativas linha">
					<th class="tr-max text-center"><?php echo $id_atv; ?></th>
					<td class="td01"><?php echo $nome_atv; ?></td>
					<td class="tr-max text-center"><?php echo $carga_horaria_atv; ?></td>
					<td class="text-center">
						<?php 
						if ($id_situacao_ativ ==1) {
							echo '<label class="badge badge-primary text-wrap">'. $situacao_ativ . '</label>';
						}
						if ($id_situacao_ativ ==2) {
							echo '<label class="badge badge-primary text-wrap">'. $situacao_ativ . '</label>';
						}
						if ($id_situacao_ativ ==3) {
							echo '<label class="badge badge-success text-wrap">'. $situacao_ativ . '</label>';
						}
						if ($id_situacao_ativ ==4) {
							echo '<label class="badge badge-primary text-wrap">'. $situacao_ativ . '</label>';
						}
						if ($id_situacao_ativ ==5) {
							echo '<label class="badge badge-primary text-wrap">'. $situacao_ativ . '</label>';
						}
						if ($id_situacao_ativ ==6) {
							echo '<label class="badge badge-danger text-wrap">'. $situacao_ativ . '</label>';
						}
						if ($id_situacao_ativ ==7) {
							echo '<label class="badge badge-success text-wrap">'. $situacao_ativ . '</label>';
						}
						if ($id_situacao_ativ ==8) {
							echo '<label class="badge badge-danger text-wrap">'. $situacao_ativ . '</label>';
						}
						if ($id_situacao_ativ ==9) {
							echo '<label class="badge badge-success text-wrap">'. $situacao_ativ . '</label>';
						}

						?>
					</td>


					<td class="actions text-light text-center">
						<div class="btn-group" role="group">
							
							<a href="funcoes/apagar_atividade.php?id=<?php echo $id_atv;?>" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Pausar atividade" data-confirm="Tem certeza que deseja pausar a atividade?">
								<i class="material-icons sm-18">
									pause
								</i>
							</a>
							<a href="funcoes/iniciar_atividade.php?id=<?php echo $id_atv;?>" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Iniciar atividade" data-confirm="Tem certeza que deseja iniciar a atividade?" >
								<i class="material-icons sm-18">
									play_arrow
								</i>
							</a>
						</div>
					</td>
				</tr>
				<?php 
			}else{
													//Tabela apagados
				?>
				<tr class="apagadas collapse">
					<th class="tr-max text-center"><?php echo $id_atv; ?></th>
					<td ><?php echo $nome_atv; ?></td>
					<td class="tr-max text-center"><?php echo $carga_horaria_atv; ?></td>
					<td class="text-center">
						<label class="badge badge-danger text-wrap"><?php echo $situacao_ativ; ?></label>
						
					</td>


					<td class="actions text-light text-center">
						<div class="btn-group" role="group">
							
							<a href="funcoes/apagar_atividade.php?id=<?php echo $id_atv;?>" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Ativar atividade" data-confirm="Tem certeza que deseja ativar a atividade?" >
								<i class="material-icons sm-18">
									check
								</i>
							</a>
							
						</div>
					</td>
				</tr>
				<?php
			}

		}


	}
}
?>