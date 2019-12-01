<?php
include 'funcoes/conn.php';
$usuario_logado = $_SESSION['id'];


$sql2 = "SELECT * FROM (((participa AS p 
JOIN usuario AS u  ON p.fk_usuario_id_usuario = u.id_usuario)
JOIN situacao_ativ AS s ON p.fk_situacao_ativ_id_situacao_ativ = s.id_situacao_ativ)
JOIN atividade AS a ON p.fk_atv_id_atv = a.id_atv)";

$resultado 	= $conn->query($sql2);
$todos 		= 0;
$aprovados 	= 0;
$reprovados = 0;
$emitidos 	= 0;
$correcao 	= 0;
$cancelados = 0;

if ($resultado->num_rows > 0) {
	while($linha = $resultado->fetch_assoc()) {
		$responsavel 				= $linha["responsavel"];
		$status_participa 			= $linha["status_participa"];
		$situacao					= $linha["id_situacao_ativ"];
		$id_participa 				= $linha["id_participa"];
		
		
		if ($usuario_logado==$responsavel && $status_participa) {
			
			if ($situacao > 0 && $situacao < 10) {
				$todos++;
			}
			if ($situacao == 3 ) {
				$aprovados++;
			}
			if ($situacao == 8) {
				$reprovados++;
			}
			if ($situacao == 2 || $situacao == 4) {
				$emitidos++;
			}
			if ($situacao == 5) {
				$correcao++;
			}
			if ($situacao == 6) {
				$cancelados++;
			}
		}

		
	}

}
?>

<ul class="nav nav-tabs ">
	
	<li class="nav-item " id="aprovados">
		<a class="nav-link active" href="#">Aprovados <span class="badge badge-pill badge-success"><?php echo $aprovados; ?></span></a>
	</li>
	<li class="nav-item" id="reprovados">
		<a class="nav-link" href="#">Reprovados <span class="badge badge-pill badge-success"><?php echo $reprovados; ?></span></a>
	</li>
	<li class="nav-item" id="emitidos">
		<a class="nav-link" href="#">Emitidos/Assinados <span class="badge badge-pill badge-success"><?php echo $emitidos; ?></span></a>
	</li>
	<li class="nav-item" id="correcao">
		<a class="nav-link" href="#">Correção <span class="badge badge-pill badge-success"><?php echo $correcao; ?></span></a>
	</li>
	<li class="nav-item" id="cancelados">
		<a class="nav-link " href="#" >Cancelados <span class="badge badge-pill badge-success"><?php echo $cancelados; ?></span></a>
	</li>
	<li class="nav-item" id="todos">
		<a class="nav-link  " href="#">Todos <span class="badge badge-pill badge-success"><?php echo $todos; ?></span></a>
	</li>
</ul>