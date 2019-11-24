
<th class="tr-max"><?php echo $id_participa; ?></th>
<td ><?php echo $nome_atv; ?></td>
<td class="tr-max text-center"><?php echo $carga_horaria_atv; ?></td>
<td class=" text-center"><label class="badge badge-pill text-wrap"><?php echo $situacao_ativ;?></label></td>



<td class="actions text-light text-center">
	<div class="btn-group" role="group">

		<a  class="btn btn-primary btn-sm"  title="Visualizar Curso">
			<i class="material-icons sm-18">
				search
			</i>
		</a>
		<a href="funcoes/apagar_participa.php?id=<?php echo $id_participa;?>" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Excluir atividade" data-confirm="Tem certeza que deseja excluir essa atividade?">
			<i class="material-icons sm-18">
				delete
			</i>
		</a>
		<a class="btn btn-success btn-sm">
			<i class="material-icons sm-18">
				print
			</i>
		</a>
	</div>
</td>
</tr>