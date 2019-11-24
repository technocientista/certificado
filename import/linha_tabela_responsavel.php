
	<th ><?php echo $nome_usuario; ?></th>
	<td class="tr-max"><?php echo $cpf_usuario; ?></td>
	<td class="tr-max text-center"><?php echo $nome_atv; ?></td>
	<td class=" text-center"><label class="badge badge-pill text-wrap"><?php echo $situacao_ativ;?></label></td>


	<td class="actions text-light text-center">
		<div class="btn-group" role="group">
			<a class="btn btn-primary btn-sm" title="Imprimir">
				<i class="material-icons sm-18">
					print
				</i>
			</a>
			<a href="funcoes/reprovar.php?id=<?php echo $id_participa;?>" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Reprovar aluno" data-confirm="Tem certeza que deseja reprovar este aluno?">
				<i class="material-icons sm-18">
					cancel
				</i>
			</a>
			<a href="funcoes/aprovar.php?id=<?php echo $id_participa;?>" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Aprovar aluno" data-confirm="Tem certeza que deseja aprovar este aluno?">
				<i class="material-icons sm-18">
					check
				</i>
			</a>
		</div>
	</td>
</tr>
