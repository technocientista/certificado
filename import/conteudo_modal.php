<!--Divisória de conteúdo modal Brenda-->
<div id="m1" class="modalAjuda collapse">

 <p>Formas de obter acesso ao sistema:
 </p><ul>
   <li>
     <strong>Participante</strong>: Precisa de acesso ao sistema.
     Para realizar a emissão de seus certificados na área pública, clique <a href="emitir.php" alt="AQUI" title="AQUI">AQUI</a>
   </li>
   <li>
    <strong>Responsável</strong>: O acesso é concedido automaticamente mediante cadastro na página Registre-se.
  </li>
  <li>
   <strong>Diretor</strong> : Solicitar que a administração responsável pela Atividade cadastre-a no sistema e vincule-o como diretor.
   O acesso será concedido de forma automática;
 </li>
 <li>
   <strong>Administrador</strong>: Cadastra Participantes no sistema;
 </li>



</ul>





<!--Divisória de conteúdo modal-->
<div id="m2" class="modalAjuda collapse">



  <p>A Listagem de Atividades encontra-se na página do Responsável</p>

  <p>
    A tela de Listagem de Atividades serve para listar todas as Atividades do IFCE.
  </p>

  <p>
    Na tela de Listagem de Atividades, é apresentada uma lista com as Atividades do IFCE,
    onde para cada um, há as opções para Visualizar 
    <a href="#" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Pausar atividade" data-confirm="Tem certeza que deseja pausar a atividade?">
      <i class="material-icons sm-18">
        pause
      </i>
      Pausar
    </a>
    
    <a href="#" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Iniciar atividade" data-confirm="Tem certeza que deseja iniciar a atividade?">
      <i class="material-icons sm-18">
        play_arrow
      </i>
      Iniciar
    </a> a Atividades.
  </p>

  <div class="jumbotron box box-success">
    <!-- Body alterável: -->


    <script type="text/javascript">
      $(document).ready(function() {
        $('#alert').addClass('alert-danger');
      });
    </script>


    <h5>Atividades</h5>
    <p>Veja aqui a sua lista de atividades e suas situações.</p>

    <div class="form-row align-items-center">
      <div class="col-auto col-lg-3">

        <div class="input-group mb-2 ">
          <div class="input-group-prepend">
            <div class="input-group-text bg-success text-light">
              <i class="material-icons ">
                search
              </i>
            </div>
          </div>
          <input type="text" class="form-control form-control-lg" id="filtrar-tabela" placeholder="Digite um termo para a busca">
          <label class="sr-only" for="filtrar-tabela"></label>
        </div>
      </div>
    </div>

    <div class="table-responsive-lg">
      <ul class="nav nav-tabs">
        <li class="nav-item" id="ativas">
          <a class="nav-link ativas_link active" href="#">Ativas</a>
        </li>
        <li class="nav-item" id="apagadas">
          <a class="apagadas_link nav-link" href="#">Paradas</a>
        </li>
        <div class="col text-right">
          <a class="btn btn-success my-2 my-sm-0" href="registrar_atividade.php">Nova atividade</a>
        </div>

      </ul>
      <table id="tableAcao" class="table table-hover table-bordered table-condensed ">
        <thead class="bg-light">
          <tr class="text-center">
            <th class="tr-max"><a>#</a></th>
            <th><a>Atividade</a></th>
            <th class="tr-max"><a>Carga horária</a></th>
            <th><a>Situação</a></th>
            <th class="actions actions-90">Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr class="ativas linha">
            <th class="tr-max text-center">8</th>
            <td class="td01">Curso de Trânsito</td>
            <td class="tr-max text-center">40h</td>
            <td class="text-center">
              <label class="badge badge-primary text-wrap">AGUARDANDO</label>         </td>


              <td class="actions text-light text-center">
                <div class="btn-group" role="group">

                  <a href="funcoes/apagar_atividade.php?id=8" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Pausar atividade" data-confirm="Tem certeza que deseja pausar a atividade?">
                    <i class="material-icons sm-18">
                      pause
                    </i>
                  </a>
                  <a href="funcoes/iniciar_atividade.php?id=8" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Iniciar atividade" data-confirm="Tem certeza que deseja iniciar a atividade?">
                    <i class="material-icons sm-18">
                      play_arrow
                    </i>
                  </a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>




      <!-- Body alterável: -->
    </div>

    <p></p>

    <p>
     Além disso, há um formulário de busca, para filtrar as Atividades e permitir que o
     usuário possa localizar a Atividades desejada com mais facilidade.




     <!--Divisória de conteúdo modal-->
     <div id="m3" class="modalAjuda collapse">


      <p>A Adição de Atividade encontra-se na página do responsável no botão <a class="btn btn-success my-2 my-sm-0" href="#">Nova atividade</a></p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela de Nova Atividade serve para cadastrar uma Atividade nova. A princípio, as informações a serem cadastradas são:
                    </p>
                    <div class="jumbotron box box-success">
                      <!-- Body alterável: -->
                      <div class="box-header">
                        <h3 class="box-title">Registrar atividade</h3>
                      </div>
                      <div class="box-body">
                        <form method="post" action="funcoes/regist_ativ.php">
                          <div class="form-row">
                            <div class="col-md-4 mb-3">
                              <label for="validationServer01">Título da atividade</label>
                              <input type="text" class="form-control info is-invalid" id="validationServer01" placeholder="Título da atividade" value="" required="" name="nome_atv">
                              <div class="invalid-feedback">
                                Digite o título do evento
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="validationServer02">Carga horária</label>
                              <input type="text" class="form-control info is-invalid" id="validationServer02" placeholder="Digite a carga horária" value="" name="carga_horaria_atv" required="">
                              <div class="invalid-feedback">
                                Digite a carga horária
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="validationServer02">Local da atividade</label>
                              <input type="text" class="form-control info is-invalid" id="validationServer02" placeholder="Digite o local da atividade" value="" required="" name="local">
                              <div class="invalid-feedback">
                                Digite o local da atividade
                              </div>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-md-6 mb-3">
                              <label for="validationServerUsername">Data Inicial</label>

                              <input type="date" class="form-control info is-invalid" id="validationServerUsername" placeholder="E-mail" aria-describedby="inputGroupPrepend3" required="" name="data_inicial_atv">
                              <div class="invalid-feedback">
                                Digite uma data para o início da atividade.
                              </div>

                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="validationServer02">Data Final</label>
                              <input type="date" class="form-control info is-invalid" id="validationServer02" placeholder="Digite seu telefone" value="" required="" name="data_final_atv">
                              <div class="invalid-feedback">
                                Digite uma data para o término da atividade.
                              </div>
                            </div>

                          </div>
                          <div class="form-row">
                            <div class="col">
                              <label for="validationServer02">Descrição da atividade</label>
                              <input type="text" class="form-control info is-invalid" id="validationServer02" placeholder="Descrição da atividade" value="" required="" name="descricao">
                              <div class="invalid-feedback">
                                Digite a descrição da atividade
                              </div>
                            </div>
                          </div>


                          <button class="btn btn-success" type="submit">Registrar</button>

                        </form>
                      </div>
                      <!-- Body alterável: -->
                    </div>

                    
                    <p>
                      Após o preenchimento das informAtividades acima, é necessário clicar no botão
                      <button class="btn btn-success" type="submit">Registrar</button>.
                    </p>






                  </div>

                  <!--Divisória de conteúdo modal-->
                  <div id="m4" class="modalAjuda collapse">




                    <p>A Visualização de Atividades encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-briefcase"></i> Participar <i aria-hidden="true" class="glyphicon glyphicon-search"></i></p>


                    <p>
                     A tela para Visualizar Atividades serve para visualização dos dados da atividades.
                   </p>
                   <p>
                     As informações das Atividades a serem visualizadas:
                   </p>


                   <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="box  box-success">
                      <div class="box-header">
                        <h5 class="box-title">Curso de Inglês</h5>
                      </div>
                      <div class="box-body">
                        <img class="box box-success" src="img/01.jpg">
                        <p></p>
                        <p><strong>Local: </strong>Online</p>
                        <p><strong>Data inicial: </strong>2019-11-22</p>
                        <p><strong>Data final: </strong>2019-11-22</p>
                        <p><strong>Carga horária: </strong>40h</p>
                        <p class="text-right"><a href="funcoes/particip_ativ.php?id=4" class="btn btn-success" alt="Participar" title="Participar">Participar</a></p>
                      </div>
                    </div>
                  </div>





                </div>



                <!--Divisória de conteúdo modal-->
                <div id="m5" class="modalAjuda collapse">
                  <p>O Participante pode clicar em <a href="funcoes/particip_ativ.php?id=2" class="btn btn-success" alt="Participar" title="Participar">Participar</a> e adicionar a atividade na sua lista, porém o mesmo precisa de um cadastro no site.</p>
                  <p>O caminho para a participação é: <strong>Inicío > Participar</strong> ou <strong>Inicío > Participante > Novas Atividades</strong></p>

                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="box  box-success">
                      <div class="box-header">
                        <h5 class="box-title">Curso de Inglês</h5>
                      </div>
                      <div class="box-body">
                        <img class="box box-success" src="img/01.jpg">
                        <p></p>
                        <p><strong>Local: </strong>Online</p>
                        <p><strong>Data inicial: </strong>2019-11-22</p>
                        <p><strong>Data final: </strong>2019-11-22</p>
                        <p><strong>Carga horária: </strong>40h</p>
                        <p class="text-right"><a href="funcoes/particip_ativ.php?id=4" class="btn btn-success" alt="Participar" title="Participar">Participar</a></p>
                      </div>
                    </div>
                  </div>



                </div>


                <!--Divisória de conteúdo modal-->
                <div id="m6" class="modalAjuda collapse">

                  <p>
                    <input class="btn btn-light" type="checkbox" name="" value="" id="checkAll"> - Checkbox que marca todos os itens.
                    <br>
                    <a href="#" class="btn btn-light  text-warning abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Reprovar aluno" data-confirm="Tem certeza que deseja reprovar estes aluno?" name="reprova">
                      <i class="material-icons sm-18">
                        cached
                      </i>
                    </a> - Botão Enviar para Correção, que envia aprovações para a correção.
                    <br>
                    <a href="#" class="btn btn-light  text-danger abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Reprovar aluno" data-confirm="Tem certeza que deseja reprovar estes aluno?" name="reprova">
                      <i class="material-icons sm-18">
                        block
                      </i>
                    </a> - Botão Cancelar Aprovação, que cancela aprovações.
                    <br>
                    <a href="" class="btn btn-light text-success abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Emitir certificados" data-confirm="Tem certeza que deseja emitir os certificados?" name="emitir">
                      <i class="material-icons sm-18">
                        check
                      </i>
                    </a> - Botão Assinar Aprovação, que assina aprovação para emissão de certificados, para isso o aluno precisa estar aprovado pelo responsável.
                  </p>

                  <div class="jumbotron box box-success">
                    <!-- Body alterável: -->
                    <div>

                      <script type="text/javascript">
                        $(document).ready(function() {
                          $('#alert').addClass('alert-danger');
                        });
                      </script>

                      <h4>Área do Diretor</h4>
                      Bem vindo <strong>Diretor</strong>               
                      <p>Veja aqui a lista de aprovados aguardando emissão de certificados.</p>

                      <div class="form-row align-items-center">
                        <div class="col-auto col-lg-3">

                          <div class="input-group mb-2 ">
                            <div class="input-group-prepend">
                              <div class="input-group-text bg-success text-light">
                                <i class="material-icons ">
                                  search
                                </i>
                              </div>
                            </div>
                            <input type="text" class="form-control form-control-lg" id="filtrar-tabela" placeholder="Digite um termo para a busca">
                            <label class="sr-only" for="filtrar-tabela"></label>
                          </div>
                        </div>
                      </div>                
                    </div>
                    <div class="table-responsive-lg">


                      <ul class="nav nav-tabs ">

                        <li class="nav-item " id="aprovados">
                          <a class="nav-link active" href="#">Aprovados <span class="badge badge-pill badge-success">0</span></a>
                        </li>
                        <li class="nav-item" id="reprovados">
                          <a class="nav-link" href="#">Reprovados <span class="badge badge-pill badge-success">0</span></a>
                        </li>
                        <li class="nav-item" id="emitidos">
                          <a class="nav-link" href="#">Emitidos/Assinados <span class="badge badge-pill badge-success">0</span></a>
                        </li>
                        <li class="nav-item" id="correcao">
                          <a class="nav-link" href="#">Correção <span class="badge badge-pill badge-success">0</span></a>
                        </li>
                        <li class="nav-item" id="cancelados">
                          <a class="nav-link " href="#">Cancelados <span class="badge badge-pill badge-success">0</span></a>
                        </li>
                        <li class="nav-item" id="todos">
                          <a class="nav-link  " href="#">Todos <span class="badge badge-pill badge-success">0</span></a>
                        </li>
                      </ul>               
                      <form method="post" action="funcoes/diretor_acoes.php">


                        <table id="tableAcao" class="table table-bordered table-condensed ">
                          <thead class="bg-light">
                            <tr class="text-center">
                              <th><a>#</a></th>
                              <th class=""><a>Nome</a></th>
                              <th class="tr-max"><a>Curso</a></th>
                              <th class=""><a>Situação</a></th>
                              <th class="actions actions-90">
                                <div class="btn-group btn-group-sm text-right" role="group">
                                  <div class="container-fluid">
                                    <input class="" type="checkbox" name="" value="" id="checkAll">

                                  </div>


                                  <a href="" class="btn text-warning btn-sm abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Enviar para correção" data-confirm="Tem certeza que deseja enviar essas aprovações para correção?" name="correcao">
                                    <i class="material-icons sm-18">
                                      cached
                                    </i>
                                  </a>
                                  <a href="" class="btn text-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Cancelar aprovação" data-confirm="Tem certeza que deseja cancelar a aprovação desses alunos?" name="cancelar">
                                    <i class="material-icons sm-18">
                                      block
                                    </i>
                                  </a>
                                  <a href="" class="btn text-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Assinar aprovação" data-confirm="Tem certeza que deseja assinar a aprovação desses alunos?" name="assinar">
                                    <i class="material-icons sm-18">
                                      check
                                    </i>
                                  </a>
                                </div>
                              </th>
                            </tr>
                          </thead>
                          <tbody>



                            <tr class="aprovados linha">
                              <th class="text-center">
                                <a data-toggle="collapse" href="#mais-10" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-success" title="Detalhes do aluno">
                                  <i class="material-icons sm-18">
                                    add
                                  </i>
                                </a>
                              </th>
                              <td class=" td01">Klebson</td>
                              <td class="tr-max text-center">Curso de Trânsito</td>
                              <td class=" text-center"><label class="badge badge-pill text-wrap badge-success">APROVADO</label></td>


                              <td class="actions text-light text-center">
                                <div class="btn-group" role="group">
                                  <div class="container-fluid ">
                                    <input class="checkAll" type="checkbox" name="check[]" value="10">
                                  </div>


                                </div>
                              </td>
                            </tr>






                          </tbody>

                        </table>
                      </form>


                    </div>



                    <!-- Body alterável: -->
                  </div>

                </div>



                

                <!--Divisória de conteúdo modal-->
                <div id="m14" class="modalAjuda collapse">




                  <p>A Listagem de Participantes encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-user"></i> Responsável</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela de Listagem de Participantes serve para listar Participantes relacionadas à alguma atividade.
                    </p>

                    <p>
                      Na tela de Listagem de Participantes, é apresentada uma lista com os participantes,
                      onde para cada pessoa, há as opções para Visualizar
                      <div class="btn-group btn-group-sm text-right" role="group">
                        <div class="btn btn-light ">
                          <input class="" type="checkbox" name="" value="" id="checkAll">
                        </div>
                        <a href="#" class="btn btn-light  text-danger abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Reprovar aluno" data-confirm="Tem certeza que deseja reprovar estes aluno?" name="reprova">
                          <i class="material-icons sm-18">
                            cancel
                          </i>
                        </a>
                        <a href="#" class="btn btn-light text-success abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Aprovar aluno" data-confirm="Tem certeza que deseja aprovar estes aluno?" name="aprova">
                          <i class="material-icons sm-18">
                            check
                          </i>
                        </a>
                      </div>
                    </p>
                    <table id="tableAcao" class="table table-bordered table-condensed ">
                      <thead class="bg-light">
                        <tr class="text-center">
                          <th><a>#</a></th>
                          <th class="tr-max"><a>Nome</a></th>
                          <th class="tr-max"><a>Curso</a></th>
                          <th class=""><a>Situação</a></th>
                          <th class="actions actions-90">
                            <div class="btn-group btn-group-sm text-right" role="group">
                              <div class="btn btn-light ">
                                <input class="" type="checkbox" name="" value="" id="checkAll">
                              </div>
                              <a href="#" class="btn btn-light  text-danger abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Reprovar aluno" data-confirm="Tem certeza que deseja reprovar estes aluno?" name="reprova">
                                <i class="material-icons sm-18">
                                  cancel
                                </i>
                              </a>
                              <a href="#" class="btn btn-light text-success abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Aprovar aluno" data-confirm="Tem certeza que deseja aprovar estes aluno?" name="aprova">
                                <i class="material-icons sm-18">
                                  check
                                </i>
                              </a>
                            </div>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="reprovados linha" style="display: none;">
                          <th class="text-center">
                            <a href="#" data-toggle="modal" data-target="#modal3" title="Detalhes" data-confirm="">
                              <i class="material-icons sm-18">
                                add
                              </i>
                            </a>
                          </th>
                          <td class="tr-max td01">fulano</td>
                          <td class="tr-max text-center">Curso de PHP</td>
                          <td class=" text-center"><label class="badge badge-pill text-wrap badge-danger">REPROVADO</label></td>


                          <td class="actions text-light text-center">

                            <div class="btn-group" role="group">
                              <div class="container-fluid ">
                                <input class="checkAll" type="checkbox" name="check[]" value="3">
                              </div>

                            </div>


                          </td>

                        </tr>




                        <tr class="reprovados linha" style="display: none;">
                          <th class="text-center">
                            <a href="#" data-toggle="modal" data-target="#modal7" title="Detalhes" data-confirm="">
                              <i class="material-icons sm-18">
                                add
                              </i>
                            </a>
                          </th>
                          <td class="tr-max td01">Sicrano</td>
                          <td class="tr-max text-center">Curso de PHP</td>
                          <td class=" text-center"><label class="badge badge-pill text-wrap badge-danger">REPROVADO</label></td>


                          <td class="actions text-light text-center">

                            <div class="btn-group" role="group">
                              <div class="container-fluid ">
                                <input class="checkAll" type="checkbox" name="check[]" value="7">
                              </div>

                            </div>


                          </td>

                        </tr>




                        <tr class="reprovados linha" style="display: none;">
                          <th class="text-center">
                            <a href="#" data-toggle="modal" data-target="#modal11" title="Detalhes" data-confirm="">
                              <i class="material-icons sm-18">
                                add
                              </i>
                            </a>
                          </th>
                          <td class="tr-max td01">Klebson</td>
                          <td class="tr-max text-center">Curso de PHP</td>
                          <td class=" text-center"><label class="badge badge-pill text-wrap badge-danger">REPROVADO</label></td>


                          <td class="actions text-light text-center">

                            <div class="btn-group" role="group">
                              <div class="container-fluid ">
                                <input class="checkAll" type="checkbox" name="check[]" value="11">
                              </div>

                            </div>


                          </td>

                        </tr>




                        <tr class="reprovados linha" style="display: none;">
                          <th class="text-center">
                            <a href="#" data-toggle="modal" data-target="#modal4" title="Detalhes" data-confirm="">
                              <i class="material-icons sm-18">
                                add
                              </i>
                            </a>
                          </th>
                          <td class="tr-max td01">fulano</td>
                          <td class="tr-max text-center">Curso de HTML</td>
                          <td class=" text-center"><label class="badge badge-pill text-wrap badge-danger">REPROVADO</label></td>


                          <td class="actions text-light text-center">

                            <div class="btn-group" role="group">
                              <div class="container-fluid ">
                                <input class="checkAll" type="checkbox" name="check[]" value="4">
                              </div>

                            </div>


                          </td>

                        </tr>




                        <tr class="assinados linha" style="display: none;">
                          <th class="text-center">
                            <a href="#" data-toggle="modal" data-target="#modal12" title="Detalhes" data-confirm="">
                              <i class="material-icons sm-18">
                                add
                              </i>
                            </a>
                          </th>
                          <td class="tr-max td01">Klebson</td>
                          <td class="tr-max text-center">Curso de HTML</td>
                          <td class=" text-center"><label class="badge badge-pill text-wrap badge-warning">ASSINADO</label></td>


                          <td class="actions text-light text-center">

                            <div class="btn-group" role="group">
                              <div class="container-fluid ">
                                <input class="checkAll" type="checkbox" name="check[]" value="12">
                              </div>

                            </div>


                          </td>

                        </tr>




                        <tr class="aprovados linha">
                          <th class="text-center">
                            <a href="#" data-toggle="modal" data-target="#modal5" title="Detalhes" data-confirm="">
                              <i class="material-icons sm-18">
                                add
                              </i>
                            </a>
                          </th>
                          <td class="tr-max td01">fulano</td>
                          <td class="tr-max text-center">Curso de Inglês</td>
                          <td class=" text-center"><label class="badge badge-pill text-wrap badge-success">APROVADO</label></td>


                          <td class="actions text-light text-center">

                            <div class="btn-group" role="group">
                              <div class="container-fluid ">
                                <input class="checkAll" type="checkbox" name="check[]" value="5">
                              </div>

                            </div>


                          </td>

                        </tr>




                        <tr class="aprovados linha">
                          <th class="text-center">
                            <a href="#" data-toggle="modal" data-target="#modal8" title="Detalhes" data-confirm="">
                              <i class="material-icons sm-18">
                                add
                              </i>
                            </a>
                          </th>
                          <td class="tr-max td01">Sicrano</td>
                          <td class="tr-max text-center">Curso de Inglês</td>
                          <td class=" text-center"><label class="badge badge-pill text-wrap badge-success">APROVADO</label></td>


                          <td class="actions text-light text-center">

                            <div class="btn-group" role="group">
                              <div class="container-fluid ">
                                <input class="checkAll" type="checkbox" name="check[]" value="8">
                              </div>

                            </div>


                          </td>

                        </tr>


                      </tbody>
                    </table>

                    <p></p>

                    <p>
                      Além disso, há um formulário de busca, para filtrar as Participantes e permitir que o
                      usuário possa localizar a Pessoa desejada com mais facilidade.
                    </p>

                  </div>


                  <!--Divisória de conteúdo modal-->
                  <div id="m15" class="modalAjuda collapse">



                    <p>A Adição de Participantes é realizada pelo próprio participante no caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-briefcase"></i>  Registrar-se 


                      <p>
                        A tela Registrar-se serve para o Coordenador do projeto cadastrar uma pessoa nova ao projeto.
                        A princípio, as informAtividades a serem cadastradas são:

                      </p>
                      <div class="jumbotron box box-success">


                        <script type="text/javascript">
                          $(document).ready(function() {
                            $('#alert').addClass('alert-danger');
                          });
                        </script>


                        <div class="box-header">
                          <h3 class="box-title">Registro</h3>
                        </div>
                        <div class="box-body">
                          <form action="funcoes/regist_user.php" method="POST">
                            <div class="form-row">
                              <div class="col-md-4 mb-3">
                                <label for="validationServer01">Nome completo</label>
                                <input type="text" class="form-control info is-invalid" id="validationServer01" placeholder="Digite seu nome" name="nome_usuario" required="">
                                <div class="invalid-feedback">
                                  Digite seu nome
                                </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="validationServer02">CPF</label>
                                <input type="number" class="form-control info is-invalid" id="validationServer02" placeholder="Digite seu CPF" name="cpf_usuario" required="">
                                <div class="invalid-feedback">
                                  Digite seu CPF
                                </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="validationServer02">Tipo de usuário</label>
                                <select class="form-control info is-invalid" name="fk_papel_id_papel">
                                  <option value=""></option>
                                  <option value="1">Responsável</option>
                                  <option value="2">Participante</option>

                                </select>
                                <div class="invalid-feedback">
                                  Digite seu tipo de usuário
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="validationServerUsername">E-mail</label>


                                <input type="email" class="form-control info is-invalid" id="validationServerUsername" placeholder="E-mail" aria-describedby="inputGroupPrepend3" required="" name="email_usuario">
                                <div class="invalid-feedback">
                                  Digite seu e-mail
                                </div>

                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="validationServer02">Telefone</label>
                                <input type="number" class="form-control info is-invalid" id="validationServer02" placeholder="Digite seu telefone" value="" required="" name="tel_usuario">
                                <div class="invalid-feedback">
                                  Digite seu e-mail telefone

                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="col-md-6 mb-3">
                                <label for="validationServer03">Login</label>
                                <input type="text" class="form-control info is-invalid" id="validationServer03" placeholder="Login" required="" name="login">
                                <div class="invalid-feedback">
                                  Escolha um login.
                                </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                <label for="validationServer03">Senha</label>
                                <input type="password" class="form-control info is-invalid" id="validationServer03" placeholder="Senha" required="" name="senha">
                                <div class="invalid-feedback">
                                  Escolha uma senha
                                </div>
                              </div>


                            </div>



                            <button class="btn btn-success" type="submit">Registrar</button>

                          </form>
                        </div>
                      </div>
                      <p>
                        Após o preenchimento das informAtividades acima, é necessário clicar no botão
                        <button class="btn btn-success" type="submit">Registrar</button>.
                      </p>




                    </div>

                    <!--Divisória de conteúdo modal-->
                    <div id="m16" class="modalAjuda collapse">

                      <p>
                        <input class="" type="checkbox" name="" value="" id="checkAll"> - Checkbox que marca todos os itens.
                        <br>
                        <a href="" class="text-danger abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Excluir atividade" data-confirm="Tem certeza que deseja excluir essa atividade?" name="apagar">
                          <i class="material-icons sm-18">
                            delete
                          </i>
                        </a> - Botão Excluir Atividade, que apaga os itens selecionados.
                        <br>
                        <a href="" class="text-success abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Emitir certificados" data-confirm="Tem certeza que deseja emitir os certificados?" name="emitir">
                          <i class="material-icons sm-18">
                            check_circle_outline
                          </i>
                        </a> - Botão Emitir Certificado, que emite os certificados assinados.
                      </p>


                      <div class="jumbotron box box-success">
                        <!-- Body alterável: -->
                        <div>

                          <script type="text/javascript">
                            $(document).ready(function() {
                              $('#alert').addClass('alert-danger');
                            });
                          </script>

                          <h4>Área do participante</h4>
                          Bem vindo <strong>fulano</strong>               <p>Veja aqui a sua lista de atividades e suas situações.</p>

                          <div class="form-row align-items-center">
                            <div class="col-auto col-lg-3">

                              <div class="input-group mb-2 ">
                                <div class="input-group-prepend">
                                  <div class="input-group-text bg-success text-light">
                                    <i class="material-icons ">
                                      search
                                    </i>
                                  </div>
                                </div>
                                <input type="text" class="form-control form-control-lg" id="filtrar-tabela" placeholder="Digite um termo para a busca">
                                <label class="sr-only" for="filtrar-tabela"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="table-responsive-lg">

                          <ul class="nav nav-tabs">

                            <li class="nav-item" id="aprovados">
                              <a class="nav-link" href="#">Aprovados <span class="badge badge-pill badge-success">0</span></a>
                            </li>
                            <li class="nav-item active" id="reprovados">
                              <a class="nav-link" href="#">Reprovados <span class="badge badge-pill badge-success">2</span></a>
                            </li>
                            <li class="nav-item" id="emitidos">
                              <a class="nav-link" href="#">Emitidos/Assinados <span class="badge badge-pill badge-success">2</span></a>
                            </li>
                            <li class="nav-item" id="correcao">
                              <a class="nav-link" href="#">Correção <span class="badge badge-pill badge-success">0</span></a>
                            </li>
                            <li class="nav-item" id="cancelados">
                              <a class="nav-link " href="#">Cancelados <span class="badge badge-pill badge-success">0</span></a>
                            </li>
                            <li class="nav-item" id="todos">
                              <a class="nav-link " href="#">Todos <span class="badge badge-pill badge-success">5</span></a>
                            </li>
                          </ul>

                          <form method="post" action="funcoes/participante_acoes.php">

                            <div class="modal fade" id="modal_acoes" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white title"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                  </div>
                                  <div class="modal-body" id="modal-body">

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                                    <button type="submit" class="btn btn-success dataComfirmOK" name="">Sim</button>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="collapse" id="mais-3">
                              <div class="card card-body">
                                <a data-toggle="collapse" href="#mais-3" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-danger text-right" title="Fechar">

                                  <i class="material-icons sm-18 ">
                                    close
                                  </i>

                                </a>
                                <p><strong>Descrição: </strong>Curso online de PHP gr�tis</p> 
                                <p><strong>Local: </strong>Online</p>
                                <p><strong>Data inicial: </strong>2019-11-21</p>

                                <p><strong>Data final: </strong>2019-12-21</p>
                                

                              </div>
                            </div><div class="collapse" id="mais-4">
                              <div class="card card-body">
                                <a data-toggle="collapse" href="#mais-4" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-danger text-right" title="Fechar">

                                  <i class="material-icons sm-18 ">
                                    close
                                  </i>

                                </a>
                                <p><strong>Descrição: </strong>Curso online de HTML gr�tis</p> 
                                <p><strong>Local: </strong>Online</p>
                                <p><strong>Data inicial: </strong>2019-11-21</p>

                                <p><strong>Data final: </strong>2019-11-20</p>
                                

                              </div>
                            </div><div class="collapse" id="mais-5">
                              <div class="card card-body">
                                <a data-toggle="collapse" href="#mais-5" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-danger text-right" title="Fechar">

                                  <i class="material-icons sm-18 ">
                                    close
                                  </i>

                                </a>
                                <p><strong>Descrição: </strong></p> 
                                <p><strong>Local: </strong>Online</p>
                                <p><strong>Data inicial: </strong>2019-11-22</p>

                                <p><strong>Data final: </strong>2019-11-22</p>
                                

                              </div>
                            </div><div class="collapse" id="mais-6">
                              <div class="card card-body">
                                <a data-toggle="collapse" href="#mais-6" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-danger text-right" title="Fechar">

                                  <i class="material-icons sm-18 ">
                                    close
                                  </i>

                                </a>
                                <p><strong>Descrição: </strong></p> 
                                <p><strong>Local: </strong>Online</p>
                                <p><strong>Data inicial: </strong>2019-11-22</p>

                                <p><strong>Data final: </strong>2019-11-22</p>
                                

                              </div>
                            </div><div class="collapse" id="mais-9">
                              <div class="card card-body">
                                <a data-toggle="collapse" href="#mais-9" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-danger text-right" title="Fechar">

                                  <i class="material-icons sm-18 ">
                                    close
                                  </i>

                                </a>

                              </div>
                            </div><table id="tableAcao" class="table table-bordered table-condensed ">
                              <thead class="bg-light ">
                                <tr class="text-center">
                                  <th class="tr-max"><a>#</a></th>
                                  <th><a>Atividade</a></th>
                                  <th class="tr-max"><a>Carga horária</a></th>
                                  <th><a>Situação</a></th>
                                  <th class="actions actions-90">
                                    <div class="btn-group" role="group">
                                      <div class="container-fluid">


                                        <input class="" type="checkbox" name="" value="" id="checkAll">

                                      </div>


                                      <a href="" class="text-danger abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Excluir atividade" data-confirm="Tem certeza que deseja excluir essa atividade?" name="apagar">
                                        <i class="material-icons sm-18">
                                          delete
                                        </i>
                                      </a>
                                      <a href="" class="text-success container-fluid abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Emitir certificados" data-confirm="Tem certeza que deseja emitir os certificados?" name="emitir">
                                        <i class="material-icons sm-18">
                                          check_circle_outline
                                        </i>
                                      </a>
                                    </div>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>

                                <tr class="reprovados linha" style="">
                                  <th class="tr-max text-center text-light">
                                    <a data-toggle="collapse" href="#mais-3" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-success" title="Visualizar atividade">
                                      <i class="material-icons sm-18">
                                        add
                                      </i>
                                    </a>
                                  </th>
                                  <td>Curso de PHP</td>
                                  <td class="tr-max text-center">20h</td>
                                  <td class=" text-center"><label class="badge badge-pill text-wrap badge-danger">REPROVADO</label></td>



                                  <td class="actions text-light text-center">
                                    <div class="btn-group" role="group">
                                      <div class="container-fluid ">
                                        <input class="checkAll" type="checkbox" name="check[]" value="3">
                                      </div>


                                    </div>
                                  </td>

                                </tr>




                                <tr class="reprovados linha" style="">
                                  <th class="tr-max text-center text-light">
                                    <a data-toggle="collapse" href="#mais-4" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-success" title="Visualizar atividade">
                                      <i class="material-icons sm-18">
                                        add
                                      </i>
                                    </a>
                                  </th>
                                  <td>Curso de HTML</td>
                                  <td class="tr-max text-center">20h</td>
                                  <td class=" text-center"><label class="badge badge-pill text-wrap badge-danger">REPROVADO</label></td>



                                  <td class="actions text-light text-center">
                                    <div class="btn-group" role="group">
                                      <div class="container-fluid ">
                                        <input class="checkAll" type="checkbox" name="check[]" value="4">
                                      </div>


                                    </div>
                                  </td>

                                </tr>




                                <tr class="emitidos linha" style="display: none;">
                                  <th class="tr-max text-center text-light">
                                    <a data-toggle="collapse" href="#mais-5" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-success" title="Visualizar atividade">
                                      <i class="material-icons sm-18">
                                        add
                                      </i>
                                    </a>
                                  </th>
                                  <td>Curso de Inglês</td>
                                  <td class="tr-max text-center">40h</td>
                                  <td class=" text-center"><label class="badge badge-pill text-wrap badge-success">EMITIDO</label></td>



                                  <td class="actions text-light text-center">
                                    <div class="btn-group" role="group">
                                      <div class="container-fluid ">
                                        <input class="" type="checkbox" name="check[]" value="5">
                                      </div>


                                    </div>
                                  </td>

                                </tr>




                                <tr class="emitidos linha" style="display: none;">
                                  <th class="tr-max text-center text-light">
                                    <a data-toggle="collapse" href="#mais-6" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-success" title="Visualizar atividade">
                                      <i class="material-icons sm-18">
                                        add
                                      </i>
                                    </a>
                                  </th>
                                  <td>Curso de Matemática</td>
                                  <td class="tr-max text-center">40h</td>
                                  <td class=" text-center"><label class="badge badge-pill text-wrap badge-success">EMITIDO</label></td>



                                  <td class="actions text-light text-center">
                                    <div class="btn-group" role="group">
                                      <div class="container-fluid ">
                                        <input class="" type="checkbox" name="check[]" value="6">
                                      </div>

                                    </div>
                                  </td>

                                </tr>




                                <tr class="todos linha" style="display: none;">
                                  <th class="tr-max text-center text-light">
                                    <a data-toggle="collapse" href="#mais-9" role="button" aria-expanded="false" aria-controls="collapseExample" class="text-success" title="Visualizar atividade">
                                      <i class="material-icons sm-18">
                                        add
                                      </i>
                                    </a>
                                  </th>
                                  <td>Curso de Manicure</td>
                                  <td class="tr-max text-center">10h</td>
                                  <td class=" text-center"><label class="badge badge-pill text-wrap badge-primary">AGUARDANDO</label></td>



                                  <td class="actions text-light text-center">
                                    <div class="btn-group" role="group">
                                      <div class="container-fluid ">
                                        <input class="" type="checkbox" name="check[]" value="9">
                                      </div>


                                    </div>
                                  </td>

                                </tr>






                              </tbody>
                            </table>
                          </form>

                        </div>




                        <!-- Body alterável: -->
                      </div>
                    </div>

                    <!--Divisória de conteúdo modal-->
                    <div id="m17" class="modalAjuda collapse">


                      <p>

                        <a href="" class="text-primary abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Excluir atividade" data-confirm="Tem certeza que deseja excluir essa atividade?" name="apagar">
                          <i class="material-icons sm-18">
                            print
                          </i>
                        </a> - Botão Imprimir Certificado, que permite imprimir certificados emitidos.

                      </p>


                      <div class="jumbotron box box-success">
                        <!-- Body alterável: -->
                        <div>

                          <script type="text/javascript">
                            $(document).ready(function() {
                              $('#alert').addClass('alert-danger');
                            });
                          </script>

                          <h4>Meus certificados</h4>
                          Bem vindo <strong>joao</strong>               <p>Veja aqui a sua lista de certificados.</p>

                          <div class="form-row align-items-center">
                            <div class="col-auto col-lg-3">

                              <div class="input-group mb-2 ">
                                <div class="input-group-prepend">
                                  <div class="input-group-text bg-success text-light">
                                    <i class="material-icons ">
                                      search
                                    </i>
                                  </div>
                                </div>
                                <input type="text" class="form-control form-control-lg" id="filtrar-tabela" placeholder="Digite um termo para a busca">
                                <label class="sr-only" for="filtrar-tabela"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="table-responsive-lg">



                          <form method="post" action="funcoes/participante_acoes.php">

                            <div class="modal fade" id="modal_acoes" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white title"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                  </div>
                                  <div class="modal-body" id="modal-body">

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                                    <button type="submit" class="btn btn-success dataComfirmOK" name="">Sim</button>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <table id="tableAcao" class="table table-bordered table-condensed ">
                              <thead class="bg-light ">
                                <tr class="text-center">
                                  <th class="tr-max"><a>Chave de validação</a></th>
                                  <th><a>Atividade</a></th>
                                  <th class="tr-max"><a>Carga horária</a></th>
                                  <th><a>Situação</a></th>
                                  <th class="actions actions-90">Imprimir</th>
                                </tr>
                              </thead>
                              <tbody>

                                <tr>
                                  <th class="tr-max text-center">
                                  117lb4q1y6a </th>
                                  <td class=" text-center">Curso de Inglês</td>
                                  <td class="tr-max text-center">40h</td>
                                  <td class=" text-center">

                                    <label class="badge badge-success badge-pill text-wrap">Emitido</label>



                                  </td>
                                  <td class="actions text-light text-center">
                                    <div class="btn-group" role="group">
                                      <a href="funcoes/emitir_certificado.php?id=117lb4q1y6a" class="text-primary container-fluid abrir_modal" data-toggle="modal" data-target="#modal" title="Imprimir certificados" data-confirm="Tem certeza que deseja emitir os certificados?">
                                        <i class="material-icons sm-18">
                                          print
                                        </i>
                                      </a>
                                    </div>
                                  </td>

                                </tr>





                              </tbody>
                            </table>
                          </form>

                        </div>




                        <!-- Body alterável: -->
                      </div>

                    </div>

                    <!--Divisória de conteúdo modal-->
                    <div id="m18" class="modalAjuda collapse">

                      <p>
                        <input class="" type="checkbox" name="" value="" id="checkAll"> - Checkbox que marca todos os itens.
                        <br>
                        <a href="#" class="btn btn-light  text-danger abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Reprovar aluno" data-confirm="Tem certeza que deseja reprovar estes aluno?" name="reprova">
                          <i class="material-icons sm-18">
                            cancel
                          </i>
                        </a> - Botão Reprovar Aluno, que reprova os alunos selecionados.
                        <br>
                        <a href="" class="text-success abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Emitir certificados" data-confirm="Tem certeza que deseja emitir os certificados?" name="emitir">
                          <i class="material-icons sm-18">
                            check
                          </i>
                        </a> - Botão Aprovar Aluno, que aprova os alunos selecionados.
                      </p>

                      <div class="jumbotron box box-success">
                        <!-- Body alterável: -->
                        <div>




                          <script type="text/javascript">
                            $(document).ready(function() {
                              $('#alert').addClass('alert-success');
                            });
                          </script>

                          <h4>Área do Responsável</h4>
                          Bem vindo <strong>fernando</strong>               
                          <p>Veja aqui a sua lista de participantes e suas situações.</p>

                          <div class="form-row align-items-center">
                            <div class="col-auto col-lg-3">

                              <div class="input-group mb-2 ">
                                <div class="input-group-prepend">
                                  <div class="input-group-text bg-success text-light">
                                    <i class="material-icons ">
                                      search
                                    </i>
                                  </div>
                                </div>
                                <input type="text" class="form-control form-control-lg" id="filtrar-tabela" placeholder="Digite um termo para a busca">
                                <label class="sr-only" for="filtrar-tabela"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="table-responsive-lg">


                          <ul class="nav nav-tabs ">

                            <li class="nav-item " id="aprovados">
                              <a class="nav-link active" href="#">Aprovados <span class="badge badge-pill badge-success">1</span></a>
                            </li>
                            <li class="nav-item" id="reprovados">
                              <a class="nav-link" href="#">Reprovados <span class="badge badge-pill badge-success">0</span></a>
                            </li>
                            <li class="nav-item" id="emitidos">
                              <a class="nav-link" href="#">Emitidos/Assinados <span class="badge badge-pill badge-success">0</span></a>
                            </li>
                            <li class="nav-item" id="correcao">
                              <a class="nav-link" href="#">Correção <span class="badge badge-pill badge-success">0</span></a>
                            </li>
                            <li class="nav-item" id="cancelados">
                              <a class="nav-link " href="#">Cancelados <span class="badge badge-pill badge-success">0</span></a>
                            </li>
                            <li class="nav-item" id="todos">
                              <a class="nav-link  " href="#">Todos <span class="badge badge-pill badge-success">1</span></a>
                            </li>
                          </ul>
                          <form method="post" action="funcoes/check_aprova_reprova.php">

                            <div class="modal fade" id="modal_acoes" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white title"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                  </div>
                                  <div class="modal-body" id="modal-body">

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                                    <button type="submit" class="btn btn-success dataComfirmOK" name="">Sim</button>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="title" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white title"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">×</span>
                                    </button>
                                  </div>
                                  <div class="modal-body" id="modal-body">
                                    <p><strong>Nome: </strong>Klebson</p> 
                                    <p><strong>Login: </strong>klebson</p>
                                    <p><strong>CPF: </strong>12345678901</p>


                                    <p><strong>Telefone: </strong>98765432</p>
                                    <p><strong>E-mail: </strong>klebson@klebson.com</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>


                                  </div>
                                </div>
                              </div>
                            </div><table id="tableAcao" class="table table-bordered table-condensed ">
                              <thead class="bg-light">
                                <tr class="text-center">
                                  <th><a>#</a></th>
                                  <th class="tr-max"><a>Nome</a></th>
                                  <th class="tr-max"><a>Curso</a></th>
                                  <th class=""><a>Situação</a></th>
                                  <th class="actions actions-90">
                                    <div class="btn-group btn-group-sm text-right" role="group">
                                      <div class="btn btn-light ">
                                        <input class="" type="checkbox" name="" value="" id="checkAll">
                                      </div>
                                      <a href="#" class="btn btn-light  text-danger abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Reprovar aluno" data-confirm="Tem certeza que deseja reprovar estes aluno?" name="reprova">
                                        <i class="material-icons sm-18">
                                          cancel
                                        </i>
                                      </a>
                                      <a href="#" class="btn btn-light text-success abrir_modal" data-toggle="modal" data-target="#modal_acoes" title="Aprovar aluno" data-confirm="Tem certeza que deseja aprovar estes aluno?" name="aprova">
                                        <i class="material-icons sm-18">
                                          check
                                        </i>
                                      </a>
                                    </div>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr class="aprovados linha">
                                  <th class="text-center">
                                    <a href="#" data-toggle="modal" data-target="#modal10" title="Detalhes" data-confirm="">
                                      <i class="material-icons sm-18">
                                        add
                                      </i>
                                    </a>
                                  </th>
                                  <td class="tr-max td01">Klebson</td>
                                  <td class="tr-max text-center">Curso de Trânsito</td>
                                  <td class=" text-center"><label class="badge badge-pill text-wrap badge-success">APROVADO</label></td>


                                  <td class="actions text-light text-center">

                                    <div class="btn-group" role="group">
                                      <div class="container-fluid ">
                                        <input class="checkAll" type="checkbox" name="check[]" value="10">
                                      </div>

                                    </div>


                                  </td>

                                </tr>





                              </tbody>
                            </table>
                          </form>


                        </div>




                        <!-- Body alterável: -->
                      </div>


                    </div>






                    <!--Divisória de conteúdo modal-->
                    <div id="m22" class="modalAjuda collapse">

                      <p>
                        O Usuário sem precisar estar logado, pode digitar o código de validação do certificado, e clicar em 
                        <button type="submit" class=" btn btn-sm btn-success">
                          <i class="material-icons">
                            check
                          </i>
                        </button>, se existente, o certificado será baixado em seguida.
                      </p>

                      <div class="col-lg-12">
                        <div class="jumbotron box box-success">
                          <!-- Body alterável: -->

                          <script type="text/javascript">
                            $(document).ready(function() {
                              $('#alert').addClass('alert-danger');
                            });
                          </script>


                          <div class="box-header">
                            <h3 class="box-title">

                              <i class="material-icons">
                                print
                              </i>
                              Buscar Certificados
                            </h3>
                          </div>
                          <div class="box-body">

                            <form method="get" action="funcoes/emitir_certificado.php">
                              <label>Digite o código para validação:</label>


                              <div class="input-group">

                                <button type="submit" class="input-group-prepend btn btn-sm btn-success">
                                  <i class="material-icons">
                                    check
                                  </i>

                                </button>


                                <input type="text" class="form-control" placeholder="Digite o código para validação" name="id">

                              </div>




                            </form>

                          </div>

                          <!-- Body alterável: -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>




