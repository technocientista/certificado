<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Certificados</title>
	<link href="img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon">
	<!--<link rel="stylesheet" href="./Sistema de Certificados_ Users_files/nti.css">    
	<link rel="stylesheet" href="./Sistema de Certificados_ Users_files/animate.css">    
	<link rel="stylesheet" href="./Sistema de Certificados_ Users_files/sicert.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<link rel="stylesheet"  href="estilo.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">

</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-success">
			<a class="navbar-brand" href="#">Sistema de certificados</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Início </a>

					</li>
					
				</ul>
			</div>
		</nav>
	</header>


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
											<label for="validationServer02">Função</label>
											<input type="text" class="form-control is-valid" id="validationServer02" placeholder="Digite sua função" value="" required>
											<div class="valid-feedback">
												
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6 mb-3">
											<label for="validationServerUsername">E-mail</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text" id="inputGroupPrepend3">@</span>
												</div>
												<input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required>
												<div class="invalid-feedback">
													Por favor digite seu e-mail
												</div>
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

								</div>
								<div class="form-group">
									<div class="form-check">
										
										<div class="invalid-feedback">
											You must agree before submitting.
										</div>
									</div>
								</div>
								<a class="btn btn-success" href="index.php" >Registrar</a>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>