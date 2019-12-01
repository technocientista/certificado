<?php
include 'funcoes/verifica_session_start.php';

header('Content-Type: text/html; charset=utf-8');?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'import/import_head.php'; ?>

</head>
<body>

	<?php include 'import/header_index.php'; ?>


	<div class="main-view"> 
		<div class="container bottom70">
			<div class="row margin-top">

				<div class="col-lg-12">

					<?php include 'funcoes/alert.php'; ?>

					<div class=" text-center box box-success">
						<h5><img src="img/logo_index.png" alt="NTI" height="128px"></h5>
						<h4>CertIFCE</h4>
						<h4>O que é o Sistema de Certificados CertIFCE?</h4>
						<p class="small">
							O Sistema de Certificados é o sistema de gerenciamento de certificados do IFCE.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="box box-success">
						<div class="box-header">
							<h5 class="box-title">Emissão do Certificado</h5>
						</div>
						<div class="box-body">
							<p>Clique no botão abaixo se deseja realizar a emissão do certificado.</p>
							<p class="text-right"><a href="emitir.php" class="btn btn-success" alt="Emitir Certificado" title="Emitir Certificado">Emitir Certificado</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="box box-info">
						<div class="box-header">
							<h5 class="box-title">Validação do Certificado</h5>
						</div>
						<div class="box-body">
							<p>Clique no botão abaixo se deseja realizar a validação do certificado.</p>
							<p class="text-right"><a href="validar.php" class="btn btn-info" alt="Validar Certificado" title="Validar Certificado">Validar Certificado</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="box box-warning">
						<div class="box-header">
							<h5 class="box-title">Suporte/Ajuda</h5>
						</div>
						<div class="box-body">
							<p>Clique no botão abaixo se deseja entrar em contato com o suporte ou acessar o menu de Ajuda do sistema.</p>
							<p class="text-right"><a  class="btn btn-warning" href="suporte.php">Suporte/Ajuda</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="box box-danger">
						<div class="box-header">
							<h5 class="box-title">Participar de evento</h5>
						</div>
						<div class="box-body">
							<p>Clique no botão abaixo e cadastre-se como participante.</p>
							<p class="text-right"><a href="novas_atividades.php" class="btn btn-danger" alt="Ajuda" title="Ajuda">Participar</a></p>
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
<?php 
mysqli_close($conn);
?>