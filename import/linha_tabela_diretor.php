
<th class="text-center">
	<a data-toggle="collapse" href="#mais-<?php echo $id_participa; ?>" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-success"  title="Detalhes do aluno">
		<i class="material-icons sm-18">
			add
		</i>
	</a>
</th>
<td class=" td01"><?php echo $nome_usuario; ?></td>
<td class="tr-max text-center"><?php echo $nome_atv; ?></td>
<td class=" text-center"><label class="badge badge-pill text-wrap"><?php echo $situacao_ativ;?></label></td>


<td class="actions text-light text-center">
	<div class="btn-group" role="group">
		<a href="funcoes/enviar_correcao.php?id=<?php echo $id_participa;?>" class="btn btn-warning btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Enviar para correção" data-confirm="Tem certeza que deseja enviar essa aprovação para correção?">
			<i class="material-icons sm-18">
				cached
			</i>
		</a>
		<a href="funcoes/cancelar_aprovacao.php?id=<?php echo $id_participa;?>" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Cancelar aprovação" data-confirm="Tem certeza que deseja cancelar a aprovação desse aluno?">
			<i class="material-icons sm-18">
				block
			</i>
		</a>
		<a href="funcoes/assinar_aprovacao.php?id=<?php echo $id_participa;?>" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Assinar aprovação" data-confirm="Tem certeza que deseja assinar a aprovação desse aluno?">
			<i class="material-icons sm-18">
				check
			</i>
		</a>
	</div>
</td>
<div class="collapse" id="mais-<?php echo $id_participa; ?>">
	<div class="card card-body ">
		<a data-toggle="collapse" href="#mais-<?php echo $id_participa; ?>" role="button" aria-expanded="false" aria-controls="collapseExample" class=" text-danger text-right"  title="Fechar">

			<i class="material-icons sm-18 ">
				close
			</i>

		</a>

		<p><strong>Nome: </strong><?php echo $nome_usuario; ?></p> 
		<p><strong>Login: </strong><?php echo $login; ?></p>
		<p><strong>CPF: </strong><?php echo $cpf_usuario; ?></p>


		<p><strong>Telefone: </strong><?php echo $tel_usuario; ?></p>
		<p><strong>E-mail: </strong><?php echo $email_usuario; ?></p>


	</div>
</tr>


