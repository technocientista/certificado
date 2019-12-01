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
							<?php include 'funcoes/alert.php'; ?>
							
							<div class="box-header">
								<h3 class="box-title">

									<i class="material-icons">
										print
									</i>
									Buscar Certificados
								</h3>
							</div>
							<div class="box-body">

								<form method="get"  action="funcoes/emitir_certificado.php">
									<label>Digite o código para validação:</label>
									

									<div class="input-group">
										
										<button type="submit" class="input-group-prepend btn btn-sm btn-success">
											<i class="material-icons">
												check
											</i>

										</button>

										
										<input type="text" class="form-control" placeholder="Digite o código para validação"  name="id">

									</div>
									



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
		
	</body>
	</html>
	<?php 
	mysqli_close($conn);
	?>