<!DOCTYPE html>
<html>
<head>
	<title>Responsavel</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body> 
	

	<?php include 'header-responsavel.php'; ?>


	<div class="container-fluid ">
		<h3>Ações</h3>	
	</div>


	<section class="container-fluid">
		<div class="row justify-content-center" >
			<div class="col-lg-6 ">
				<form>
					<div class="form-group">
						
						<label for="formGroupExampleInput">Nome</label>
						<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite o Nome">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">CPF/Passaporte</label>
						<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Digite o CPF/Passaporte">
					</div>
				</form>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					
					<label for="inputState">Ação</label>
					<select id="inputState" class="form-control">
						<option selected>Evento</option>
						<option>Curso</option>
						<option>Mini-Curso</option>
						<option>Oficina</option>
						<option>Palestra</option>
						
					</select>
					<button type="submit" class="btn btn-outline-primary">Filtrar</button>
					<a class="btn btn-outline-primary" href="nova_acao.html">Nova Ação</a>
				</div>
			</div>
		</div>
	</section>

	

	<section class="container-fluid">


		<div class="table-responsive-lg" id="tabela" role="tablist" aria-multiselectable="true">
			<table class="table table-striped ">
				
				<tr>
					<th> 
						<a role="button" data-toggle="collapse" data-parent="#tabela" href="#table1" aria-expanded="true" aria-controls="table1">
							<i class="material-icons text-success">add</i>
						</a>
					</th>
					<th>Evento</th>
					<th>11-11-2019</th>
					<th class="tr-max">40h</th>
					<th class="tr-max">25-12-2019</th>
					<th></th>

				</tr>



				<tbody id="table1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<tr >
						<th></th>
						<th>Nome completo</th>
						<th>CPF</th>
						<th class="tr-max">Email</th>
						<th class="tr-max">Matricula</th>
						<th>Ações</th>		
					</tr>

					<tr>
						<th></th>
						<td>Diego Fernandes Almeida</td>
						<td>650.571.944-02</td>
						<td class="tr-max">DiegoFernandesAlmeida@dayrep.com</td>
						<td class="tr-max">20191514065000</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Carla Carvalho Barbosa</td>
						<td>492.940.769-97</td>
						<td class="tr-max">CarlaCarvalhoBarbosa@jourrapide.com</td>
						<td class="tr-max">20191514065145</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Emily Gomes Almeida</td>
						<td>493.330.975-20</td>
						<td class="tr-max">EmilyGomesAlmeida@jourrapide.com</td>
						<td class="tr-max">20191514065563</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Eduarda Silva Souza</td>
						<td>410.228.261-07</td>
						<td class="tr-max">EduardaSilvaSouza@jourrapide.com</td>
						<td class="tr-max">20191514065256</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>
				</tbody>



				<tr>
					<th> 
						<a role="button" data-toggle="collapse" data-parent="#tabela" href="#table2" aria-expanded="true" aria-controls="table2">
							<i class="material-icons text-success">add</i>
						</a>
					</th>
					<th>Curso</th>
					<th>11-11-2019</th>
					<th class="tr-max">40h</th>
					<th class="tr-max">25-12-2019</th>
					<th></th>

				</tr>

				<tbody id="table2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<tr >
						<th></th>
						<th>Nome completo</th>
						<th>CPF</th>
						<th class="tr-max">Email</th>
						<th class="tr-max">Matricula</th>
						<th>Ações</th>		
					</tr>

					<tr>
						<th></th>
						<td>Diego Fernandes Almeida</td>
						<td>650.571.944-02</td>
						<td class="tr-max">DiegoFernandesAlmeida@dayrep.com</td>
						<td class="tr-max">20191514065000</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Carla Carvalho Barbosa</td>
						<td>492.940.769-97</td>
						<td class="tr-max">CarlaCarvalhoBarbosa@jourrapide.com</td>
						<td class="tr-max">20191514065145</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Emily Gomes Almeida</td>
						<td>493.330.975-20</td>
						<td class="tr-max">EmilyGomesAlmeida@jourrapide.com</td>
						<td class="tr-max">20191514065563</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Eduarda Silva Souza</td>
						<td>410.228.261-07</td>
						<td class="tr-max">EduardaSilvaSouza@jourrapide.com</td>
						<td class="tr-max">20191514065256</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>
				</tbody>

				<tr>
					<th> 
						<a role="button" data-toggle="collapse" data-parent="#tabela" href="#table3" aria-expanded="true" aria-controls="table3">
							<i class="material-icons text-success">add</i>
						</a>
					</th>
					<th>Mini-Curso</th>
					<th>11-11-2019</th>
					<th class="tr-max">40h</th>
					<th class="tr-max">25-12-2019</th>
					<th></th>

				</tr>

				<tbody id="table3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<tr >
						<th></th>
						<th>Nome completo</th>
						<th>CPF</th>
						<th class="tr-max">Email</th>
						<th class="tr-max">Matricula</th>
						<th>Ações</th>		
					</tr>

					<tr>
						<th></th>
						<td>Diego Fernandes Almeida</td>
						<td>650.571.944-02</td>
						<td class="tr-max">DiegoFernandesAlmeida@dayrep.com</td>
						<td class="tr-max">20191514065000</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Carla Carvalho Barbosa</td>
						<td>492.940.769-97</td>
						<td class="tr-max">CarlaCarvalhoBarbosa@jourrapide.com</td>
						<td class="tr-max">20191514065145</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Emily Gomes Almeida</td>
						<td>493.330.975-20</td>
						<td class="tr-max">EmilyGomesAlmeida@jourrapide.com</td>
						<td class="tr-max">20191514065563</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Eduarda Silva Souza</td>
						<td>410.228.261-07</td>
						<td class="tr-max">EduardaSilvaSouza@jourrapide.com</td>
						<td class="tr-max">20191514065256</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>
				</tbody>

				<tr>
					<th> 
						<a role="button" data-toggle="collapse" data-parent="#tabela" href="#table4" aria-expanded="true" aria-controls="table4">
							<i class="material-icons text-success">add</i>
						</a>
					</th>
					<th>Oficina</th>
					<th>11-11-2019</th>
					<th class="tr-max">40h</th>
					<th class="tr-max">25-12-2019</th>
					<th></th>

				</tr>

				<tbody id="table4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<tr >
						<th></th>
						<th>Nome completo</th>
						<th>CPF</th>
						<th class="tr-max">Email</th>
						<th class="tr-max">Matricula</th>
						<th>Ações</th>		
					</tr>

					<tr>
						<th></th>
						<td>Diego Fernandes Almeida</td>
						<td>650.571.944-02</td>
						<td class="tr-max">DiegoFernandesAlmeida@dayrep.com</td>
						<td class="tr-max">20191514065000</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Carla Carvalho Barbosa</td>
						<td>492.940.769-97</td>
						<td class="tr-max">CarlaCarvalhoBarbosa@jourrapide.com</td>
						<td class="tr-max">20191514065145</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Emily Gomes Almeida</td>
						<td>493.330.975-20</td>
						<td class="tr-max">EmilyGomesAlmeida@jourrapide.com</td>
						<td class="tr-max">20191514065563</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Eduarda Silva Souza</td>
						<td>410.228.261-07</td>
						<td class="tr-max">EduardaSilvaSouza@jourrapide.com</td>
						<td class="tr-max">20191514065256</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>
				</tbody>

				<tr> 
					<th> 
						<a role="button" data-toggle="collapse" data-parent="#tabela" href="#table5" aria-expanded="true" aria-controls="table5">
							<i class="material-icons text-success">add</i>
						</a>
					</th>
					<th>Palestra</th>
					<th>11-11-2019</th>
					<th class="tr-max">40h</th>
					<th class="tr-max">25-12-2019</th>
					<th></th>

				</tr>

				<tbody id="table5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<tr >
						<th></th>
						<th>Nome completo</th>
						<th>CPF</th>
						<th class="tr-max">Email</th>
						<th class="tr-max">Matricula</th>
						<th>Ações</th>		
					</tr>

					<tr>
						<th></th>
						<td>Diego Fernandes Almeida</td>
						<td>650.571.944-02</td>
						<td class="tr-max">DiegoFernandesAlmeida@dayrep.com</td>
						<td class="tr-max">20191514065000</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Carla Carvalho Barbosa</td>
						<td>492.940.769-97</td>
						<td class="tr-max">CarlaCarvalhoBarbosa@jourrapide.com</td>
						<td class="tr-max">20191514065145</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Emily Gomes Almeida</td>
						<td>493.330.975-20</td>
						<td class="tr-max">EmilyGomesAlmeida@jourrapide.com</td>
						<td class="tr-max">20191514065563</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>

					<tr>
						<th></th>
						<td>Eduarda Silva Souza</td>
						<td>410.228.261-07</td>
						<td class="tr-max">EduardaSilvaSouza@jourrapide.com</td>
						<td class="tr-max">20191514065256</td>
						<td><i class="material-icons text-danger">delete</i><i class="material-icons">edit</i><i class="material-icons text-success">send</i></td>
					</tr>
				</tbody>



				
				
			</table>
		</div>
	</section>



	<?php include 'footer-responsavel.php'; ?>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>