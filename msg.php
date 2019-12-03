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
								<h4>Mensagens de suporte</h4>
																
								<p>Veja aqui as mensagens de suporte enviadas por usuários.</p>
								
								<?php include 'import/filtrar.php'; ?>
								
							</div>
							<div class="table-responsive-lg">


								<table id="tableAcao" class="table table-bordered table-condensed ">
									<thead class="text-light bg-success">
										<tr class="text-center">
											<th ><a>Nome</a></th>
											<th ><a>E-mail</a></th>
											<th class="tr-max"><a>Telefone</a></th>
											<th class="tr-max"><a>Assunto</a></th>
											<th class="actions actions-90">Mensagem</th>
										</tr>
									</thead>
									<tbody>
										
										<?php
										include 'funcoes/conn.php';
										$usuario_logado = $_SESSION['id'];


										$sql = "SELECT * FROM msg_suporte ";

										$resultado = $conn->query($sql);

										if ($resultado->num_rows > 0) {
											while($linha = $resultado->fetch_assoc()) {

												$id_suporte		= $linha["id_suporte"];
												$nome			= $linha["nome"];
												$email			= $linha["email"];
												$telefone		= $linha["telefone"];
												$assunto 		= $linha["assunto"];
												$mensagem		= $linha["mensagem"];?>

												<tr class="linha">
													<th class="text-center td01"><?php echo $nome; ?></th>
													<td><?php echo $email; ?></td>
													<td class="tr-max text-center"><?php echo $telefone; ?></td>
													<td class="tr-max text-center"><?php echo $assunto; ?></td>
													<td class=" text-center"><?php echo $mensagem; ?></td>
												</tr>


												<?php
											}
										}else{
											echo 'Sem resultados';
										}
										?>

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
			$('#msg').addClass('active');
		</script>
	</body>
	</html>
