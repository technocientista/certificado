<!DOCTYPE html>
<html>
<head>
	<title>Diretor</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header class="bg-dark">
		
			<h3 class="bg-dark container-fluid text-white"> Bem vindo, Diretor <img src="img/perfil.png" width="4%"> </h3>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="#">
					<h3>Sistema Certificado</h3>
				</a>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item ">
							<a class="nav-link " href="index.html">Home </a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="#"> Certificado</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
						<button class="btn btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
					</form>
				</div>
			</nav>
	</header>

		<div class="container-fluid">
<h3>Ações cadastradas</h3>	
</div>
			<section class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-lg-6 ">
						<form>
							<div class="form-group">

								<label for="formGroupExampleInput">Nome</label>
								<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite o Nome">
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput2">CPF/Passaporte</label>
								<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Digite o CPF/Passaporte">
							</div>
						</form>
					</div>

					<div class="col-lg-6">
						<div class="form-group">

							<label for="inputState">Estado</label>
							<select id="inputState" class="form-control">
								<option selected>Emitido</option>
								<option>Não Emitido</option>
								<option>Em edição</option>
								<option>Aprovado</option>
								<option>Cancelado</option>
								<option>Emitido</option>
							</select>

							<button type="submit" class="btn btn-primary">Filtrar</button>
						</div>
					</div>
				</div>
			</section>

				<section class="container-fluid">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link active" href="#">Negado</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Permitido</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Emitido</a>
				</li>
			</ul>
		</section>
			<section class="container-fluid">

			<div class="table-responsive-lg">
				<table class="table table-striped ">
					<thead class="thead-light">

						<tr >
							<th>Nome completo</th>
							<th>CPF</th>
							<th class="tr-max">Email</th>
							<th class="tr-max">Matricula</th>
							<th>Ações</th>	
						</tr>
					</thead>
					<tbody>
							<tr>
								<td>Diego Fernandes Almeida</td>
								<td>650.571.944-02</td>
								<td class="tr-max">DiegoFernandesAlmeida@dayrep.com</td>
								<td class="tr-max">20191514065000</td>
								<td><i class="material-icons text-danger">clear</i><i class="material-icons text-success">done_outline</i><i class="material-icons">list_alt</i></td>
							</tr>

							<tr>
								<td>Carla Carvalho Barbosa</td>
								<td>492.940.769-97</td>
								<td class="tr-max">CarlaCarvalhoBarbosa@jourrapide.com</td>
								<td class="tr-max">20191514065145</td>
								<td><i class="material-icons text-danger">clear</i><i class="material-icons text-success">done_outline</i><i class="material-icons">list_alt</i></td>
							</tr>

							<tr>
								<td>Emily Gomes Almeida</td>
								<td>493.330.975-20</td>
								<td class="tr-max">EmilyGomesAlmeida@jourrapide.com</td>
								<td class="tr-max">20191514065563</td>
								<td><i class="material-icons text-danger">clear</i><i class="material-icons text-success">done_outline</i><i class="material-icons">list_alt</i></td>
							</tr>

							<tr>
								<td>Eduarda Silva Souza</td>
								<td>410.228.261-07</td>
								<td class="tr-max">EduardaSilvaSouza@jourrapide.com</td>
								<td class="tr-max">20191514065256</td>
								<td><i class="material-icons text-danger">clear</i><i class="material-icons text-success">done_outline</i><i class="material-icons">list_alt</i></td>
							</tr>
						</tbody>
					</table>
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
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
