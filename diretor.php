
<?php

header('Content-Type: text/html; charset=utf-8');
include ('funcoes/conn.php');
include ('funcoes/verifica_login.php');


?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'import/import_head.php'; ?>

</head>
<body>
	<?php include 'import/header.php'; 
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
								<h4>Área do Diretor</h4>
								<?php echo 'Bem vindo <strong>'.$_SESSION['usuario'].'</strong>'; ?>
								<p>Veja aqui a lista de aprovados aguardando emissão de certificados.</p>

								<?php include 'import/filtrar.php'; ?>
								
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
										$responsavel 				= $linha["responsavel"];
										$status_participa 			= $linha["status_participa"];
										$situacao					= $linha["id_situacao_ativ"];
										$id_participa 				= $linha["id_participa"];
										

										if ($status_participa ) {
											$todos++;
										}
										if ($situacao == 3 && $status_participa ) {
											$aprovados++;
										}
										if ($situacao == 8 && $status_participa) {
											$reprovados++;
										}
										if ($situacao == 2 || $situacao == 4 && $status_participa) {
											$emitidos++;
										}
										if ($situacao == 5 && $status_participa) {
											$correcao++;
										}
										if ($situacao == 6 && $status_participa) {
											$cancelados++;
										}
									}

								}
								?>

								<ul class="nav nav-tabs ">
									<li class="nav-item" id="todos">
										<a class="nav-link active " href="#">Todos <span class="badge badge-pill badge-success"><?php echo $todos; ?></span></a>
									</li>
									<li class="nav-item " id="aprovados">
										<a class="nav-link" href="#">Aprovados <span class="badge badge-pill badge-success"><?php echo $aprovados; ?></span></a>
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
								</ul>
								<table id="tableAcao" class="table table-bordered table-condensed ">
									<thead class="text-light bg-success">
										<tr class="text-center">
											<th ><a>#</a></th>
											<th class=""><a>Nome</a></th>
											<th class="tr-max"><a>Curso</a></th>
											<th class=""><a>Situação</a></th>
											<th class="actions actions-90">Ações</th>
										</tr>
									</thead>
									<tbody>
										<?php include 'import/tabela_diretor.php'; ?>

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
		<script src="js/altera_cor_situacao.js"></script>
		<script src="js/filtra.js"></script>
	</body>
	</html>