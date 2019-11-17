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
										<tr>
											<th class="tr-max text-center">1</th>
											<td >Workshop de Computação</td>
											<td class="tr-max text-center">40h</td>
											<td class="text-center"><label class="badge badge-primary text-wrap">Ocorrendo</label></td>
											

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
											<th class="tr-max text-center">2</th>
											<td >Curso de Mestrado</td>
											<td class="tr-max text-center">40h</td>
											<td class="text-center"><label class="badge badge-success text-wrap">Concluído</label></td>
											

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