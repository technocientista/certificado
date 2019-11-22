
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
	<?php include 'import/header.php'; ?>


	<div class="wrapper">
		<div class="main-view"> 
			<div class="container bottom70">
				<div class=" row margin-top">
					<div class="col-lg-12">
						<div class="jumbotron box box-success">
							<!-- Body alterável: -->
							<div >
								<h4>Área do Diretor</h4>
								<h5>Bem vindo Diretor</h5>
								<p>Veja aqui a lista de aprovados aguardando emissão de certificados.</p>
								<form class="form-inline">
									<input class="form-control mr-sm-2" type="search" placeholder="Cpf ou Matrícula" aria-label="Search">
									<input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search">
									<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Filtrar</button>
								</form>
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
										<tr>
											<th ><a>Nome</a></th>
											<th class="tr-max"><a>E-mail</a></th>
											<th class="tr-max"><a>Matrícula</a></th>
											<th class="tr-max"><a>Situação</a></th>
											<th class="actions actions-90">Ações</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th >Antonio José de Assis</th>
											<td class="tr-max">antoniojose@gmail.com</td>
											<td class="tr-max text-center">20191312000234</td>
											<td class="tr-max text-center"><label class="badge badge-primary text-wrap">Aguardando</label></td>
											

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
										<tr>
											<th >Maria Malta Ribeiro</th>
											<td class="tr-max">mariaribeiro@gmail.com</td>
											<td class="tr-max text-center">20191312000234</td>
											<td class="tr-max text-center"><label class="badge badge-success text-wrap">Assinado</label></td>
											

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