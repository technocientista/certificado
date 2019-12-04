<!DOCTYPE html>
<html>
<head>
	<?php include 'import/import_head.php'; ?>

</head>
<body>
	<?php include 'import/header.php'; 
	include 'import/modal.php'; ?>


	<div class="wrapper">
		<div class="main-"> 
			<div class="container bottom70">
				<div class=" row margin-top">
					<!--Body ável-->
					<div class="box box-success col-xs-12">
						<div class="box-header">
							<h3 class="box-title">
								<i class="fa fa-question-circle"></i>
								<span class="hidden-sm hidden-xs">Índice</span>
							</h3>
						</div>
						<div id="mainId" class="box-body">
							<h3>1. Acesso ao Sistema</h3>
							<div class="list-group">
								<a id="1" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">1.1. Acesso ao Sistema</a>
							</div>
							<h3>2. Responsável</h3>
							<div class="list-group">
								<a id="18" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.1. Página de Responsáveis</a>
								
							</div>
							<h3>3. Atividades</h3>
							<div class="list-group">
								<a id="2" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">3.1. Listar Atividades</a>
								<a id="3" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">3.2. Adicionar Atividades</a>
								<a id="4" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">3.3. Visualizar Atividades</a>
								<a id="5" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">3.4. Participar de Atividades</a>
							</div>
							<h3>4. Diretor</h3>
							<div class="list-group">
								<a id="6" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">4.1. Página do Diretor</a>
								
							</div>
							<h3>5. Participantes</h3>
							<div class="list-group">
								<a id="16" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.1. Página de Participantes</a>
								<a id="14" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.2. Listar Participantes</a>
								<a id="15" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.3. Adicionar Participantes</a>
								
								<a id="17" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.4. Página Meus Certificados</a>
								
								<a id="22" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.5. Reemitir certificado</a>
								
							</div>
							
						</div>
					</div>

					<!--Body ável-->
				</div>
			</div>
		</div>
		<!--Modal-->
		<?php include 'import/conteudo_modal.php'; ?>
		<!--Modal-->
		<?php include 'import/footer.php'; ?>
		<script type="text/javascript">
			$(document).ready(function(){

				$('.list-group a').on('click', function () {
					
					var id = $(this).attr('id');

					var mid = 'm'+id;

					var title = $('#'+id).html();
					var data_confirm = $('#'+mid).html();

					$('#'+id).attr('data-confirm', data_confirm);
					$('#'+id).attr('title', title);

					$('.modal-dialog').addClass('ajuda');
					$('.modal-footer a').hide();
					$('.modal-footer button').html('OK');
					console.log(id);


				});



			});

		</script>
		<?php include 'import/import_script.php'; ?>

	</body>
	</html>