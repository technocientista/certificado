<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Certificados</title>
	<link href="img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon">
	<!--<link rel="stylesheet" href="./Sistema de Certificados_ Users_files/nti.css">    
	<link rel="stylesheet" href="./Sistema de Certificados_ Users_files/animate.css">    
	<link rel="stylesheet" href="./Sistema de Certificados_ Users_files/sicert.css">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	<link rel="stylesheet"  href="estilo.css">

</head>
<body>
	<header class="header">
		<nav class="navbar navbar-expand-lg navbar-dark bg-success navbar-default">
			<a class="navbar-brand" href="#">Sistema de certificados</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse row" id="navbarSupportedContent">
				<div class="navbar-nav mr-auto">
					
					
				</div>
				
				<form method="post" accept-charset="utf-8" class="form-inline text-right" role="form" action="https://certificados.ufms.br/">
					<div style="display:none;">
						<input type="hidden" name="_method" class="form-control mr-sm-2 col" value="POST">
					</div>
					<div class="form-group text required  mb-2">
						<input type="text" name="passaporte" class="form-control " placeholder="CPF ou matrícula" autofocus="autofocus" required="required" id="passaporte">
					</div>&nbsp;
					<div class="form-group password required mb-2">
						<input type="password" name="senha" class="form-control  " placeholder="Senha" required="required" id="senha" value="">
					</div>&nbsp;
					<br>
					<div class="text mb-2">
						<button class="btn btn-outline-light " type="submit">Entrar</button>
					</div>
					<div class="text mb-2">
						<a class="btn btn-outline-light" href="registro.php" data-target="registro.php">Registrar-se</a>	
					</div>
					


					

				</form>	
				


				
			</div>
		</nav>
	</header>
	<!---->
	
	<!---->


	<div class="main-view"> <!-- uiView: -->
		<div class="container">
			<div class="row margin-top">

				<div class="col-lg-12">
					<div class=" text-center box box-success">
						<h5><img src="img/logo_index.png" alt="NTI" height="128px"></h5>
						<h4>O que é o Sistema de Certificados?</h4>
						<p class="small">
							O Sistema de Certificados é o sistema de gerenciamento de certificados do IFCE.
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="box box-success">
						<div class="box-header">
							<h5 class="box-title">Emissão do Certificado</h5>
						</div>
						<div class="box-body">
							<p>Clique no botão abaixo se deseja realizar a emissão do certificado.</p>
							<p class="text-right"><a href="https://certificados.ufms.br/emitir-certificados/index" class="btn btn-success" alt="Emitir Certificado" title="Emitir Certificado">Emitir Certificado</a></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="box box-info">
						<div class="box-header">
							<h5 class="box-title">Validação do Certificado</h5>
						</div>
						<div class="box-body">
							<p>Clique no botão abaixo se deseja realizar a validação do certificado.</p>
							<p class="text-right"><a href="https://certificados.ufms.br/validar" class="btn btn-info" alt="Validar Certificado" title="Validar Certificado">Validar Certificado</a></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="box box-warning">
						<div class="box-header">
							<h5 class="box-title">Suporte</h5>
						</div>
						<div class="box-body">
							<p>Clique no botão abaixo se deseja entrar em contato com o suporte.</p>
							<p class="text-right"><a target="_blank" class="btn btn-warning" href="https://passaporte.ufms.br/#/">Suporte</a></p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-3">
					<div class="box box-danger">
						<div class="box-header">
							<h5 class="box-title">Participar de evento</h5>
						</div>
						<div class="box-body">
							<p>Clique no botão abaixo e cadastre-se em uma atividade.</p>
							<p class="text-right"><a href="https://certificados.ufms.br/ajuda" class="btn btn-danger" alt="Ajuda" title="Ajuda">Participar</a></p>
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