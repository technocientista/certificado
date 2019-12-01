<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

//include ('funcoes/verifica_login.php');


?>
<!DOCTYPE html>
<html>
<head>
	<?php include 'import/import_head.php'; ?>

</head>
<body>
	<?php include 'import/header_participante.php'; ?>
	<!---->
	
	<!---->


	<div class="main-view"> <!-- uiView: -->
		<div class="container bottom70">
			<div class="row margin-top">

				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="box  box-success">
						<div class="box-header">
							<h4>Atividades</h4>

							<?php 
							if (isset($_SESSION['usuario'])) {
								echo 'Bem vindo <strong>'.$_SESSION['usuario'].'</strong>'; 
							}
							
							?>
						</div>
						<div class="box-body">
							<p>Escolha qual atividade você deseja participar.</p>
							
						</div>
					</div>
				</div>
				
				
				<?php include 'funcoes/card_atividades.php'; ?>

			</div>
		</div>



	</div>

	<?php include 'import/footer.php'; ?>
	<?php include 'import/import_script.php'; ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#novas_atividades').addClass('active');
		});

	</script>


	
</body>
</html>
<?php 
mysqli_close($conn);
?>