
<th class="text-center">
	<a  href="#" data-toggle="modal" data-target="<?php echo '#modal'.$id_participa;  ?>" title="Detalhes" data-confirm="">
		<i class="material-icons sm-18">
			add
		</i>
	</a>
</th>
<td class="tr-max td01"><?php echo $nome_usuario; ?></td>
<td class="tr-max text-center"><?php echo $nome_atv; ?></td>
<td class=" text-center"><label class="badge badge-pill text-wrap"><?php echo $situacao_ativ;?></label></td>


<td class="actions text-light text-center">

	<div class="btn-group" role="group">
		<div class="container-fluid ">
			<input class="checkAll" type="checkbox"  name="check[]" value="<?php echo $id_participa;?>" >
		</div>
		<a href="funcoes/reprovar.php?id=<?php echo $id_participa;?>" class="text-danger abrir_modal" data-toggle="modal" data-target="#modal" title="Reprovar aluno" data-confirm="Tem certeza que deseja reprovar este aluno?">
			<i class="material-icons sm-18">
				cancel
			</i>
		</a>
		<a href="funcoes/aprovar.php?id=<?php echo $id_participa;?>" class="text-success abrir_modal container-fluid " data-toggle="modal" data-target="#modal" title="Aprovar aluno" data-confirm="Tem certeza que deseja aprovar este aluno?">
			<i class="material-icons sm-18">
				check
			</i>
		</a>
	</div>


</td>

</tr>

<div class="modal fade" id="<?php echo 'modal'.$id_participa;  ?>" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header bg-danger">
				<h5 class="modal-title text-white" id="title"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modal-body">
				<p><strong>Nome: </strong><?php echo $nome_usuario; ?></p> 
				<p><strong>Login: </strong><?php echo $login; ?></p>
				<p><strong>CPF: </strong><?php echo $cpf_usuario; ?></p>


				<p><strong>Telefone: </strong><?php echo $tel_usuario; ?></p>
				<p><strong>E-mail: </strong><?php echo $email_usuario; ?></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>


			</div>
		</div>
	</div>
</div>


