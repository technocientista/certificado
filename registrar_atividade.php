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
							<div class="box-header">
								<h3 class="box-title">Registrar atividade</h3>
							</div>
							<div class="box-body">
								<form>
									<div class="form-row">
										<div class="col-md-4 mb-3">
											<label for="validationServer01">Título da atividade</label>
											<input type="text" class="form-control is-valid" id="validationServer01" placeholder="Título da atividade" value="" required>
											<div class="valid-feedback">
												Digite o título do evento
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationServer02">Carga horária</label>
											<input type="text" class="form-control is-valid" id="validationServer02" placeholder="Digite a carga horária" value="" required>
											<div class="valid-feedback">
												Digite a carga horária
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationServer02">Local da atividade</label>
											<input type="text" class="form-control is-valid" id="validationServer02" placeholder="Digite o local da atividade" value="" required>
											<div class="valid-feedback">
												Digite o local da atividade
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6 mb-3">
											<label for="validationServerUsername">Data Inicial</label>
											

											<input type="date" class="form-control is-invalid" id="validationServerUsername" placeholder="E-mail" aria-describedby="inputGroupPrepend3" required>
											<div class="invalid-feedback">
												Digite uma data para o início da atividade.
											</div>
											
										</div>
										<div class="col-md-6 mb-3">
											<label for="validationServer02">Data Final</label>
											<input type="date" class="form-control is-valid" id="validationServer02" placeholder="Digite seu telefone" value="" required>
											<div class="valid-feedback">
												Digite uma data para o término da atividade.
											</div>
										</div>
									</div>
									


									<div class="form-group">
										<div class="form-check">

											<div class="invalid-feedback">
												You must agree before submitting.
											</div>
										</div>
									</div>
									<a class="btn btn-success" href="atividades.php" >Registrar</a>
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