<tr class="linha">
	<th class="text-center">
		<a data-toggle="collapse" href="#mais-<?php echo $id_usuario; ?>" role="button" aria-expanded="false" aria-controls="collapseExample" class=""  title="Detalhes do usuário">
			<i class="material-icons sm-18">
				add
			</i>
		</a>
	</th>
	<?php 
	;
	if ($status_usuario) {?>
		<td class="text-success td01"><strong><?php echo $nome_usuario; ?></strong></td>
		<?php
	}else{?>
		<td class="text-danger td01"><strong><?php echo $nome_usuario; ?></strong></td>
		<?php
	}
	?>
	
	<td class="tr-max text-center"><?php echo $login; ?></td>
	<td class="tr-max text-center">
		<?php 
		;
		if ($status_usuario) {?>
			<label class="badge badge-success badge-pill text-wrap">Ativo</label>
			<?php
		}else{?>
			<label class="badge badge-danger badge-pill text-wrap">Inativo</label>
			<?php
		}
		?>
		
	</td>


	<td class="actions text-light text-center">
		<div class="btn-group" role="group">
			
			<a href="funcoes/ativ_desativ_user_admin.php?id=<?php echo $id_usuario;?>" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Ativar ou desativar o usuário" data-confirm="Tem certeza que deseja alterar o status deste usuário?">
				<i class="material-icons sm-18">
					autorenew
				</i>
			</a>
		</div>
	</td>
	<div class="collapse" id="mais-<?php echo $id_usuario; ?>">
		<div class="card card-body ">
			<a data-toggle="collapse" href="#mais-<?php echo $id_usuario; ?>" role="button" aria-expanded="false" aria-controls="collapseExample" class=" text-danger text-right"  title="Fechar">

				<i class="material-icons sm-18 ">
					close
				</i>

			</a>

			<p><strong>Nome: </strong><?php echo $nome_usuario; ?></p> 
			<p><strong>Login: </strong><?php echo $login; ?></p>
			<p><strong>CPF: </strong><?php echo $cpf_usuario; ?></p>
			<p><strong>Telefone: </strong><?php echo $tel_usuario; ?></p>
			<p><strong>E-mail: </strong><?php echo $email_usuario; ?></p>
			<p><strong>Status: </strong>
				<?php 
				;
				if ($status_usuario) {?>
					<label class="badge badge-success badge-pill text-wrap">Ativo</label>
					<?php
				}else{?>
					<label class="badge badge-danger badge-pill text-wrap">Inativo</label>
					<?php
				}
				?>
			</p>


		</div>
	</div>
</tr>


