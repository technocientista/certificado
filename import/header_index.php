<header class="header">
	<nav class="navbar navbar-expand-lg navbar-dark bg-success navbar-default">
		<div class="container">
			<a class="navbar-brand" href="index.php">Sistema de Certificados - CERTIFICA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse row" id="navbarSupportedContent">
				<div class="navbar-nav mr-auto">
				</div>
				<form method="post" accept-charset="utf-8" class="form-inline text-right" role="form" action="https://certificados.ufms.br/">
					<!--Temporário-->
					<div class="form-group text required  mb-2">
						<a class="btn btn-outline-light"  href="responsavel.php">Responsável</a>
						<a class="btn btn-outline-light" href="diretor.php">Diretor</a>
					</div>
					<!--Temporário-->
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
					<div class="btn-group text mb-2">
						<button class="btn btn-outline-light " type="submit">Entrar</button>

						<a class="btn btn-outline-light" href="registro.php" data-target="registro.php">Registrar-se</a>	
					</div>
				</form>	
			</div>
		</div>
	</nav>
</header>