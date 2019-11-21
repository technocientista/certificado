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
	<?php include 'import/header_participante.php'; ?>


	<div class="wrapper">
		<div class="main-view"> 
			<div class="container bottom70">
				<div class=" row margin-top">
					<div class="col-lg-12">
						<div class="jumbotron box box-success">
							<!-- Body alterável: -->
							<div >
								<h4>Área do participante</h4>
								<?php echo 'Bem vindo '.$_SESSION['usuario']; ?>
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
										<tr>
											<th class="tr-max">1</th>
											<td >Workshop de Computação</td>
											<td class="tr-max text-center">40h</td>
											<td class="text-center"><label class="badge badge-primary text-wrap">Cursando</label></td>
											

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
										<tr>
											<th class="tr-max">2</th>
											<td >Curso de Mestrado</td>
											<td class="tr-max text-center">40h</td>
											<td class="text-center"><label class="badge badge-success text-wrap">Conluído</label></td>
											

											<td class="actions text-light text-center">
												<div class="btn-group" role="group">
													<a class="btn btn-primary btn-sm" title="Visualizar Curso">
														<i class="material-icons">
															search
														</i>
													</a>
													<a class="btn btn-danger btn-sm">
														<i class="material-icons">
															delete
														</i>
													</a>
													<a class="btn btn-success btn-sm">
														<i class="material-icons">
															print
														</i>
													</a>
												</div>
											</td>
										</tr>
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