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
							<div class="box-header">
								<h3 class="box-title">Participar de atividade</h3>
							</div>
							<div class="box-body">
								<form>
									<div class="form-row">
										<div class="col-md-4 mb-3">
											<label for="validationServer01">Nome completo</label>
											<input type="text" class="form-control is-valid" id="validationServer01" placeholder="Digite seu nome" value="" required>
											<div class="valid-feedback">
												
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationServer02">CPF</label>
											<input type="text" class="form-control is-valid" id="validationServer02" placeholder="Digite seu CPF" value="" required>
											<div class="valid-feedback">
												
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationServer02">Atividade</label>
											<select class="form-control is-valid">
												<option>Atividade 01</option>
												<option>Atividade 02</option>
												<option>Atividade 03</option>
												<option>Atividade 04</option>
											</select>
											<div class="valid-feedback">
												
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6 mb-3">
											<label for="validationServerUsername">E-mail</label>
											

											<input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="E-mail" aria-describedby="inputGroupPrepend3" required>
											<div class="invalid-feedback">
												Por favor digite seu e-mail
											</div>
											
										</div>
										<div class="col-md-6 mb-3">
											<label for="validationServer02">Telefone</label>
											<input type="number" class="form-control is-valid" id="validationServer02" placeholder="Digite seu telefone" value="" required>
											<div class="valid-feedback">
												
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6 mb-3">
											<label for="validationServer03">Login</label>
											<input type="text" class="form-control is-invalid" id="validationServer03" placeholder="Login" required>
											<div class="invalid-feedback">
												Por favor escolha um login.
											</div>
										</div>
										<div class="col-md-6 mb-3">
											<label for="validationServer03">Senha</label>
											<input type="password" class="form-control is-invalid" id="validationServer03" placeholder="Senha" required>
											<div class="invalid-feedback">
												Por favor escolha uma senha
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
									<a class="btn btn-success" href="participante.php" >Registrar</a>
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