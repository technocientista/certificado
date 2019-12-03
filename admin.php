<?php
include 'funcoes/verifica_session_start.php';
header('Content-Type: text/html; charset=utf-8');

include 'funcoes/verifica_login.php';


?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'import/import_head.php'; ?>

</head>
<body>
	<?php 
	include 'import/header_admin.php'; 
	include 'import/modal.php'; 
	?>


	<div class="wrapper">
		<div class="main-view"> 
			<div class="container bottom70">
				<div class=" row margin-top">
					<div class="col-lg-12">
						<div class="jumbotron box box-success">
							<!-- Body alterável: -->
							<div >
								<?php include 'funcoes/alert.php'; ?>
								<h4>Área do Administrador</h4>
								<?php echo 'Bem vindo <strong>'.$_SESSION['usuario'].'</strong>'; ?>
								
								<p>Veja aqui a sua lista de usuários e suas situações.</p>
								
								<?php include 'import/filtrar.php'; ?>
								<a class="btn btn-success my-2 my-sm-0" href="registrar_usuario.php">Novo usuário</a>
							</div>
							<div class="table-responsive-lg">


								<table id="tableAcao" class="table table-bordered table-condensed ">
									<thead class="text-light bg-success">
										<tr class="text-center">
											<th ><a>#</a></th>
											<th class=""><a>Nome</a></th>
											<th class="tr-max"><a>Login</a></th>
											<th class="tr-max"><a>Status</a></th>
											<th class="actions actions-90">Ações</th>
										</tr>
									</thead>
									<tbody>
										<?php include 'import/tabela_admin.php'; ?>

									</tbody>
								</table>
								
							</div>




							<!-- Body alterável: -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include 'import/footer.php'; ?>
		<?php include 'import/import_script.php'; ?>
		<script src="js/altera_cor_situacao.js"></script>
		<script src="js/dados.js"></script>
		<script src="js/filtra.js"></script>
		<script type="text/javascript">
			$('#admin').addClass('active');
		</script>
	</body>
	</html>
