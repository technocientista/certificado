<!DOCTYPE html>
<html>
<head>
	<title>Programador</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header class="bg-dark">
		
		<h3 class="bg-dark container-fluid text-white"> Bem vindo, Programador <img src="img/perfil.png" width="4%"> </h3>



		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-brand" href="#">
				<h3>Sistema Certificado</h3>
			</div>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item ">
						<a class="nav-link " href="index.html">Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="programador.html"> Responsáveis</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="novo_papel.html"> Novo Responsável</a>
					</li>

				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn btn-outline-light my-2 my-sm-0" type="submit">Busca</button>
				</form>
			</div>
		</nav>
		
		
		



	</header>

	<div class="container-fluid ">
		<h3 class="justify-content-center">Novo responsável</h3>	
	</div>

	<section class="container-fluid">
		<div class="row justify-content-center" >
			<div class="col-lg-6 ">
				<form>
					<div class="form-group">


						<label for="formGroupExampleInput">Nome</label>
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite o Nome">
						
						<label for="formGroupExampleInput2">CPF/Passaporte</label>
						<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Digite o CPF/Passaporte">

						<label for="formGroupExampleInput">E-mail</label>
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite o E-mail">
						
						<label for="formGroupExampleInput">Telefone</label>
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite o Telefone">

						<label for="formGroupExampleInput">Função</label>
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite o Função">

						
						<a href="programador.html" class="btn btn-outline-primary">Cadastrar</a>
					</div>
				</form>
			</div>

		</div>
	</section>








	<footer>
		<address>
			<strong>Sistema de Certificados</strong><br>
			Av Paulino Felix, 3185, Centro<br>
			Acopiara, CE<br>
			Tel: (88) 3565-2751 ou 5083-3884
		</address>
		<address>
			Email: certsis@gmail.com
		</address>
	</footer>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>