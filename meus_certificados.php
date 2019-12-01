<?php


header('Content-Type: text/html; charset=utf-8');

include ('funcoes/verifica_login.php');


?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'import/import_head.php'; ?>

</head>
<body>
	<?php 
	include 'import/header_participante.php';
	include 'import/modal.php'; ?>


	<div class="wrapper">
		<div class="main-view"> 
			<div class="container bottom70">
				<div class=" row margin-top">
					<div class="col-lg-12">
						<div class="jumbotron box box-success">
							<!-- Body alterável: -->
							<div >
								<?php include 'funcoes/alert.php'; ?>
								<h4>Meus certificados</h4>
								<?php echo 'Bem vindo <strong>'.$_SESSION['usuario'].'</strong>'; ?>
								<p>Veja aqui a sua lista de certificados.</p>

								<?php include 'import/filtrar.php'; ?>

							</div>
							<div class="table-responsive-lg">

								
								
								<form method="post" action="funcoes/participante_acoes.php">

									<?php include 'import/modal_acoes.php'; ?>

									<table id="tableAcao" class="table table-bordered table-condensed ">
										<thead class="bg-light ">
											<tr class="text-center">
												<th class="tr-max"><a>Chave de validação</a></th>
												<th ><a>Atividade</a></th>
												<th class="tr-max"><a>Carga horária</a></th>
												<th><a>Situação</a></th>
												<th class="actions actions-90">Imprimir</th>
											</tr>
										</thead>
										<tbody>
											<?php include 'import/tabela_certificados.php'; ?>


										</tbody>
									</table>
								</form>
								
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
		<script src="js/check.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#meus_certificados').addClass('active');
			});

		</script>
	</body>
	</html>
	<?php 
	mysqli_close($conn);
	?>