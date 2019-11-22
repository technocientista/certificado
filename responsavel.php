<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include ('funcoes/conn.php');
//include ('funcoes/verifica_login.php');


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
							<div >
								<h4>Área do Responsável</h4>
								<?php echo 'Bem vindo <strong>'.$_SESSION['usuario'].'</strong>'; ?>
								
								<p>Veja aqui a sua lista de participantes e suas situações.</p>
								
								<div class="form-row align-items-center">
									<div class="col-auto col-lg-3">
										<label class="sr-only" for="inlineFormInputGroup">Username</label>
										<div class="input-group mb-2 ">
											<div class="input-group-prepend">
												<div class="input-group-text bg-success text-light">
													<i class="material-icons ">
														search
													</i>
												</div>
											</div>
											<input type="text" class="form-control form-control-lg" id="inlineFormInputGroup" placeholder="Nome ou CPF">
										</div>
									</div>
								</div>

							</div>
							<div class="table-responsive-lg">
								<ul class="nav nav-tabs">
									<li class="nav-item">
										<a class="nav-link active" href="#">Todos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Aprovados</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Emitidos</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Correção</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " href="#" >Cancelados</a>
									</li>
								</ul>
								
								<table id="tableAcao" class="table table-striped table-hover table-bordered table-condensed">
									<thead>
										<tr class="text-center">
											<th ><a>Nome</a></th>
											<th class="tr-max"><a>CPF</a></th>
											<th class="tr-max"><a>E-mail</a></th>
											<th class=""><a>Situação</a></th>
											<th class="actions actions-90">Ações</th>
										</tr>
									</thead>
									<tbody>
										<?php 

										

										

										$sql = "SELECT * FROM participa AS p 
										INNER JOIN usuario AS u  ON p.fk_usuario_id_usuario = u.id_usuario
										INNER JOIN situacao_certif AS s ON p.fk_situacao_certif_id_situacao_certif = s.id_situacao_certif
										INNER JOIN atividade AS a ON p.fk_situacao_certif_id_situacao_certif = a.id_atv";

										$resultado = $conn->query($sql);

										if ($resultado->num_rows > 0) {
											while($linha = $resultado->fetch_assoc()) {
												
												$id_atv 				= $linha["id_certificado"];
												$nome_usuario 			= $linha["nome_usuario"];
												$email_usuario 			= $linha["email_usuario"];
												$cpf_usuario 			= $linha["cpf_usuario"];
												$id_situacao_certif 	= $linha["id_situacao_certif"];
												$situacao_certif 		= $linha["situacao_certif"];
												$status_usuario 		= $linha["status_usuario"];

												

												if ( $status_usuario) {

													?>
													<tr>
														<th ><?php echo $nome_usuario; ?></th>
														<td class="tr-max"><?php echo $cpf_usuario; ?></td>
														<td class="tr-max text-center"><?php echo $email_usuario; ?></td>
														<td class=" text-center">
															<label class="badge badge-primary text-wrap"><?php echo $situacao_certif; ?></label>
														</td>


														<td class="actions text-light text-center">
															<div class="btn-group" role="group">
																<a class="btn btn-primary btn-sm" title="Imprimir">
																	<i class="material-icons sm-18">
																		print
																	</i>
																</a>
																<a class="btn btn-danger btn-sm" title="Cancelar aprovação">
																	<i class="material-icons sm-18">
																		cancel
																	</i>
																</a>
																<a class="btn btn-success btn-sm" title="Assinar aprovação">
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
										}else{
											echo 'Sem resultados';
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