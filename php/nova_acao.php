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
	<?php include 'header-responsavel.php'; ?>

	<div class="container-fluid ">
		<h3 class="justify-content-center">Nova ação</h3>	
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

						
						<a href="acao.html" class="btn btn-outline-primary">Cadastrar</a>
					</div>
				</form>
			</div>

		</div>
	</section>



	<?php include 'footer-responsavel.php'; ?>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>