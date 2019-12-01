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
								<h3 class="box-title">Contato com o suporte</h3>
							</div>

							<form method="post" action="funcoes/contato_suporte.php" class="was-validated" accept-charset="utf-8" role="form">
								<div class="form-row">
									<div class="col-md-4 mb-3">
										<label for="validationServer01">Nome completo</label>
										<input type="text" class="form-control is-invalid" id="validationServer01" placeholder="Digite seu nome" value="" required name="nome">
										
									</div>
									<div class="col-md-4 mb-3">
										<label for="validationServerUsername">E-mail</label>
										<input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="E-mail" aria-describedby="inputGroupPrepend3" required name="email">
										
									</div>
									<div class="col-md-4 mb-3">
										<label for="validationServer02">Telefone</label>
										<input type="number" class="form-control is-invalid" id="validationServer02" placeholder="Digite seu telefone" value="" required name="telefone">
										
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-4 mb-3">
										<label for="validationServer01">Assunto</label>
										<input type="text" class="form-control is-invalid" id="validationServer01" placeholder="Digite seu nome" value="" required name="assunto">
										
									</div>
									<div class="col-md-8 mb-3">
										<label for="validationServer01">Mensagem</label>
										<textarea class="form-control is-invalid" id="validationServer01" rows="3" name="mensagem" required></textarea>
										
									</div>
								</div>
								<button class="btn btn-success" type="submit">Enviar</button>
								
							</form>
							<!-- Body alterável: -->
							
							
							<!-- Body alterável: -->
						</div>
					</div>
					<div class="col-lg">
						<div class="box box-danger ">
							<div class="box-header">
								<h5 class="box-title">Ajuda</h5>
							</div>
							<div class="box-body">
								<p>Clique no botão abaixo se deseja acessar o menu de Ajuda do sistema.</p>
								<p ><a href="ajuda.php" class="btn btn-danger" alt="Ajuda" title="Ajuda">Ajuda</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include 'import/footer.php'; ?>
		<?php include 'import/import_script.php'; ?>
	</body>
	</html>