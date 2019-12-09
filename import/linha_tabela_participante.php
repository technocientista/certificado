
<th class="tr-max text-center text-light">
	<a data-toggle="collapse" href="#mais-<?php echo $id_participa; ?>" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-success"  title="Visualizar atividade">
		<i class="material-icons sm-18">
			add
		</i>
	</a>
</th>
<td class="td01"><?php echo $nome_atv; ?></td>
<td class="tr-max text-center"><?php echo $carga_horaria_atv; ?></td>
<td class=" text-center"><label class="badge badge-pill text-wrap"><?php echo $situacao_ativ;?></label></td>



<td class="actions text-light text-center">
	<div class="btn-group" role="group">
		<div class="container-fluid ">
			<input class="checkAll" type="checkbox"  name="check[]" value="<?php echo $id_participa;?>" >
		</div>

		<!--<a href="funcoes/apagar_participa.php?id=<?php echo $id_participa;?>" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Excluir atividade" data-confirm="Tem certeza que deseja excluir essa atividade?">
			<i class="material-icons sm-18">
				delete
			</i>
		</a>
		<a class="btn btn-success btn-sm">
			<i class="material-icons sm-18">
				print
			</i>
		</a>-->
	</div>
</td>

</tr>

<div class="collapse" id="mais-<?php echo $id_participa; ?>">
	<div class="card card-body">
		<a data-toggle="collapse" href="#mais-<?php echo $id_participa; ?>" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-danger text-right"  title="Fechar">
			
			<i class="material-icons sm-18 ">
				close
			</i>

		</a>
		<p><strong>Descrição: </strong><?php echo $descricao; ?></p> 
		<p><strong>Local: </strong><?php echo $local; ?></p>
		<p><strong>Data inicial: </strong><?php echo $data_inicial_atv; ?></p>

		<p><strong>Data final: </strong><?php echo $data_final_atv; ?></p>
		<p><strong>Status: </strong>
			<?php 
			if ($situacao_ativ2 == 1) {?>
				<label class="badge badge-primary badge-pill text-wrap">Aguardando início</label>
				<?php
			}
			if ($situacao_ativ2 == 6) {?>
				<label class="badge badge-danger badge-pill text-wrap">Cancelado</label>
				<?php
			}
			if ($situacao_ativ2 == 7) {?>
				<label class="badge badge-success badge-pill text-wrap">Concluído</label>
				<?php
			}
			if ($situacao_ativ2 == 9) {?>
				<label class="badge badge-info badge-pill text-wrap">Iniciado</label>
				<?php
			}
			?>


		</p>
	</div>
</div>


