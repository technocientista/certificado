<?php
//session_start();
include 'funcoes/verifica_login.php';





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

								<?php include 'import/navbar.php'; ?>
								
								<form method="post" action="funcoes/diretor_acoes.php">

									<?php include 'import/modal_acoes.php'; ?>

									<table id="tableAcao" class="table table-bordered table-condensed ">
										<thead class="bg-light">
											<tr class="text-center">
												<th ><a>#</a></th>
												<th class=""><a>Nome</a></th>
												<th class="tr-max"><a>Curso</a></th>
												<th class=""><a>Situação</a></th>
												<th class="actions actions-90">
													<div class="btn-group btn-group-sm text-right" role="group">
														<div class="container-fluid">
															<input class="" type="checkbox"  name="" value="" id="checkAll">

														</div>


														<a href="" class="btn text-warning btn-sm abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Enviar para correção" data-confirm="Tem certeza que deseja enviar essas aprovações para correção?" name="correcao">
															<i class="material-icons sm-18">
																cached
															</i>
														</a>
														<a href="" class="btn text-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Cancelar aprovação" data-confirm="Tem certeza que deseja cancelar a aprovação desses alunos?" name="cancelar">
															<i class="material-icons sm-18">
																block
															</i>
														</a>
														<a href="" class="btn text-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Assinar aprovação" data-confirm="Tem certeza que deseja assinar a aprovação desses alunos?" name="assinar">
															<i class="material-icons sm-18">
																check
															</i>
														</a>
													</div>
												</th>
											</tr>
										</thead>
										<tbody>
											<?php include 'import/tabela_diretor.php'; ?>

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
		<script src="js/filtra.js"></script>
		<script src="js/check.js"></script>
		
	</body>
	</html>
