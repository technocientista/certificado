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
									<div class="form-group">
										<label for="inputAddress">Address</label>
										<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
									</div>
									
									<div class="form-row">
										<div class=" form-group col-md-6">
											<label for="inputEmail4">Telefone</label>
											<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
										</div>
										<div class=" form-group col-md-6">
											<label for="inputPassword4">CPF</label>
											<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputEmail4">Email</label>
											<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
										</div>
										<div class="form-group col-md-6">
											<label for="inputPassword4">Password</label>
											<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress">Address</label>
										<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
									</div>
									<div class="form-group">
										<label for="inputAddress2">Address 2</label>
										<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputCity">City</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										<div class="form-group col-md-4">
											<label for="inputState">State</label>
											<select id="inputState" class="form-control">
												<option selected>Choose...</option>
												<option>...</option>
											</select>
										</div>
										<div class="form-group col-md-2">
											<label for="inputZip">Zip</label>
											<input type="text" class="form-control" id="inputZip">
										</div>
									</div>
									<div class="form-group">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="gridCheck">
											<label class="form-check-label" for="gridCheck">
												Check me out
											</label>
										</div>
									</div>
									<button type="submit" class="btn btn-success">Registrar</button>
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