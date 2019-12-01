<tr>
	<th class="tr-max text-center">
		<?php echo $id_certificado; ?>
	</th>
	<td class=" text-center"><?php echo $nome_atv; ?></td>
	<td class="tr-max text-center"><?php echo $carga_horaria_atv; ?></td>
	<td class=" text-center">
		<?php 
		if ($situacao_certificado) {?>

			<label class="badge badge-success badge-pill text-wrap">Emitido</label>

			<?php
		}else{?>

			<label class="badge badge-danger badge-pill text-wrap">Cancelado</label>

			<?php
		}
		?>
		

	</td>
	<td class="actions text-light text-center">
		<div class="btn-group" role="group">
			<a href="funcoes/emitir_certificado.php?id=<?php echo $id_certificado; ?>" class="text-primary container-fluid abrir_modal" data-toggle="modal" data-target="#modal" title="Imprimir certificados" data-confirm="Tem certeza que deseja emitir os certificados?">
				<i class="material-icons sm-18">
					print
				</i>
			</a>
		</div>
	</td>

</tr>



