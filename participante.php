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
	<?php include 'import/header_participante.php'; ?>


	<div class="wrapper">
		<div class="main-view"> 
			<div class="container bottom70">
				<div class=" row margin-top">
					<div class="col-lg-12">
						<div class="jumbotron box box-success">
							<!-- Body alterável: -->
							<div >
								<?php include 'funcoes/alert.php'; ?>
								<h4>Área do participante</h4>
								<?php echo 'Bem vindo <strong>'.$_SESSION['usuario'].'</strong>'; ?>
								<p>Veja aqui a sua lista de atividades e suas situações.</p>
								<form class="form-inline">
									<input class="form-control mr-sm-2" type="search" placeholder="Filtrar" aria-label="Search">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
								</form>
							</div>
							<div class="table-responsive-lg">
								<table id="tableAcao" class="table table-striped table-hover table-bordered table-condensed">
									<thead>
										<tr>
											<th class="tr-max"><a>#</a></th>
											<th ><a>Atividade</a></th>
											<th class="tr-max"><a>Carga horária</a></th>
											<th><a>Situação</a></th>
											<th class="actions actions-90">Ações</th>
										</tr>
									</thead>
									<tbody>
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
												$carga_horaria_atv 			= $linha["carga_horaria_atv"];

												$id_usuario 			= $linha["fk_usuario_id_usuario"];
												

												$id_situacao_ativ 		= $linha["id_situacao_ativ"];
												$situacao_ativ 			= $linha["situacao_ativ"];

												$id_participa 			= $linha["id_participa"];

												
												if ($id == $id_usuario) {

													?>

													<tr>
														<th class="tr-max"><?php echo $id_participa; ?></th>
														<td ><?php echo $nome_atv; ?></td>
														<td class="tr-max text-center"><?php echo $carga_horaria_atv; ?></td>
														<td class="text-center"><label class="badge badge-primary text-wrap"><?php echo $situacao_ativ; ?></label></td>


														<td class="actions text-light text-center">
															<div class="btn-group" role="group">
																<a class="btn btn-primary btn-sm" title="Visualizar Curso">
																	<i class="material-icons sm-18">
																		search
																	</i>
																</a>
																<a class="btn btn-danger btn-sm">
																	<i class="material-icons sm-18">
																		delete
																	</i>
																</a>
																<a class="btn btn-success btn-sm">
																	<i class="material-icons sm-18">
																		print
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