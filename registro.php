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
	<?php include 'import/header.php'; ?>


	<div class="wrapper">
		<div class="main-view"> <!-- uiView: -->
			<div class="container">
				<div class="row margin-top">
					
					<div class="col-lg-12">
						<div class="jumbotron box box-success">
							
							
							<div class="box-header">
								<h3 class="box-title">Registro</h3>
							</div>
							<div class="box-body">
								<form action="funcoes/regist_user.php" method="POST">
									<div class="form-row">
										<div class="col-md-4 mb-3">
											<label for="validationServer01">Nome completo</label>
											<input type="text" class="form-control info is-invalid" id="validationServer01" placeholder="Digite seu nome" name="nome_usuario" required>
											<div class="invalid-feedback">
												Digite seu nome
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationServer02">CPF</label>
											<input type="number" class="form-control info is-invalid" id="validationServer02" placeholder="Digite seu CPF" name="cpf_usuario" required>
											<div class="invalid-feedback">
												Digite seu CPF
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationServer02">Tipo de usuário</label>
											<select class="form-control info is-invalid" name="fk_papel">
												<option value=""></option>
												<option value="1">Responsável</option>
												<option value="2">Participante</option>
												
											</select>
											<div class="invalid-feedback">
												Digite seu tipo de usuário
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6 mb-3">
											<label for="validationServerUsername">E-mail</label>
											
											
											<input type="email" class="form-control info is-invalid" id="validationServerUsername" placeholder="E-mail" aria-describedby="inputGroupPrepend3" required name="email_usuario">
											<div class="invalid-feedback">
												Digite seu e-mail
											</div>
											
										</div>
										<div class="col-md-6 mb-3">
											<label for="validationServer02">Telefone</label>
											<input type="number" class="form-control info is-invalid" id="validationServer02" placeholder="Digite seu telefone" value="" required name="tel_usuario">
											<div class="invalid-feedback">
												Digite seu e-mail telefone
												
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6 mb-3">
											<label for="validationServer03">Login</label>
											<input type="text" class="form-control info is-invalid" id="validationServer03" placeholder="Login" required name="login">
											<div class="invalid-feedback">
												Escolha um login.
											</div>
										</div>
										<div class="col-md-6 mb-3">
											<label for="validationServer03">Senha</label>
											<input type="password" class="form-control info is-invalid" id="validationServer03" placeholder="Senha" required name="senha">
											<div class="invalid-feedback">
												Escolha uma senha
											</div>
										</div>

										
									</div>


									
									<button class="btn btn-success" type="submit">Registrar</button>
									<a class="btn btn-success" href="index.php" >*Registrar</a>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<?php include 'import/footer.php'; ?>
	<?php include 'import/import_script.php'; ?>
	<script src="js/valida_campos.js"></script>
</body>
</html>