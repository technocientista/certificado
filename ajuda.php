<!DOCTYPE html>
<html>
<head>
	<?php include 'import/import_head.php'; ?>

</head>
<body>
	<?php include 'import/header.php'; ?>


	<div class="wrapper">
		<div class="main-view"> 
			<div class="container bottom70">
				<div class=" row margin-top">
					<!--Body Editável-->
					<div class="box box-success col-xs-12">
						<div class="box-header">
							<h3 class="box-title">
								<i class="fa fa-question-circle"></i>
								<span class="hidden-sm hidden-xs">Índice</span>
							</h3>
						</div>
						<div class="box-body">
							<h3>1. Acesso ao Sistema</h3>
							<div class="list-group">
								<a href="#modal_acesso_ao_sistema" class="list-group-item itemAjuda">1.1. Acesso ao Sistema</a>
							</div>
							<h3>2. Ações</h3>
							<div class="list-group">
								<a href="#modal_acao_listagem" class="list-group-item itemAjuda">2.1. Listar Ações</a>
								<a href="#modal_acao_add" class="list-group-item itemAjuda">2.2. Adicionar Ações</a>
								<a href="#modal_acao_view" class="list-group-item itemAjuda">2.3. Visualizar Ações</a>
								<a href="#modal_acao_edit" class="list-group-item itemAjuda">2.4. Editar Ações</a>
								<a href="#modal_certificado_listar_por_acao" class="list-group-item itemAjuda">2.5. Editar Certificados da Ação</a>
								<a href="#modal_certificado_adicionar_pessoa" class="list-group-item itemAjuda">2.6. Adiciona pessoa à Ação</a>
								<a href="#modal_certificado_importar_pessoa" class="list-group-item itemAjuda">2.7. Adicionar pessoas em massa à Ação</a>
								<a href="#modal_certificado_item_index" class="list-group-item itemAjuda">2.8. Itens do Certificado</a>
								<a href="#modal_certificado_item_view" class="list-group-item itemAjuda">2.9. Visualização de Item do Certificado</a>
								<a href="#modal_certificado_item_enviar_itens_aprovacao" class="list-group-item itemAjuda">2.10. Enviar Itens para Aprovação</a>
								<a href="#modal_representante_acoes_listar_por_acao" class="list-group-item itemAjuda">2.11. Permissões / Operadores</a>
								<a href="#modal_representante_acoes_add" class="list-group-item itemAjuda">2.12. Novo Operador</a>
							</div>
							<h3>3. Pessoas</h3>
							<div class="list-group">
								<a href="#modal_pessoa_listagem" class="list-group-item itemAjuda">3.1. Listar Pessoas</a>
								<a href="#modal_pessoa_add" class="list-group-item itemAjuda">3.2. Adicionar Pessoas</a>
								<a href="#modal_pessoa_view" class="list-group-item itemAjuda">3.3. Visualizar Pessoas</a>
								<a href="#modal_pessoa_edit" class="list-group-item itemAjuda">3.4. Editar Pessoas</a>
							</div>
							<h3>4. Função</h3>
							<div class="list-group">
								<a href="#modal_funcao_listagem" class="list-group-item itemAjuda">4.1. Listar Funções</a>
								<a href="#modal_funcao_add" class="list-group-item itemAjuda">4.2. Adicionar Funções</a>
								<a href="#modal_funcao_view" class="list-group-item itemAjuda">4.3. Visualizar Funções</a>
								<a href="#modal_funcao_edit" class="list-group-item itemAjuda">4.4. Editar Funções</a>
							</div>
							<h3>5. Certificados</h3>
							<div class="list-group">
								<a href="#modal_certificado_index" class="list-group-item itemAjuda">5.1. Listar Certificados para Aprovação</a>
								<a href="#modal_certificado_add" class="list-group-item itemAjuda">5.2. Adicionar Certificado</a>
								<a href="#modal_certificado_view" class="list-group-item itemAjuda">5.3. Visualizar Certificado</a>
								<a href="#modal_certificado_edit" class="list-group-item itemAjuda">5.4. Editar Certificado</a>
								<a href="#modal_certificado_item_enviar_itens_ajuste" class="list-group-item itemAjuda">5.5. Enviar Item do Certificado para Ajuste</a>
								<a href="#modal_certificado_item_reprovar" class="list-group-item itemAjuda">5.6. Reprovar Item do Certificado</a>
								<a href="#modal_certificado_item_aprovar" class="list-group-item itemAjuda">5.7. Aprovar Item do Certificado</a>
								<a href="#modal_certificado_item_invalidar" class="list-group-item itemAjuda">5.8. Invalidar Item do Certificado</a>
								<a href="#modal_certificado_item_edit_item_emitido" class="list-group-item itemAjuda">5.9. Editar Item Emitido</a>
								<a href="#modal_certificado_item_reemitir_item" class="list-group-item itemAjuda">5.10. Reemitir Item do Certificado</a>
							</div>
							<h3>6. Modalidades</h3>
							<div class="list-group">
								<a href="#modal_modalidades_listagem" class="list-group-item itemAjuda">6.1. Listar Modalidades</a>
								<a href="#modal_modalidades_add" class="list-group-item itemAjuda">6.2. Adicionar Modalidades</a>
								<a href="#modal_modalidades_view" class="list-group-item itemAjuda">6.3. Visualizar Modalidades</a>
								<a href="#modal_modalidades_edit" class="list-group-item itemAjuda">6.4. Editar Modalidades</a>
							</div>
							<h3>7. Modelo Textual</h3>
							<div class="list-group">
								<a href="#modal_modelotex_listagem" class="list-group-item itemAjuda">7.1. Listar Modelo Textual</a>
								<a href="#modal_modelotex_add" class="list-group-item itemAjuda">7.2. Adicionar Modelo Textual</a>
								<a href="#modal_modelotex_view" class="list-group-item itemAjuda">7.3. Visualizar Modelo Textual</a>
								<a href="#modal_modelotex_edit" class="list-group-item itemAjuda">7.4. Editar Modelo Textual</a>
							</div>
							<h3>8. Modelo Gráfico</h3>
							<div class="list-group">
								<a href="#modal_modelograf_listagem" class="list-group-item itemAjuda">8.1. Listar Modelo Gráfico</a>
								<a href="#modal_modelograf_add" class="list-group-item itemAjuda">8.2. Adicionar Modelo Gráfico</a>
								<a href="#modal_modelograf_view" class="list-group-item itemAjuda">8.3. Visualizar Modelo Gráfico</a>
								<a href="#modal_modelograf_edit" class="list-group-item itemAjuda">8.4. Editar Modelo Gráfico</a>
							</div>
							<h3>9. Tipo Pessoa</h3>
							<div class="list-group">
								<a href="#modal_tipopessoas_listagem" class="list-group-item itemAjuda">9.1. Listar Tipo Pessoa</a>
								<a href="#modal_tipopessoas_add" class="list-group-item itemAjuda">9.2. Adicionar Tipo Pessoa</a>
								<a href="#modal_tipopessoas_edit" class="list-group-item itemAjuda">9.3. Editar Tipo Pessoa</a>
							</div>
							<h3>10. Tipo de Ação</h3>
							<div class="list-group">
								<a href="#modal_tipoacoes_listagem" class="list-group-item itemAjuda">10.1. Listar Tipo Ação</a>
								<a href="#modal_tipoacoes_add" class="list-group-item itemAjuda">10.2. Adicionar Tipo Ação</a>
								<a href="#modal_tipoacoes_edit" class="list-group-item itemAjuda">10.3. Editar Tipo Ação</a>
							</div>
							<h3>11. Tipo de Atividade</h3>
							<div class="list-group">
								<a href="#modal_tipoatividades_listagem" class="list-group-item itemAjuda">11.1. Listar Tipo Atividade</a>
								<a href="#modal_tipoatividades_add" class="list-group-item itemAjuda">11.2. Adicionar Tipo Atividade</a>
								<a href="#modal_tipoatividades_view" class="list-group-item itemAjuda">11.3. Visualizar Tipo Atividade</a>
								<a href="#modal_tipoatividades_edit" class="list-group-item itemAjuda">11.4. Editar Tipo Atividade</a>
							</div>
							<h3>12. Impressão Certificado</h3>
							<div class="list-group">
								<a href="#modal_tipocertificado_listagem" class="list-group-item itemAjuda">12.1. Listar Tipo Certificado</a>
								<a href="#modal_tipocertificado_add" class="list-group-item itemAjuda">12.2. Adicionar Tipo Certificado</a>
								<a href="#modal_tipocertificado_view" class="list-group-item itemAjuda">12.3. Visualizar Tipo Certificado</a>
								<a href="#modal_tipocertificado_edit" class="list-group-item itemAjuda">12.4. Editar Tipo Certificado</a>
							</div>
						</div>
					</div>

					<!--Body Editável-->
				</div>
			</div>
		</div>
		<!--Modal-->
		<div class="Modal">

		</div>
		<!--Modal-->
		<?php include 'import/footer.php'; ?>
		<?php include 'import/import_script.php'; ?>
	</body>
	</html>