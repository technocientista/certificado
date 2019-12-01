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
	<?php 
	include 'import/header_participante.php';
	include 'import/modal.php'; ?>


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

								<?php include 'import/filtrar.php'; ?>

							</div>
							<div class="table-responsive-lg">

								<?php
								include 'funcoes/conn.php';
								$usuario_logado = $_SESSION['id'];


								$sql2 = "SELECT * FROM (((participa AS p 
								JOIN usuario AS u  ON p.fk_usuario_id_usuario = u.id_usuario)
								JOIN situacao_ativ AS s ON p.fk_situacao_ativ_id_situacao_ativ = s.id_situacao_ativ)
								JOIN atividade AS a ON p.fk_atv_id_atv = a.id_atv)
								WHERE fk_usuario_id_usuario='$usuario_logado'";

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

										if ($status_participa) {

											$todos++;
											
											
											if ( $situacao == 3  ) {
												$aprovados++;
											}
											if ( $situacao == 8 ) {
												$reprovados++;
											}
											
											if ( $situacao == 4 ) {
												$emitidos++;
											}
											if ( $situacao == 2 ) {
												$emitidos++;
											}
											
											if ( $situacao == 5 ) {
												$correcao++;
											}
											if ( $situacao == 6 ) {
												$cancelados++;
											}
											
										}

										
									}

								}
								?>
								<ul class="nav nav-tabs">
									
									<li class="nav-item" id="aprovados">
										<a class="nav-link active" href="#">Aprovados <span class="badge badge-pill badge-success"><?php echo $aprovados; ?></span></a>
									</li>
									<li class="nav-item" id="reprovados">
										<a class="nav-link" href="#">Reprovados <span class="badge badge-pill badge-success"><?php echo $reprovados; ?></span></a>
									</li>
									<li class="nav-item" id="emitidos">
										<a class="nav-link" href="#">Emitidos/Assinados <span class="badge badge-pill badge-success"><?php echo $emitidos; ?></span></a>
									</li>
									<li class="nav-item" id="correcao">
										<a class="nav-link" href="#">Correção <span class="badge badge-pill badge-success"><?php echo $correcao; ?></span></a>
									</li>
									<li class="nav-item" id="cancelados">
										<a class="nav-link " href="#" >Cancelados <span class="badge badge-pill badge-success"><?php echo $cancelados; ?></span></a>
									</li>
									<li class="nav-item" id="todos">
										<a class="nav-link " href="#">Todos <span class="badge badge-pill badge-success"><?php echo $todos; ?></span></a>
									</li>
								</ul>
								
								<form method="post" action="funcoes/participante_acoes.php">

									<?php include 'import/modal_acoes.php'; ?>

									<table id="tableAcao" class="table table-bordered table-condensed ">
										<thead class="bg-light ">
											<tr class="text-center">
												<th class="tr-max"><a>#</a></th>
												<th ><a>Atividade</a></th>
												<th class="tr-max"><a>Carga horária</a></th>
												<th><a>Situação</a></th>
												<th class="actions actions-90">
													<div class="btn-group" role="group">
														<div class="container-fluid">
															

															<input class="" type="checkbox"  name="" value="" id="checkAll">

														</div>
														

														<a href="" class="text-danger abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Excluir atividade" data-confirm="Tem certeza que deseja excluir essa atividade?" name="apagar">
															<i class="material-icons sm-18">
																delete
															</i>
														</a>
														<a href="" class="text-success container-fluid abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Emitir certificados" data-confirm="Tem certeza que deseja emitir os certificados?" name="emitir">
															<i class="material-icons sm-18">
																check_circle_outline
															</i>
														</a>
													</div>
												</th>
											</tr>
										</thead>
										<tbody>
											<?php include 'import/tabela_participante.php'; ?>


										</tbody>
									</table>
								</form>
								
							</div>




							<!-- Body alterável: -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include 'import/footer.php'; ?>
		<?php include 'import/import_script.php'; ?>
		<script src="js/altera_cor_situacao.js"></script>
		<script src="js/dados.js"></script>
		<script src="js/filtra.js"></script>
		<script src="js/check.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#participante').addClass('active');
			});

		</script>
	</body>
	</html>
	<?php 
	mysqli_close($conn);
	?>