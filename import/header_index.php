<header class="header">
	<nav class="navbar navbar-expand-lg navbar-dark bg-success navbar-default">
		<div class="container">
			

			<a class="navbar-brand" href="index.php">CertIFCE
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">

				</span>
			</button>
			<div class="collapse navbar-collapse row" id="navbarSupportedContent">
				<div class="navbar-nav mr-auto">
					
				</div>

				<?php


				if (!isset($_SESSION['papel'])) {

					?>

					<form method="post" accept-charset="utf-8" class="form-inline text-right" role="form" action="funcoes/logar.php">


						<div class="form-group text required  mb-2">
							<input type="text" name="login" class="form-control " placeholder="CPF ou matrícula" autofocus="autofocus" required>
						</div>&nbsp;
						<div class="form-group password required mb-2">
							<input type="password" name="senha" class="form-control  " placeholder="Senha" required>
						</div>&nbsp;
						<br>
						<div class="btn-group text mb-2">
							<button class="btn btn-outline-light " type="submit">Entrar</button>

							<a class="btn btn-outline-light" href="registro.php" data-target="registro.php">Registrar-se</a>	
						</div>
					</form>


					<?php 
				}else{
					if (isset( $_SESSION['papel'])) {
						if ($_SESSION['papel']==1) {
							?>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav">
									<li class="nav-item ">
										<a class="nav-link" href="responsavel.php">Área do responsável</a>

									</li>

								</ul>
							</div>
							<?php 
						} 
						if ($_SESSION['papel']==2) {
							?>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav">
									<li class="nav-item ">
										<a class="nav-link" href="participante.php">Área do participante</a>

									</li>

								</ul>
							</div>
							<?php 
						} 
						if ($_SESSION['papel']==3) {
							?>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav">
									<li class="nav-item ">
										<a class="nav-link" href="diretor.php">Área do diretor</a>

									</li>

								</ul>
							</div>
							<?php 
						} 
						if ($_SESSION['papel']==4) {
							?>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav">
									<li class="nav-item ">
										<a class="nav-link" href="admin.php">Área do administrador</a>

									</li>

								</ul>
							</div>
							<?php 
						}
					}

				} 

				?>
			</div>


		</div>
	</nav>
</header>