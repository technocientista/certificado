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

							<?php include 'funcoes/alert.php'; ?>

							<h5>Atividades</h5>
							<p>Veja aqui a sua lista de atividades e suas situações.</p>
							<form class="form-inline row">

								<div class="col-lg-6 col-6">
									<input class="form-control mr-sm-2" type="search" placeholder="Digite sua busca" aria-label="Search">

									<button class="btn  btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
								</div>

								
							</form>

							
							<div class="table-responsive-lg">
								<ul class="nav nav-tabs">
									<li class="nav-item" id="ativas">
										<a  class="nav-link ativas_link active" href="#">Ativas</a>
									</li>
									<li class="nav-item" id="apagadas">
										<a class="apagadas_link nav-link" href="#">Paradas</a>
									</li>
									<div class="col text-right">
										<a class="btn btn-outline-success my-2 my-sm-0" href="registrar_atividade.php">Nova atividade</a>
									</div>
									
								</ul>
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
										<?php include 'import/tabela_atividades.php'; ?>
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