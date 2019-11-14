<!DOCTYPE html>
<html>
<head>
	<?php include 'import/import_head.php'; ?>

</head>
<body>
	<?php include 'import/header.php'; ?>


	<div class="wrapper">
		<div class="main-view"> 
			<div class="container">
				<div class=" row margin-top">
					<div class="col-lg-12">
						<div class="jumbotron box box-success">
							<!-- Body alterável: -->
							
								<div class="box-header">
									<h3 class="box-title">
										
											<i class="material-icons">
												print
											</i>
										 Buscar Certificados
									</h3>
								</div>
								<div class="box-body">

									<form method="get" accept-charset="utf-8" role="form" action="/emitir-certificados/index">
										Buscar Por:
										<div class="radio">
											<label for="buscarpor-cpf">
												<input type="radio" name="buscarPor" value="cpf" id="buscarpor-cpf" checked="checked" required="required">CPF
											</label>
										</div>
										<div class="radio">

											<label for="buscarpor-passaporte">
												<input type="radio" name="buscarPor" value="passaporte" id="buscarpor-passaporte" required="required">Matrícula
											</label>

										</div>
										<div class="input-group">
											<div class="input-group-prepend btn btn-sm btn-success">
												<i class="material-icons">
													check
												</i>
											</div>
											<input type="text" class="form-control" placeholder="Digite o código para validação" aria-label="Input group example" aria-describedby="btnGroupAddon">

										</div>
										<br>


										<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><b>Atenção:</b> Para busca por CPF digite somente os números, sem pontos e sem traço</div>
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
		<script>
			$(document).ready(function () {
				$('#documento').keypress(function (e) {
					if (!($('#buscarpor-cpf').prop('checked')))
						return;

					if (/\D/g.test(e.key))
						e.preventDefault();
				});

				$('#documento').on('paste', function (e) {
					if (!($('#buscarpor-cpf').prop('checked')))
						return;

					e.preventDefault();
					$(this).val(e.originalEvent.clipboardData.getData('text').replace(/\D+/g, ''));
				});

				$('#buscarpor-cpf').click(function () {
					let inputTexto = $('#documento');
					inputTexto.val(inputTexto.val().replace(/\D/g, ''));
				});
			});
		</script>
	</body>
	</html>