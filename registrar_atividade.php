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
	<?php include 'import/header_responsavel.php'; ?>


	<div class="wrapper">
		<div class="main-view"> 
			<div class="container bottom70">
				<div class=" row margin-top">
					<div class="col-lg-12">
						<div class="jumbotron box box-success">
							<!-- Body alterável: -->
							<div class="box-header">
								<h3 class="box-title">Registrar atividade</h3>
							</div>
							<div class="box-body">
								<form method="post" action="funcoes/regist_ativ.php">
									<div class="form-row">
										<div class="col-md-4 mb-3">
											<label for="validationServer01">Título da atividade</label>
											<input type="text" class="form-control info is-invalid" id="validationServer01" placeholder="Título da atividade" value="" required name="nome_atv">
											<div class="invalid-feedback">
												Digite o título do evento
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationServer02">Carga horária</label>
											<input type="text" class="form-control info is-invalid" id="validationServer02" placeholder="Digite a carga horária" value="" name="carga_horaria_atv" required>
											<div class="invalid-feedback">
												Digite a carga horária
											</div>
										</div>
										<div class="col-md-4 mb-3">
											<label for="validationServer02">Local da atividade</label>
											<input type="text" class="form-control info is-invalid" id="validationServer02" placeholder="Digite o local da atividade" value="" required name="local">
											<div class="invalid-feedback">
												Digite o local da atividade
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-6 mb-3">
											<label for="validationServerUsername">Data Inicial</label>
											
											<input type="date" class="form-control info is-invalid" id="validationServerUsername" placeholder="E-mail" aria-describedby="inputGroupPrepend3" required name="data_inicial_atv">
											<div class="invalid-feedback">
												Digite uma data para o início da atividade.
											</div>
											
										</div>
										<div class="col-md-6 mb-3">
											<label for="validationServer02">Data Final</label>
											<input type="date" class="form-control info is-invalid" id="validationServer02" placeholder="Digite seu telefone" value="" required name="data_final_atv">
											<div class="invalid-feedback">
												Digite uma data para o término da atividade.
											</div>
										</div>

									</div>
									<div class="form-row">
										<div class="col">
											<label for="validationServer02">Descrição da atividade</label>
											<input type="text" class="form-control info is-invalid" id="validationServer02" placeholder="Descrição da atividade" value="" required name="descricao">
											<div class="invalid-feedback">
												Digite a descrição da atividade
											</div>
										</div>
									</div>


									<button class="btn btn-success" type="submit">Registrar</button>
									
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
		<script src="js/valida_campos.js"></script>
	</body>
	</html>