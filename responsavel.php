<?php
include 'funcoes/verifica_session_start.php';
header('Content-Type: text/html; charset=utf-8');

include 'funcoes/verifica_login.php';


?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'import/import_head.php'; ?>

</head>
<body>
	<?php 
	include 'import/header_responsavel.php'; 
	include 'import/modal.php'; 
	?>


	<div class="wrapper">
		<div class="main-view"> 
			<div class="container bottom70">
				<div class=" row margin-top">
					<div class="col-lg-12">
						<div class="jumbotron box box-success">
							<!-- Body alterável: -->
							<div >
								<?php include 'funcoes/alert.php'; ?>
								<h4>Área do Responsável</h4>
								<?php echo 'Bem vindo <strong>'.$_SESSION['usuario'].'</strong>'; ?>
								
								<p>Veja aqui a sua lista de participantes e suas situações.</p>
								
								<?php include 'import/filtrar.php'; ?>

							</div>
							<div class="table-responsive-lg">
								
								<?php include 'import/navbar.php'; ?>

								<form method="post" action="funcoes/check_aprova_reprova.php">
									
									<?php include 'import/modal_acoes.php'; ?>

									<table id="tableAcao" class="table table-bordered table-condensed ">
										<thead class="bg-light">
											<tr class="text-center">
												<th ><a>#</a></th>
												<th class="tr-max"><a>Nome</a></th>
												<th class="tr-max"><a>Curso</a></th>
												<th class=""><a>Situação</a></th>
												<th class="actions actions-90">
													<div class="btn-group btn-group-sm text-right" role="group">
														<div class="btn btn-light ">
															<input class="" type="checkbox"  name="" value="" id="checkAll">
														</div>
														<a href="#" class="btn btn-light  text-danger abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Reprovar aluno" data-confirm="Tem certeza que deseja reprovar estes aluno?" name="reprova">
															<i class="material-icons sm-18">
																cancel
															</i>
														</a>
														<a href="#" class="btn btn-light text-success abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Aprovar aluno" data-confirm="Tem certeza que deseja aprovar estes aluno?" name="aprova">
															<i class="material-icons sm-18">
																check
															</i>
														</a>
													</div>
												</th>
											</tr>
										</thead>
										<tbody>
											<?php include 'import/tabela_responsavel.php'; ?>

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
				$('#responsavel').addClass('active');
			});

		</script>

	</body>
	</html>
