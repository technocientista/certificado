<!DOCTYPE html>
<html>
<head>
	<?php include 'import/import_head.php'; ?>

</head>
<body>
	<?php include 'import/header.php'; ?>


	<div class="wrapper">
		<div class="main-view"> 
			<div class="container">
				<div class=" row margin-top">
					<div class="col-lg-12">
						<div class="jumbotron box box-success">
							<!-- Body alterável: -->
							
							<div class="box-header">
								<h3 class="box-title"><i class="material-icons">
									star
								</i> Validar Certificado</h3>
							</div>
							<div class="box-body">
								<p>
									Digite o <strong>código verificador</strong> do certificado
								</p>
								<form method="get" accept-charset="utf-8" role="form" action="/validar">
									<div class="input-group">
										<div class="input-group-prepend btn btn-sm btn-success">
											<i class="material-icons">
												check
											</i>
										</div>
										<input type="text" class="form-control" placeholder="Digite o código para validação" aria-label="Input group example" aria-describedby="btnGroupAddon">

									</div>
								</form>
							</div>
							
						</div>

						<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>Digite o código verificador para realizar a busca.
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