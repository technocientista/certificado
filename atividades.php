<?php
include 'funcoes/verifica_session_start.php';
header('Content-Type: text/html; charset=utf-8');

include ('funcoes/verifica_login.php');


?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'import/import_head.php'; ?>

</head>
<body>
	<?php include 'import/header_responsavel.php'; ?>


	<div class="wrapper">
		<div class="main-view"> 
			<div class="container bottom70">
				<div class=" row margin-top">
					<div class="col-lg-12">
						<div class="jumbotron box box-success">
							<!-- Body alterável: -->

							<?php include 'funcoes/alert.php'; ?>

							<h5>Atividades</h5>
							<p>Veja aqui a sua lista de atividades e suas situações.</p>
							<form class="form-inline row">

								<div class="col-lg-6 col-6">
									<input class="form-control mr-sm-2" type="search" placeholder="Digite sua busca" aria-label="Search">

									<button class="btn  btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
								</div>
								<div class="col-lg-6 col-6 text-right">
									<a class="btn btn-outline-success my-2 my-sm-0" href="registrar_atividade.php">Nova atividade</a>
								</div>	
								
							</form>



							
							
							
							<div class="table-responsive-lg">
								<table id="tableAcao" class="table table-striped table-hover table-bordered table-condensed">
									<thead>
										<tr class="text-center">
											<th class="tr-max"><a>#</a></th>
											<th ><a>Atividade</a></th>
											<th class="tr-max"><a>Carga horária</a></th>
											<th><a>Situação</a></th>
											<th class="actions actions-90">Ações</th>
										</tr>
									</thead>
									<tbody>
										<?php 

										include "funcoes/conn.php";

										

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
												$situacao 			= $linha["situacao_ativ"];

												if ( $status) {

													?>
													<tr>
														<th class="tr-max text-center"><?php echo $id_atv; ?></th>
														<td ><?php echo $nome_atv; ?></td>
														<td class="tr-max text-center"><?php echo $carga_horaria_atv; ?></td>
														<td class="text-center">
															<label class="badge badge-primary text-wrap"><?php echo $situacao; ?></label>
														</td>


														<td class="actions text-light text-center">
															<div class="btn-group" role="group">
																<a class="btn btn-primary btn-sm" title="Alterar situação">
																	<i class="material-icons sm-18">
																		update
																	</i>
																</a>
																<a class="btn btn-danger btn-sm" title="Excluir atividade">
																	<i class="material-icons sm-18">
																		delete
																	</i>
																</a>
																<a class="btn btn-success btn-sm" title="Detalhes">
																	<i class="material-icons sm-18">
																		search
																	</i>
																</a>
															</div>
														</td>
													</tr>
													<?php 
												}
											}
										}
										?>
									</tbody>
								</table>
							</div>




							<!-- Body alterável: -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include 'import/footer.php'; ?>
		<?php include 'import/import_script.php'; ?>
	</body>
	</html>