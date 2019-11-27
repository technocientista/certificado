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
	include 'import/header.php'; 
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
								
								<div class="form-row align-items-center">
									<div class="col-auto col-lg-3">
										<label class="sr-only" for="inlineFormInputGroup">Nome ou CPF</label>
										<div class="input-group mb-2 ">
											<div class="input-group-prepend">
												<div class="input-group-text bg-success text-light">
													<i class="material-icons ">
														search
													</i>
												</div>
											</div>
											<input type="text" class="form-control form-control-lg" id="inlineFormInputGroup" placeholder="Nome ou CPF">
										</div>
									</div>
									<div class="col text-right">
										<a class="btn btn-outline-success my-2 my-sm-0" href="registrar_usuario.php">Novo usuário</a>
									</div>
								</div>

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
		<script type="text/javascript">
			$(document).ready(function(){
				$('.aprovados').find('.badge').addClass('badge-success');
				$('.reprovados').find('.badge').addClass('badge-danger');
				$('.emitidos').find('.badge').addClass('badge-success');
				$('.correcao').find('.badge').addClass('badge-warning');
				$('.cancelados').find('.badge').addClass('badge-danger');
				$('.todos').find('.badge').addClass('badge-primary');
			});
		</script>
		<script src="js/dados.js"></script>
	</body>
	</html>