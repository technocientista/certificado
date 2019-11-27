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
							<h3>2. Ações</h3>
							<div class="list-group">
								<a id="2" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.1. Listar Ações</a>
								<a id="3" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.2. Adicionar Ações</a>
								<a id="4" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.3. Visualizar Ações</a>
								<a id="5" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.4. ar Ações</a>
								<a id="6" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.5. ar Certificados da Ação</a>
								<a id="7" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.6. Adiciona pessoa à Ação</a>
								<a id="8" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.7. Adicionar pessoas em massa à Ação</a>
								<a id="9" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.8. Itens do Certificado</a>
								<a id="10" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.9. Visualização de Item do Certificado</a>
								<a id="11" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.10. Enviar Itens para Aprovação</a>
								<a id="12" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.11. Permissões / Operadores</a>
								<a id="13" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">2.12. Novo Operador</a>
							</div>
							<h3>3. Pessoas</h3>
							<div class="list-group">
								<a id="14" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">3.1. Listar Pessoas</a>
								<a id="15" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">3.2. Adicionar Pessoas</a>
								<a id="16" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">3.3. Visualizar Pessoas</a>
								<a id="17" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">3.4. ar Pessoas</a>
							</div>
							<h3>4. Função</h3>
							<div class="list-group">
								<a id="18" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">4.1. Listar Funções</a>
								<a id="19" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">4.2. Adicionar Funções</a>
								<a id="20" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">4.3. Visualizar Funções</a>
								<a id="21" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">4.4. ar Funções</a>
							</div>
							<h3>5. Certificados</h3>
							<div class="list-group">
								<a id="22" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.1. Listar Certificados para Aprovação</a>
								<a id="23" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.2. Adicionar Certificado</a>
								<a id="24" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.3. Visualizar Certificado</a>
								<a id="25" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.4. ar Certificado</a>
								<a id="26" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.5. Enviar Item do Certificado para Ajuste</a>
								<a id="27" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.6. Reprovar Item do Certificado</a>
								<a id="28" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.7. Aprovar Item do Certificado</a>
								<a id="29" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.8. Invalidar Item do Certificado</a>
								<a id="30" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.9. ar Item Emitido</a>
								<a id="31" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">5.10. Reemitir Item do Certificado</a>
							</div>
							<h3>6. Modalidades</h3>
							<div class="list-group">
								<a id="32" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">6.1. Listar Modalidades</a>
								<a id="33" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">6.2. Adicionar Modalidades</a>
								<a id="34" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">6.3. Visualizar Modalidades</a>
								<a id="35" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">6.4. ar Modalidades</a>
							</div>
							<h3>7. Modelo Textual</h3>
							<div class="list-group">
								<a id="36" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">7.1. Listar Modelo Textual</a>
								<a id="37" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">7.2. Adicionar Modelo Textual</a>
								<a id="38" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">7.3. Visualizar Modelo Textual</a>
								<a id="39" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">7.4. ar Modelo Textual</a>
							</div>
							<h3>8. Modelo Gráfico</h3>
							<div class="list-group">
								<a id="40" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">8.1. Listar Modelo Gráfico</a>
								<a id="41" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">8.2. Adicionar Modelo Gráfico</a>
								<a id="42" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">8.3. Visualizar Modelo Gráfico</a>
								<a id="43" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">8.4. ar Modelo Gráfico</a>
							</div>
							<h3>9. Tipo Pessoa</h3>
							<div class="list-group">
								<a id="44" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">9.1. Listar Tipo Pessoa</a>
								<a id="45" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">9.2. Adicionar Tipo Pessoa</a>
								<a id="46" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">9.3. ar Tipo Pessoa</a>
							</div>
							<h3>10. Tipo de Ação</h3>
							<div class="list-group">
								<a id="47" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">10.1. Listar Tipo Ação</a>
								<a id="48" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">10.2. Adicionar Tipo Ação</a>
								<a id="49" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">10.3. ar Tipo Ação</a>
							</div>
							<h3>11. Tipo de Atividade</h3>
							<div class="list-group">
								<a id="50" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">11.1. Listar Tipo Atividade</a>
								<a id="51" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">11.2. Adicionar Tipo Atividade</a>
								<a id="52" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">11.3. Visualizar Tipo Atividade</a>
								<a id="53" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">11.4. ar Tipo Atividade</a>
							</div>
							<h3>12. Impressão Certificado</h3>
							<div class="list-group">
								<a id="54" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">12.1. Listar Tipo Certificado</a>
								<a id="55" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">12.2. Adicionar Tipo Certificado</a>
								<a id="56" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">12.3. Visualizar Tipo Certificado</a>
								<a id="57" href="#" class="list-group-item itemAjuda abrir_modal" title="" data-confirm="" data-toggle="modal" data-target="#modal">12.4. ar Tipo Certificado</a>
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