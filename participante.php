<?php


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
	<?php include 'import/modal.php'; ?>


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
										
								<?php
								include 'funcoes/conn.php';
								$usuario_logado = $_SESSION['id'];


								$sql2 = "SELECT * FROM (((participa AS p 
								JOIN usuario AS u  ON p.fk_usuario_id_usuario = u.id_usuario)
								JOIN situacao_ativ AS s ON p.fk_situacao_ativ_id_situacao_ativ = s.id_situacao_ativ)
								JOIN atividade AS a ON p.fk_atv_id_atv = a.id_atv)";

								$resultado 	= $conn->query($sql2);
								$todos 		= 0;
								$aprovados 	= 0;
								$reprovados = 0;
								$emitidos 	= 0;
								$correcao 	= 0;
								$cancelados = 0;

								if ($resultado->num_rows > 0) {
									while($linha = $resultado->fetch_assoc()) {
										$participante 				= $linha["id_usuario"];
										$status_participa 			= $linha["status_participa"];
										$situacao					= $linha["id_situacao_ativ"];

										if ($usuario_logado==$participante && $status_participa ) {
											$todos++;
										}
										if ($usuario_logado==$participante  && $situacao == 3 && $status_participa ) {
											$aprovados++;
										}
										if ($usuario_logado==$participante  && $situacao == 8 && $status_participa) {
											$reprovados++;
										}
										if ($usuario_logado==$participante  && $situacao == 4 && $status_participa) {
											$emitidos++;
										}
										if ($usuario_logado==$participante  && $situacao == 5 && $status_participa) {
											$correcao++;
										}
										if ($usuario_logado==$participante  && $situacao == 6 && $status_participa) {
											$cancelados++;
										}
									}

								}
								?>
								<ul class="nav nav-tabs">
									<li class="nav-item" id="todos">
										<a class="nav-link active" href="#">Todos <span class="badge badge-pill badge-success"><?php echo $todos; ?></span></a>
									</li>
									<li class="nav-item" id="aprovados">
										<a class="nav-link" href="#">Aprovados <span class="badge badge-pill badge-success"><?php echo $aprovados; ?></span></a>
									</li>
									<li class="nav-item" id="reprovados">
										<a class="nav-link" href="#">Reprovados <span class="badge badge-pill badge-success"><?php echo $reprovados; ?></span></a>
									</li>
									<li class="nav-item" id="emitidos">
										<a class="nav-link" href="#">Emitidos <span class="badge badge-pill badge-success"><?php echo $emitidos; ?></span></a>
									</li>
									<li class="nav-item" id="correcao">
										<a class="nav-link" href="#">Correção <span class="badge badge-pill badge-success"><?php echo $correcao; ?></span></a>
									</li>
									<li class="nav-item" id="cancelados">
										<a class="nav-link " href="#" >Cancelados <span class="badge badge-pill badge-success"><?php echo $cancelados; ?></span></a>
									</li>
								</ul>
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
												$carga_horaria_atv 		= $linha["carga_horaria_atv"];

												$id_usuario 			= $linha["fk_usuario_id_usuario"];
												

												$id_situacao_ativ 		= $linha["id_situacao_ativ"];
												$situacao_ativ 			= $linha["situacao_ativ"];

												$id_participa 			= $linha["id_participa"];
												$status_participa 		= $linha['status_participa'];

												
												if ($id == $id_usuario && $status_participa == 1) {

													if ($status_participa) {
														if ( $id_situacao_ativ == 3) {
															echo "<tr class='aprovados'>";
															include 'import/linha_tabela_participante.php';
														}
														if ($id_situacao_ativ == 8) {
															echo "<tr class='reprovados'>";
															include 'import/linha_tabela_participante.php';

														}
														if ($id_situacao_ativ == 4) {
															echo "<tr class='emitidos'>";
															include 'import/linha_tabela_participante.php';

														}
														if ($id_situacao_ativ == 5) {
															echo "<tr class='correcao'>";
															include 'import/linha_tabela_participante.php';

														}
														if ($id_situacao_ativ == 6) {
															echo "<tr class='cancelados'>";
															include 'import/linha_tabela_participante.php';

														}
														if ($id_situacao_ativ == 1 || $id_situacao_ativ == 2 || $id_situacao_ativ == 7 || $id_situacao_ativ == 9 ) {
															echo "<tr class='todos'>";
															include 'import/linha_tabela_participante.php';
														}
													} 
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
		<script type="text/javascript">
			$(document).ready(function(){
				$('.aprovados').find('.badge').addClass('badge-success');
				$('.reprovados').find('.badge').addClass('badge-danger');
				$('.emitidos').find('.badge').addClass('badge-success');
				$('.correcao').find('.badge').addClass('badge-warning');
				$('.cancelados').find('.badge').addClass('badge-danger');
				$('.todos').find('.badge').addClass('badge-primary');
			});
		</script>
	</body>
	</html>