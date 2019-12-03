<!--Divisória de conteúdo modal Brenda-->
<div id="m1" class="modalAjuda collapse">

 <p>Formas de obter acesso ao sistema:
 </p><ul>
   <li>
     <strong>Participante</strong>: Precisa de acesso ao sistema.
     Para realizar a emissão de seus certificados na área pública, clique <a href="emitir.php" alt="AQUI" title="AQUI">AQUI</a>
   </li>
   <li>
     <strong>Diretor</strong> : Solicitar que a administração responsável pela Atividade cadastre-a no sistema e vincule-o como diretor.
     O acesso será concedido de forma automática;
   </li>
   <li>
     <strong>Administrador</strong>: Cadastra Participantes no sistema;
   </li>
   
   <li>
     <strong>Responsável</strong>: O acesso é concedido automaticamente conforme função e substituição cadastradas no SGP.
   </li>

 </ul>

 <p></p>



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
        <th class="tr-max text-center">2</th>
        <td class="td01">Curso de PHP</td>
        <td class="tr-max text-center">20h</td>
        <td class="text-center">
          <label class="badge badge-success text-wrap">OCORRENDO</label>          </td>


          <td class="actions text-light text-center">
            <div class="btn-group" role="group">

              <a href="#" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Pausar atividade" data-confirm="Tem certeza que deseja pausar a atividade?">
                <i class="material-icons sm-18">
                  pause
                </i>
              </a>
              <a href="#" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Iniciar atividade" data-confirm="Tem certeza que deseja iniciar a atividade?">
                <i class="material-icons sm-18">
                  play_arrow
                </i>
              </a>
            </div>
          </td>
        </tr>
        <tr class="ativas linha">
          <th class="tr-max text-center">3</th>
          <td class="td01">Curso de HTML</td>
          <td class="tr-max text-center">20h</td>
          <td class="text-center">
            <label class="badge badge-success text-wrap">OCORRENDO</label>          </td>


            <td class="actions text-light text-center">
              <div class="btn-group" role="group">

                <a href="#" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Pausar atividade" data-confirm="Tem certeza que deseja pausar a atividade?">
                  <i class="material-icons sm-18">
                    pause
                  </i>
                </a>
                <a href="#" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Iniciar atividade" data-confirm="Tem certeza que deseja iniciar a atividade?">
                  <i class="material-icons sm-18">
                    play_arrow
                  </i>
                </a>
              </div>
            </td>
          </tr>
          <tr class="ativas linha">
            <th class="tr-max text-center">4</th>
            <td class="td01">Curso de Inglês</td>
            <td class="tr-max text-center">40h</td>
            <td class="text-center">
              <label class="badge badge-success text-wrap">OCORRENDO</label>          </td>


              <td class="actions text-light text-center">
                <div class="btn-group" role="group">

                  <a href="#" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Pausar atividade" data-confirm="Tem certeza que deseja pausar a atividade?">
                    <i class="material-icons sm-18">
                      pause
                    </i>
                  </a>
                  <a href="#" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Iniciar atividade" data-confirm="Tem certeza que deseja iniciar a atividade?">
                    <i class="material-icons sm-18">
                      play_arrow
                    </i>
                  </a>
                </div>
              </td>
            </tr>
            <tr class="ativas linha">
              <th class="tr-max text-center">5</th>
              <td class="td01">Curso de Matemática</td>
              <td class="tr-max text-center">40h</td>
              <td class="text-center">
                <label class="badge badge-success text-wrap">OCORRENDO</label>          </td>


                <td class="actions text-light text-center">
                  <div class="btn-group" role="group">

                    <a href="funcoes/apagar_atividade.php?id=5" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Pausar atividade" data-confirm="Tem certeza que deseja pausar a atividade?">
                      <i class="material-icons sm-18">
                        pause
                      </i>
                    </a>
                    <a href="funcoes/iniciar_atividade.php?id=5" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Iniciar atividade" data-confirm="Tem certeza que deseja iniciar a atividade?">
                      <i class="material-icons sm-18">
                        play_arrow
                      </i>
                    </a>
                  </div>
                </td>
              </tr>
              <tr class="ativas linha">
                <th class="tr-max text-center">9</th>
                <td class="td01">Curso de nada</td>
                <td class="tr-max text-center">60h</td>
                <td class="text-center">
                  <label class="badge badge-primary text-wrap">AGUARDANDO</label>         </td>


                  <td class="actions text-light text-center">
                    <div class="btn-group" role="group">

                      <a href="#" class="btn btn-danger btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Pausar atividade" data-confirm="Tem certeza que deseja pausar a atividade?">
                        <i class="material-icons sm-18">
                          pause
                        </i>
                      </a>
                      <a href="#" class="btn btn-success btn-sm abrir_modal" data-toggle="modal" data-target="#modal" title="Iniciar atividade" data-confirm="Tem certeza que deseja iniciar a atividade?">
                        <i class="material-icons sm-18">
                          play_arrow
                        </i>
                      </a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

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





                </div>


                <!--Divisória de conteúdo modal-->
                <div id="m6" class="modalAjuda collapse">



                </div>



                <!--Divisória de conteúdo modal-->
                <div id="m7" class="modalAjuda collapse">



                </div>



                <!--Divisória de conteúdo modal-->
                <div id="m8" class="modalAjuda collapse">



                </div>

                <!--Divisória de conteúdo modal-->
                <div id="m9" class="modalAjuda collapse">




                </div>

                <!--Divisória de conteúdo modal-->
                <div id="m10" class="modalAjuda collapse">




                </div>

                <!--Divisória de conteúdo modal-->
                <div id="m11" class="modalAjuda collapse">





                </div>
                <!--Divisória de conteúdo modal-->
                <div id="m12" class="modalAjuda collapse">




                </div>

                <!--Divisória de conteúdo modal-->
                <div id="m13" class="modalAjuda collapse">




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



                      <p>A Edição de Participantes encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-user"></i>  Participantes &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i> Editar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela para Editar Participantes serve para edição dos dados de projeto.
                      Em relAtividade à edição dos dados, apenas a DIAEX tem permissão para editar informAtividades da pessoa.
                    </p>
                    <p>
                      As informAtividades das Participantes a serem editadas são:
                    </p>
                    <ul>
                      <li><b>Nome;</b></li>
                      <li>País;</li>
                      <li><b>Telefone;</b></li>
                      <li><b>E-mail;</b></li>
                      <li>CPF;</li>
                      <li>Passaporte (Documento);</li>
                    </ul>
                    <p><strong>*</strong> Os itens em negrito são obrigatórios</p>
                    <p>
                      No modo de edição, após o preenchimento das informAtividades acima, é necessário clicar no botão
                      <button type="button" class="btn btn-success">Salvar</button>.
                    </p>
                    <p>
                      No modo de visualizAtividade, há a opção de apagar a pessoa, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Apagar</button> e depois confirmar.
                    </p>



<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m18" class="modalAjuda collapse">



  <p>A Listagem de Funções encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-cogs"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-users"></i> Funções</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela de Listagem de Funções serve para listar todas as Funções disponíveis.
                    </p>

                    <p>
                      Na tela de Listagem de Funções, é apresentada uma lista com Funções disponíveis,
                      onde para cada um, há as opções para Visualizar
                      <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                        <i title="Visualizar" class="fa fa-search"></i>
                      </a>,
                      Editar
                      <a class="btn btn-warning btn-xs">
                        <i title="Editar Curso" class="fa fa-pencil"></i>
                      </a>
                      e Remover Função
                      <a class="btn btn-danger btn-xs">
                        <i title="Remover Curso" class="fa fa-trash"></i>
                      </a>.
                    </p>
                    <table id="tableFuncao" class="table table-striped table-hover table-bordered table-condensed">
                      <thead>
                        <tr>
                          <th><a>Descrição</a></th>
                          <th class="actions" style="width: 120px">Atividades</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Colaborador(a)</td>

                          <td class="actions">
                            <div class="btn-group col-md-12" role="group">
                              <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                                <i data-toggle="tooltip" data-placement="top" title="Visualizar" class="fa fa-search"></i>
                              </a>
                              <a class="btn btn-warning btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Editar Curso" class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Remover Curso" class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Ministrante</td>
                          <td class="actions">
                            <div class="btn-group col-md-12" role="group">
                              <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                                <i data-toggle="tooltip" data-placement="top" title="Visualizar" class="fa fa-search"></i>
                              </a>
                              <a class="btn btn-warning btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Editar Curso" class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Remover Curso" class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Voluntário(a)</td>
                          <td class="actions">
                            <div class="btn-group col-md-12" role="group">
                              <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                                <i data-toggle="tooltip" data-placement="top" title="Visualizar" class="fa fa-search"></i>
                              </a>
                              <a class="btn btn-warning btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Editar Curso" class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Remover Curso" class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
<!--
</div>
</div>
-->
</div>


<!--Divisória de conteúdo modal-->
<div id="m19" class="modalAjuda collapse">



  <p>A Adição de Participantes encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-briefcase"></i>  Projetos &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i>  Editar &gt; <i aria-hidden="true" class="glyphicon glyphicon-file"></i> Certificado &gt; <i aria-hidden="true" class="glyphicon glyphicon-plus"></i> Adicionar Pessoa</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela de Nova Pessoa serve para o Coordenador do projeto cadastrar uma pessoa nova ao projeto.
                      A princípio, as informAtividades a serem cadastradas são:

                    </p>
                    <ul>
                      <li>Nome;</li>
                      <li>País;</li>
                      <li>Telefone;</li>
                      <li>E-mail;</li>
                      <li>CPF;</li>
                      <li>Passaporte (Documento);</li>
                    </ul>
                    <p>
                      Após o preenchimento das informAtividades acima, é necessário clicar no botão
                      <button class="btn btn-success" type="button"><i class="fa fa-floppy-o"></i>  Salvar</button>.
                    </p>

                    <p>
                      No modo de adição, há a opção de cancelar a adição da pessoa, é necessário clicar no botão
                      <button type="button" class="btn btn-danger"><i class="fa fa-ban"></i> Cancelar</button>.
                    </p>



<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m20" class="modalAjuda collapse">



  <p>A VisualizAtividade de Funções encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i>  Funções &gt; <i aria-hidden="true" class="glyphicon glyphicon-search"></i> Visualizar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela para Visualizar Funções serve para visualizAtividade dos detalhes sobre a atividade selecionada.
                    </p>
                    <p>
                      As informAtividades da função a serem visualizadas são:
                    </p>
                    <ul>
                      <li>Função</li>
                      <li>Conteúdo Programático</li>
                      <li>Carga Horária</li>
                      <li>Descrição</li>
                    </ul>
                    <p>
                      Para editar a função, primeiro, é necessário clicar no botão
                      <button type="button" class="btn btn-primary "> Editar Função</button>.
                      Aparecerá uma nova janela, na qual será possível a edição dos dados da função.
                    </p>
                    <p>
                      No modo de visualizAtividade, há a opção de apagar a função, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Apagar Função</button> e depois confirmar.
                    </p>
                    <strong>* Funções vinculadas a projetos não podem ser editadas e/ou excluídas.</strong>


<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m21" class="modalAjuda collapse">



  <p>A Edição de Funções encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-cogs"></i>  ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-users"></i>  Funções &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i> Editar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela para Editar Funções serve para edição dos dados de uma função.
                      Em relAtividade à edição dos dados, apenas o administrador pode editá-la.
                    </p>
                    <p>
                      A informAtividade da função a ser editada é:
                    </p>
                    <ul>
                      <li><b>Função: nome de indentificAtividade da função;</b></li>
                    </ul>

                    <p>
                      No modo de edição, após o preenchimento das informAtividades acima, é necessário clicar no botão
                      <button class="btn btn-success" type="button"><i class="fa fa-floppy-o"></i>  Salvar</button>.
                    </p>
                    <p>
                      No modo de edição, há a opção de apagar a função, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Apagar</button> e depois confirmar.
                    </p>
                    <p>
                      <strong>* Funções vinculadas a Atividades não podem ser editadas e/ou excluídas.</strong>
                    </p>
                    <p>
                      <strong>** Itens em negritos são obrigatórios.</strong>
                    </p>



<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m22" class="modalAjuda collapse">




  <p>A Listagem de Certificados para AprovAtividade encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-files"></i> Certificados</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <div class="embed-responsive embed-responsive-16by9">
                      <video controls="controls"><source src="/files/../videos/ajuda/ajuda_certificados.mp4" type="video/mp4"></video></div>
                        <br><br>


                        <p>
                          A tela de Listagem de Certificados serve para listar, visualizar, aprovar, rejeitar ou enviar para ajuste
                          os Itens dos Certificados que foram enviados para aprovAtividade.
                        </p>

                        <p>
                          Os certificados podem estar em 3 situAtividades: <br>
                          <label class="label" style="background-color: #2FAB34"><i class="glyphicon glyphicon-ok"></i></label>:
                          Indica que não existe nenhum certificado pendente de aprovAtividade ou emissão <br>
                          <label class="label" style="background-color: #EA890B">Certificados Aguardando AprovAtividade</label>:
                          Indica que existem certificados aguardando aprovAtividade pela unidade responsável da Atividade <br>
                          <label class="label" style="background-color: #2FAB34">Certificados Aguardando Emissão</label>
                          Indica que existem certificados aguardando emissão pela Pró-Reitoria

                          <br><br>
                          Os Certificados são ordenados de acordo com o número de pendências. Ou seja, os Certificados que possuem
                          maior número de pendências serão exibidos em primeiro.
                        </p>

                        <p>
                          Quando esta tela é acessada por um coordenador, serão exibidas as Atividades que ele coordena. <br>
                          Quando esta tela é acessada por um Diretor, serão exibidas as Atividades em que sua unidade é responsável.
                          O sistema trará no topo da lista os  <label class="label" style="background-color: #EA890B">Certificados Aguardando AprovAtividade</label>,
                          que são os Certificados pendentes de Atividade do Diretor.<br>
                          Quando esta tela é acessada por um usuário de Pró-Reitoria, serão exibidas as Atividades referentes ao Tipo de Atividade que sua Pró-Reitoria coordena.
                        </p>

                        <p>
                          Quando o Certificado está na situAtividade  <label class="label" style="background-color: #EA890B">Certificados Aguardando AprovAtividade</label>,
                          o Diretor terá as seguintes opções: <br>
                          <a class="btn btn-xs btn-success"><i aria-hidden="true" class="glyphicon glyphicon-check"></i></a>
                          Aprovar Itens do Certificado: Aprova os Itens do Certificado e envia para a Pró-Reitoria realizar a emissão. <br>
                          <a class="btn btn-xs btn-danger"><i aria-hidden="true" class="glyphicon glyphicon-remove"></i></a>
                          Reprovar Itens do Certificado: Reprova os itens e finaliza-os. <br>
                          <a class="btn btn-xs btn-warning"><i aria-hidden="true" class="glyphicon glyphicon-pencil"></i></a>
                          Enviar Itens do Certificado para Ajuste: Devolve itens do Certificado para que o coordenador faça alterAtividades.
                        </p>
                        <p>
                          A opção de <a class="btn btn-xs btn-info"><i aria-hidden="true" class="glyphicon glyphicon-search"></i> </a> é sempre exibida.
                          Através dela poderão ser consultados os Itens do Certificado que já foram aprovados e os usuários de Pró-Reitoria
                          podem efetuar Atividades (Emitir, Reprovar, Enviar Para Ajuste, Invalidar e Reemitir).
                        </p>

                        <p>
                         É possível filtrar os Certificados através da opção
                         <a class="text-primary">
                           <i class="fa fa-filter"></i> Buscar
                         </a>. O filtro pode ser feito pelo Tipo de Certificado, pela SituAtividade, pelo Coordenador, pelo Nome da Atividade e pelo CPF do participante.


                       </p>
<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m23" class="modalAjuda collapse">




  <p>A Adição de Certificado encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-briefcase"></i> Atividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-file"></i> Certificado &gt; <i aria-hidden="true" class="glyphicon glyphicon-plus"></i> Novo Certificado</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <div class="embed-responsive embed-responsive-16by9">
                      <video controls="controls"><source src="/files/../videos/ajuda/ajuda_acoes_certificados_add.mp4" type="video/mp4"></video></div>

                        <br><br>


                        <p>
                          A tela de Novo Certificado serve para o Coordenador cadastrar um certificado novo a uma Atividade.
                          A princípio, as informAtividades a serem cadastradas são:
                        </p>
                        <ul>
                          <li>Modelo Gráfico: modelo gráfico padrão para o certificado;</li>
                          <li>Tipo de Certificado: modelo textual padrão para o certificado;</li>
                          <li><b>Data de Início: data na qual o certificado foi iniciado;</b></li>
                          <li><b>Data Final: data na qual o certificado será finalizado;</b></li>
                          <li>Carga Horária Padrão;</li>
                          <li>Conteúdo Programático: informa o conteúdo programático realizado para o certificado;</li>
                        </ul>

                        <p><strong>* Itens em negrito são obrigatórios. </strong></p>
                        <p>
                          Após o preenchimento das informAtividades acima, é necessário clicar no botão
                          <button class="btn btn-success" type="button"><i class="fa fa-floppy-o"></i>  Salvar</button>.
                        </p>

                        <p>
                          No modo de criAtividade, há a opção de cancelar a criAtividade do Atividade, é necessário clicar no botão
                          <button type="button" class="btn btn-danger"><i class="fa fa-ban"></i> Cancelar</button>.
                        </p>


<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m24" class="modalAjuda collapse">




  <p>A VisualizAtividade de Certificado encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-file"></i> Certificados &gt; <i aria-hidden="true" class="glyphicon glyphicon-search"></i> Visualizar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->


                    <div class="embed-responsive embed-responsive-16by9">
                      <video controls="controls"><source src="/files/../videos/ajuda/ajuda_certificados_visualizacao.mp4" type="video/mp4"></video></div>
                        <br><br>


                        <p>A tela Visualizar Certificado serve para a listagem de Participantes ligadas a este certificado e tomada de Atividades relacionadas as mesmas.</p>
                        <p>As informAtividades das Participantes a serem visualizadas são:</p>
                        <ul>
                          <li>Pessoa: nome do participante ligado ao certificado;</li>
                          <li>Carga Horária: carga horária do pariticipante;</li>
                          <li>SituAtividade: situAtividade do certificado (aguardando emissão, emitido, editado após emissão ou inválido);</li>
                          <li>Data Inicial: Data inicial da participAtividade da pessoa</li>
                          <li>Data Final: Data Final da participAtividade da pessoa</li>
                        </ul>
                        <br>

                        <p>
                          Nesta tela, há a opção de visualizar o relatório de certificados emitidos para os paricipantes.
                          Tanto o relatório simples, como o completo. Este relatórios podem ser visualizados, respectivamente, através dos
                          botões: <br>
                          <button type="button" class="btn btn-info">Visualizar Relatório de Certificados Emitidos (Lista de Participantes)
                          </button>
                          e
                          <button type="button" class="btn btn-info">Visualizar Relatório de Certificados Emitidos (Completo)</button>.
                        </p>
                        <br>

                        <p>
                          Também é possível realizar as seguintes Atividades, mediante seleção de certificados através do elemento <input type="checkbox">:
                        </p>
                        <ul>
                          <li>Gerar certificado e salvar (para certificados na situAtividade "Aguardando Emissão");</li>
                          <li>Enviar para ajuste (para certificados na situAtividade "Aguardando Emissão");</li>
                          <li>Reprovar certificados (para certificados na situAtividade "Aguardando Emissão");</li>
                          <li>Invalidar certificados (para certificados na situAtividade "Emitido").</li>
                        </ul>
                        <p>Após a seleção da opção desejada é necessário clicar no botão
                          <button type="button" class="btn btn-success">Executar</button>
                          para executá-la.
                        </p>
                        <br>

                        <p>
                          Por fim também é possível realizar Atividades individuais:
                        </p>
                        <ul>
                          <li>
                            Visualizar, clicando no botão
                            <button type="button" class="btn btn-primary">
                              <i aria-hidden="true" class="glyphicon glyphicon-search"></i>
                            </button>;
                          </li>
                          <li>
                            Download do certificado emitido, clicando no botão
                            <button type="button" class="btn btn-info">
                              <i aria-hidden="true" class="glyphicon glyphicon-download"></i>
                            </button> (para certificados na situAtividade "Emitido");
                          </li>
                          <li>
                            Editar um certificado emitido, clicando no botão
                            <button type="button" class="btn btn-warning">
                              <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i>
                            </button> (para certificados na situAtividade "Emitido");
                          </li>
                          <li>
                            Reemitir um certificado após edição, clicando no botão
                            <button type="button" class="btn btn-success">
                              <i aria-hidden="true" class="glyphicon glyphicon-repeat"></i>
                            </button> (para certificados na situAtividade "Editado Após Emissão").
                          </li>
                        </ul>
<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m25" class="modalAjuda collapse">




  <p>A Edição de Certificado encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-files"></i> Certificados &gt; <i aria-hidden="true" class="glyphicon glyphicon-search"></i> Visualizar &gt; <i aria-hidden="true" class="glyphicon glyphicon-edit"></i> Visualizar </p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela para Editar Certificado serve para edição do Certificado da Atividade.
                    </p>
                    <p>
                      As informAtividades do certificado a serem editadas são:
                    </p>
                    <ul>
                      <li>Modelo Gráfico: modelo gráfico padrão para o certificado;</li>
                      <li>Tipo de Certificado: modelo textual padrão para o certificado;</li>
                      <li><b>Data de Início: data na qual o certificado foi iniciado;</b></li>
                      <li><b>Data Final: data na qual o certificado será finalizado;</b></li>
                      <li>Carga Horária Padrão;</li>
                      <li>Conteúdo Programático: informa o conteúdo programático realizado para o certificado;</li>
                    </ul>
                    <p><strong>*</strong> Os itens em negrito são obrigatórios</p>

                    <p>
                      No modo de edição, após o preenchimento das informAtividades acima, é necessário clicar no botão
                      <button class="btn btn-success" type="button"><i class="fa fa-floppy-o"></i>  Salvar</button>.
                    </p>
                    <p>
                      No modo de edição, há a opção de apagar o certificado, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Apagar</button> e depois confirmar.
                    </p>

<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m26" class="modalAjuda collapse">




  <p>A tela de Enviar Item do Certificado para Ajuste encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-file"></i> Certificados &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i> Enviar Itens para Ajuste  </p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <div class="embed-responsive embed-responsive-16by9">
                      <video controls="controls"><source src="/files/../videos/ajuda/ajuda_certificados_enviar_para_ajustes.mp4" type="video/mp4"></video>    </div>
                        <br><br>

                        <p>
                          Esta tela permite enviar Itens para ajuste.
                          Quando um Item é enviado para ajuste, ele retorna para o Coordenador na situAtividade "Em Ajuste" e correções poderão ser realizadas.
                          Esta funcionalidade é útil quando o Item possui alguma inconsistência (exemplo: carga horária incorreta).
                        </p>

                        <p>
                          <!-- MOCK -->
                        </p><table class="table table-bordered table-responsive table-hover table-striped table-condensed bg-white">
                          <thead>
                            <tr>
                              <th scope="col">
                                <a class="btn btn-xs btn-warning"><i class="fa fa-check-square-o"></i></a><a class="btn btn-xs btn-default" style="display: none;"><i class="far fa-square"></i></a></th>
                                <th scope="col" class="">
                                Nome</th>
                                <th scope="col" class="">
                                  <a>Período <i class="fa fa-sort pull-right"></i></a></th>
                                  <th scope="col" class="">
                                  Carga Horária</th>
                                  <th scope="col" class="">
                                  SituAtividade</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody style="height: 120px; overflow-y: auto;">
                                <tr>
                                  <td>
                                    <label for="certificadoItensId[53750]">
                                      <input type="checkbox" checked="" class="certificado_itens_checkbox">
                                    </label>
                                  </td>
                                  <td class="">JOÃO DA SILVA</td>
                                  <td class="">
                                  De 29/10/2018 até 30/10/2018</td>
                                  <td class="">
                                  8</td>
                                  <td class="">
                                    <label class="label" style="background-color: #EA890B">
                                    Aguardando AprovAtividade</label>
                                  </td>
                                  <td class="actions ">
                                    <div class="btn-group">
                                      <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>                                            </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label for="certificadoItensId[53751]">
                                        <input type="checkbox" checked="" class="certificado_itens_checkbox">
                                      </label>
                                    </td>
                                    <td class="">JOSÉ DA SILVA</td>
                                    <td class="">De 29/10/2018 até 30/10/2018</td>
                                    <td class="">
                                    8</td>
                                    <td class="">
                                      <label class="label" style="background-color: #EA890B">
                                      Aguardando AprovAtividade</label>
                                    </td>
                                    <td class="actions ">
                                      <div class="btn-group">
                                        <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>                                            </div>
                                      </td>
                                    </tr>

                                  </tbody>
                                </table>
                                <!-- FIM MOCK -->
                                <p></p>

                                <p>
                                  Devem ser selecionados os participantes para ajuste através do check <input type="checkbox">.
                                  É possível selecionar/deselecionar todos através dos checks
                                  <a class="btn btn-xs btn-warning"><i class="fa fa-check-square-o"></i></a>/<a class="btn btn-xs btn-default"><i class="far fa-square"></i></a>.<br>
                                  Também é possível visualizar todos os detalhes de um participante através do botão
                                  <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>.
                                </p>
                                <p>
                                  Deve ser preenchida uma justificativa de pelo menos 30 caracteres para que os itens possam ser enviados.
                                  Além disso, é necessário marcar o check <input type="checkbox"> de confirmAtividade da justificativa.
                                </p>
                                <p>
                                 Clicar no botão
                                 <button class="btn btn-md btn-warning">
                                  <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i> Enviar para ajuste
                                </button>
                                para enviar os Itens para ajuste.
                              </p>

<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m27" class="modalAjuda collapse">




  <p>A tela de Reprovar Item do Certificado encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-file"></i> Certificados &gt; <i aria-hidden="true" class="glyphicon glyphicon-remove"></i> Reprovar  </p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <div class="embed-responsive embed-responsive-16by9">
                      <video controls="controls"><source src="/files/../videos/ajuda/ajuda_certificados_reprovacao.mp4" type="video/mp4"></video>    </div>
                        <br><br>

                        <p>
                          Esta tela permite reprovar Itens do Certificado.
                          Quando um Item é reprovado, não será possível corrigi-lo ou emiti-lo. <strong>Esta Atividade não pode ser revertida.</strong>
                        </p>
                        <p>
                          Lembrando que existe a funcionalidade de "Enviar Item do Certificado para Ajuste", que, diferente da reprovAtividade, devolve o Item para que o Coordenador possa corrigi-lo.
                        </p>

                        <p>
                          <!-- MOCK -->
                        </p><table class="table table-bordered table-responsive table-hover table-striped table-condensed bg-white">
                          <thead>
                            <tr>
                              <th scope="col">
                                <a class="btn btn-xs btn-warning"><i class="fa fa-check-square-o"></i></a><a class="btn btn-xs btn-default" style="display: none;"><i class="far fa-square"></i></a></th>
                                <th scope="col" class="">
                                Nome</th>
                                <th scope="col" class="">
                                  <a>Período <i class="fa fa-sort pull-right"></i></a></th>
                                  <th scope="col" class="">
                                  Carga Horária</th>
                                  <th scope="col" class="">
                                  SituAtividade</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody style="height: 120px; overflow-y: auto;">
                                <tr>
                                  <td>
                                    <label for="certificadoItensId[53750]">
                                      <input type="checkbox" checked="" class="certificado_itens_checkbox">
                                    </label>
                                  </td>
                                  <td class="">JOÃO DA SILVA</td>
                                  <td class="">
                                  De 29/10/2018 até 30/10/2018</td>
                                  <td class="">
                                  8</td>
                                  <td class="">
                                    <label class="label" style="background-color: #EA890B">
                                    Aguardando AprovAtividade</label>
                                  </td>
                                  <td class="actions ">
                                    <div class="btn-group">
                                      <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>                                            </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label for="certificadoItensId[53751]">
                                        <input type="checkbox" checked="" class="certificado_itens_checkbox">
                                      </label>
                                    </td>
                                    <td class="">JOSÉ DA SILVA</td>
                                    <td class="">De 29/10/2018 até 30/10/2018</td>
                                    <td class="">
                                    8</td>
                                    <td class="">
                                      <label class="label" style="background-color: #EA890B">
                                      Aguardando AprovAtividade</label>
                                    </td>
                                    <td class="actions ">
                                      <div class="btn-group">
                                        <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>                                            </div>
                                      </td>
                                    </tr>

                                  </tbody>
                                </table>
                                <!-- FIM MOCK -->
                                <p></p>

                                <p>
                                  Devem ser selecionados os participantes para reprovAtividade através do check <input type="checkbox">.
                                  É possível selecionar/deselecionar todos através dos checks
                                  <a class="btn btn-xs btn-warning"><i class="fa fa-check-square-o"></i></a>/<a class="btn btn-xs btn-default"><i class="far fa-square"></i></a>.<br>
                                  Também é possível visualizar todos os detalhes de um participante através do botão
                                  <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>.
                                </p>
                                <p>
                                  Deve ser preenchida uma justificativa de pelo menos 30 caracteres para que os itens possam ser reprovados.
                                  Além disso, é necessário marcar o check <input type="checkbox"> de confirmAtividade da justificativa.
                                </p>
                                <p>
                                  Clicar no botão
                                  <button class="btn btn-md btn-danger">
                                    <i aria-hidden="true" class="glyphicon glyphicon-remove"></i> Reprovar
                                  </button>
                                  para reprovar os Itens.
                                </p>

<!--
</div>
</div>
-->
</div>


<!--Divisória de conteúdo modal-->
<div id="m28" class="modalAjuda collapse">


  <p>A tela de Aprovar Item do Certificado encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-file"></i> Certificados &gt; <i aria-hidden="true" class="glyphicon glyphicon-check"></i> Aprovar  </p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <div class="embed-responsive embed-responsive-16by9">
                      <video controls="controls"><source src="/files/../videos/ajuda/ajuda_certificados_aprovacao.mp4" type="video/mp4"></video>    </div>
                        <br><br>

                        <p>
                          Esta tela permite aprovar Itens do Certificado.
                          Quando um Item é aprovado, sua situAtividade é alterada para "Aguardando Emissão" - a emissão deve ser feita posteriormente pela Pró-Reitoria responsável pela Atividade.
                        </p>

                        <p>
                          <!-- MOCK -->
                        </p><table class="table table-bordered table-responsive table-hover table-striped table-condensed bg-white">
                          <thead>
                            <tr>
                              <th scope="col">
                                <a class="btn btn-xs btn-warning"><i class="fa fa-check-square-o"></i></a><a class="btn btn-xs btn-default" style="display: none;"><i class="far fa-square"></i></a></th>
                                <th scope="col" class="">
                                Nome</th>
                                <th scope="col" class="">
                                  <a>Período <i class="fa fa-sort pull-right"></i></a></th>
                                  <th scope="col" class="">
                                  Carga Horária</th>
                                  <th scope="col" class="">
                                  SituAtividade</th>
                                  <th scope="col"></th>
                                </tr>
                              </thead>
                              <tbody style="height: 120px; overflow-y: auto;">
                                <tr>
                                  <td>
                                    <label for="certificadoItensId[53750]">
                                      <input type="checkbox" checked="" class="certificado_itens_checkbox">
                                    </label>
                                  </td>
                                  <td class="">JOÃO DA SILVA</td>
                                  <td class="">
                                  De 29/10/2018 até 30/10/2018</td>
                                  <td class="">
                                  8</td>
                                  <td class="">
                                    <label class="label" style="background-color: #EA890B">
                                    Aguardando AprovAtividade</label>
                                  </td>
                                  <td class="actions ">
                                    <div class="btn-group">
                                      <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>                                            </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <label for="certificadoItensId[53751]">
                                        <input type="checkbox" checked="" class="certificado_itens_checkbox">
                                      </label>
                                    </td>
                                    <td class="">JOSÉ DA SILVA</td>
                                    <td class="">De 29/10/2018 até 30/10/2018</td>
                                    <td class="">
                                    8</td>
                                    <td class="">
                                      <label class="label" style="background-color: #EA890B">
                                      Aguardando AprovAtividade</label>
                                    </td>
                                    <td class="actions ">
                                      <div class="btn-group">
                                        <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>                                            </div>
                                      </td>
                                    </tr>

                                  </tbody>
                                </table>
                                <!-- FIM MOCK -->
                                <p></p>

                                <p>
                                  Devem ser selecionados os participantes para aprovAtividade através do check <input type="checkbox">.
                                  É possível selecionar/deselecionar todos através dos checks
                                  <a class="btn btn-xs btn-warning"><i class="fa fa-check-square-o"></i></a>/<a class="btn btn-xs btn-default"><i class="far fa-square"></i></a>.<br>
                                  Também é possível visualizar todos os detalhes de um participante através do botão
                                  <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>.
                                </p>
                                <p>
                                  É necessário marcar o check <input type="checkbox"> de ratificAtividade para realizar a aprovAtividade.
                                </p>
                                <p>
                                  Clicar no botão
                                  <button class="btn btn-md btn-success">
                                    <i aria-hidden="true" class="glyphicon glyphicon-check"></i> Aprovar
                                  </button>
                                  para aprovar os itens.
                                </p>

<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m29" class="modalAjuda collapse">




  <p>A tela de Invalidar Item do Certificado encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-file"></i> Certificados &gt; <i aria-hidden="true" class="glyphicon glyphicon-search"></i> Visualizar  &gt; <i aria-hidden="true" class="glyphicon glyphicon-remove"></i> Invalidar Certificados</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      Esta tela permite invalidar Itens do Certificado.
                      Quando um Item é invalidado, não será mais possível emiti-lo. Sua situAtividade passará a ser "Inválido". <strong>Esta Atividade não pode ser revertida.</strong>
                    </p>
                    <p>
                      Só é possível invalidar um Item que esteja na situAtividade "Emitido". Caso o Item ainda não tenha sido sido emitido, existe a opção de "Reprovar" ou até mesmo de
                      "Enviar para Ajuste", onde o Coordenador pode realizar correções.
                    </p>
                    <p>
                      Caso tentem validar (na área pública) um Item que foi invalidado, será exibida a mensagem de que este Certificado foi emitido um dia,
                      mas foi invalidado.
                    </p>

                    <p>
                      <!-- MOCK -->
                    </p><table class="table table-bordered table-responsive table-hover table-striped table-condensed bg-white">
                      <thead>
                        <tr>
                          <th scope="col">
                            <a class="btn btn-xs btn-warning"><i class="fa fa-check-square-o"></i></a><a class="btn btn-xs btn-default" style="display: none;"><i class="far fa-square"></i></a></th>
                            <th scope="col" class="">
                            Nome</th>
                            <th scope="col" class="">
                              <a>Período <i class="fa fa-sort pull-right"></i></a></th>
                              <th scope="col" class="">
                              Carga Horária</th>
                              <th scope="col" class="">
                              SituAtividade</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody style="height: 120px; overflow-y: auto;">
                            <tr>
                              <td>
                                <label for="certificadoItensId[53750]">
                                  <input type="checkbox" checked="" class="certificado_itens_checkbox">
                                </label>
                              </td>
                              <td class="">JOÃO DA SILVA</td>
                              <td class="">
                              De 29/10/2018 até 30/10/2018</td>
                              <td class="">
                              8</td>
                              <td class="">
                                <label class="label" style="background-color: #EA890B">
                                Aguardando AprovAtividade</label>
                              </td>
                              <td class="actions ">
                                <div class="btn-group">
                                  <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>                                            </div>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <label for="certificadoItensId[53751]">
                                    <input type="checkbox" checked="" class="certificado_itens_checkbox">
                                  </label>
                                </td>
                                <td class="">JOSÉ DA SILVA</td>
                                <td class="">De 29/10/2018 até 30/10/2018</td>
                                <td class="">
                                8</td>
                                <td class="">
                                  <label class="label" style="background-color: #EA890B">
                                  Aguardando AprovAtividade</label>
                                </td>
                                <td class="actions ">
                                  <div class="btn-group">
                                    <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>                                            </div>
                                  </td>
                                </tr>

                              </tbody>
                            </table>
                            <!-- FIM MOCK -->
                            <p></p>

                            <p>
                              Devem ser selecionados os participantes para invalidar através do check <input type="checkbox">.
                              É possível selecionar/deselecionar todos através dos checks
                              <a class="btn btn-xs btn-warning"><i class="fa fa-check-square-o"></i></a>/<a class="btn btn-xs btn-default"><i class="far fa-square"></i></a>.<br>
                              Também é possível visualizar todos os detalhes de um participante através do botão
                              <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>.
                            </p>
                            <p>
                              Deve ser preenchida uma justificativa de pelo menos 30 caracteres para que os itens possam ser invalidados.
                              Além disso, é necessário marcar o check <input type="checkbox"> de confirmAtividade da justificativa.
                            </p>
                            <p>
                              Clicar no botão
                              <button class="btn btn-md btn-warning">
                                Invalidar
                              </button>
                              para invalidar os Itens.
                            </p>

<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m30" class="modalAjuda collapse">




  <p>A tela de Editar Item Emitido encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-file"></i> Certificados &gt; <i aria-hidden="true" class="glyphicon glyphicon-search"></i> Visualizar  &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i> Editar Item Emitido</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      Esta tela serve para corrigir informAtividades de um Item de Certificado já emitido. Portanto, só é permitido realizar esta Atividade em Itens que estejam na situAtividade "Emitido".
                      Caso deseje corrigir um Item que ainda não foi emitido, utilize a funcionalidade de "Enviar para Ajuste".
                    </p>
                    <p>
                      Será possível alterar todos os campos referentes à participAtividade: Carga Horária, Data Inicial, Data Final, Função, Atividade, etc.
                      Entretanto, não é possível alterar os dados da Pessoa: nome, telefone, email, etc. Caso deseje alterar os dados da Pessoa é necessário acessar o menu "Participantes"
                      e todas as alterAtividades feitas lá serão carregadas na edição do Item emitido.
                    </p>
                    <p>
                      Esta tela segue a mesma lógica da tela de criAtividade/edição de Item, portanto, só serão exibidos campos que pertençam ao Tipo do Certificado do Item.
                      Por exemplo, se o Tipo de Certificado do Item possui informAtividade de "Função" mas não possui informAtividade de "Atividade", então somente o campo de "Função" será exibido para alterAtividade.
                    </p>
                    <p>
                      Após fazer as alterAtividades necessárias, clicar em <button class="btn btn-success"><i class="fa fa-floppy-o"></i>  Salvar</button>.
                    </p>
                    <p>
                      <strong>Obs:</strong> Após salvar as alterAtividades, o Item ficará na situAtividade "Em Edição (Emitido)".
                      Isso quer dizer que a alterAtividade ainda não foi efetivada e o Item Certificado que havia sido emitido anteriormente ainda continua válido.
                      Para finalizar a reemissão, é necessário clicar no ícone de Reemitir
                      <a alt="Reemitir" title="Reemitir" class="btn btn-sm btn-success"><i aria-hidden="true" class="glyphicon glyphicon-repeat"></i></a>
                      que irá ser exibido na listagem de Itens do Certificado.
                    </p>

<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m31" class="modalAjuda collapse">




  <p>A tela de Reemitir Item do Certificado encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-file"></i> Certificados &gt; <i aria-hidden="true" class="glyphicon glyphicon-search"></i> Visualizar  &gt; <i aria-hidden="true" class="glyphicon glyphicon-repeat"></i> Reemitir Item do Certificado</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      Esta tela permite reemitir um Item de Certificado.
                      Na reemissão, o Item que havia sido emitido anteriormente torna-se inválido. Será gerado um novo hash(código verificador) para o novo Item de Certificado. <strong>Esta Atividade não pode ser revertida.</strong>
                    </p>
                    <p>
                      Só é possível reemitir um Item que esteja na situAtividade "Em Edição (Emitido)". Portanto, obrigatoriamente deve ter passado pela fase de "Editar Item Emitido".
                    </p>

                    <p>
                      <!-- MOCK -->
                    </p><table class="table table-bordered table-responsive table-hover table-striped table-condensed bg-white">
                      <thead>
                        <tr>
                          <th scope="col">
                            <a class="btn btn-xs btn-warning"><i class="fa fa-check-square-o"></i></a><a class="btn btn-xs btn-default" style="display: none;"><i class="far fa-square"></i></a></th>
                            <th scope="col" class="">
                            Nome</th>
                            <th scope="col" class="">
                              <a>Período <i class="fa fa-sort pull-right"></i></a></th>
                              <th scope="col" class="">
                              Carga Horária</th>
                              <th scope="col" class="">
                              SituAtividade</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody style="height: 120px; overflow-y: auto;">
                            <tr>
                              <td>
                                <label for="certificadoItensId[53750]">
                                  <input type="checkbox" checked="" class="certificado_itens_checkbox">
                                </label>
                              </td>
                              <td class="">JOÃO DA SILVA</td>
                              <td class="">
                              De 29/10/2018 até 30/10/2018</td>
                              <td class="">
                              8</td>
                              <td class="">
                                <label class="label" style="background-color: #437DC7">
                                Em Edição (Emitido) </label>
                              </td>
                              <td class="actions ">
                                <div class="btn-group">
                                  <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>                                            </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                          <!-- FIM MOCK -->
                          <p></p>

                          <p>
                            É  possível visualizar todos os detalhes do participante através do botão
                            <a alt="Visualizar" title="Visualizar" class="btn btn-xs btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-search"></i></a>.
                          </p>
                          <p>
                            Deve ser preenchida uma justificativa de pelo menos 30 caracteres para que o item possa ser reemitido.
                            Além disso, é necessário marcar o check <input type="checkbox"> de confirmAtividade da justificativa.
                          </p>
                          <p>
                            Clicar no botão
                            <button class="btn btn-md btn-success">
                              <i aria-hidden="true" class="glyphicon glyphicon-repeat"></i> Reemitir
                            </button>
                            para reemitir o Item.
                          </p>

                          <p>
                            <strong>Obs:</strong> Caso tentem validar(na área pública) um Item incorreto, que foi reemitido, será exibida uma mensagem dizendo que aquele Item foi invalidado
                            e um link para download do Item que foi reemitido.
                          </p>

<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m32" class="modalAjuda collapse">



  <p>A Listagem de Modalidades encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-list"></i>  Modalidades</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela de Listagem de Modalidades serve para listar os modalidades já criadas.
                    </p>
                    <p>
                      Na tela de Listagem de Modalidades, é apresentada uma lista,
                      onde para cada modalidade, há as opções para Visualizar
                      <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                        <i title="Visualizar" class="fa fa-search"></i>
                      </a>,
                      Editar
                      <a class="btn btn-warning btn-xs">
                        <i title="Editar Curso" class="fa fa-pencil"></i>
                      </a>
                      e Remover
                      <a class="btn btn-danger btn-xs"><i title="Remover Curso" class="fa fa-trash"></i></a>
                      dependendo da permissão de acesso do usuário.


                    </p>
                    <table id="tableModalidades" class="table table-striped table-hover table-condensed">
                      <thead>
                        <tr>
                          <th><a>Descrição</a></th>
                          <th class="actions">Atividades</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Evento de Extensão</td>
                          <td class="actions">
                            <div class="btn-group col-md-12" role="group">
                              <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                                <i data-toggle="tooltip" data-placement="top" title="Visualizar" class="fa fa-search"></i>
                              </a>
                              <a class="btn btn-warning btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Editar Curso" class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Remover Curso" class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody></table>
<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m33" class="modalAjuda collapse">




  <p>A Adição de Modalidades encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-list"></i>  Modalidades&gt; <i aria-hidden="true" class="glyphicon glyphicon-plus"></i> Nova Modalidade </p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela de Adição de Modalidades serve para cadastrar uma nova Modalidade.
                      A princípio, o dado a ser inserido é:
                    </p>
                    <ul>
                      <li>Descrição: descrição da modalidade</li>

                    </ul>
                    <p>
                      Após o preenchimento das informAtividades acima, é necessário clicar no botão
                      <button class="btn btn-success" type="button"><i class="fa fa-floppy-o"></i>  Salvar</button>.
                    </p>

                    <p>
                      No modo de adição, há a opção de cancelar a adição de modalidade, é necessário clicar no botão
                      <button type="button" class="btn btn-danger"><i class="fa fa-ban"></i> Cancelar</button>.
                    </p>
<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m34" class="modalAjuda collapse">




  <p>A VisualizAtividade de Modalidades encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-list"></i>  Modalidades &gt; <i aria-hidden="true" class="glyphicon glyphicon-search"></i> Visualizar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela para Visualizar Modalidades serve para visualizAtividade dos detalhes sobre a modalidade selecionada.
                    </p>
                    <p>
                      A informAtividade da modalidade selecioanda a ser visualizada é:
                    </p>
                    <ul>
                      <li>Descrição: descrição da modalidade</li>
                    </ul>
                    <p>
                      Para editar a modalidade, primeiro, é necessário clicar no botão
                      <button type="button" class="btn btn-primary "> Editar Modalidade</button>.
                      Aparecerá uma nova janela, na qual será possível a edição dos dados da modalidade selecionada.
                    </p>
                    <p>
                      No modo de visualizAtividade, há a opção de apagar a modalidade, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Apagar Modalidade</button> e depois confirmar.
                    </p>

<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m35" class="modalAjuda collapse">



  <p>A Edição de Modalidades encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-list"></i>  Modalidades &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i> Editar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela para Editar Modalidades serve para edição dos dados do mesmo.
                    </p>
                    <p>
                      As informAtividade de Modalides a ser editada é:
                    </p>
                    <ul>
                      <li>Descrição: descrição da modalidade</li>
                    </ul>
                    <p>
                      No modo de edição, após o preenchimento das informAtividades acima, é necessário clicar no botão
                      <button class="btn btn-success" type="button"><i class="fa fa-floppy-o"></i>  Salvar</button>.
                    </p>
                    <p>
                      Caso deseje cancelar as modificAtividades basta clicar no botão
                      <button type="button" class="btn btn-danger">Cancelar</button>.
                    </p>
<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m36" class="modalAjuda collapse">



  <p>A Listagem do Modelo Textual encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-file-o"></i> Modelo Textual</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela de Listagem de Modelos Textuais serve para listar os modelos textuais já criados.
                    </p>

                    <p>
                      Na tela de Listagem de Modelos Textuais, é apresentada uma lista ,
                      onde para cada modelo, há as opções para Visualizar
                      <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                        <i title="Visualizar" class="fa fa-search"></i>
                      </a>,
                      Editar
                      <a class="btn btn-success btn-xs">
                        <i title="Editar Curso" class="fa fa-pencil"></i>
                      </a>
                      e Remover
                      <a class="btn btn-danger btn-xs"><i title="Remover Curso" class="fa fa-trash"></i></a>
                      dependendo da permissão de acesso do usuário.


                    </p>
                    <p>
                      <strong>*Modelos Textual alterado e/ou deletado não afetará os certificados já gerados.</strong>
                    </p>
                    <table id="tableModeloTextual" class="table table-striped table-hover table-condensed">
                      <thead>
                        <tr>
                          <th><a>Título</a></th>
                          <th class="actions text-center">Atividades</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Modelo 1</td>
                          <td class="actions text-center">
                            <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                              <i data-toggle="tooltip" data-placement="top" title="Visualizar" class="fa fa-search"></i>
                            </a>
                            <a class="btn btn-success btn-xs">
                              <i data-toggle="tooltip" data-placement="top" title="Editar Curso" class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-xs">
                              <i data-toggle="tooltip" data-placement="top" title="Remover Curso" class="fa fa-trash"></i>
                            </a>

                          </td>
                        </tr>
                      </tbody></table>

                      <p></p>
<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m37" class="modalAjuda collapse">




  <p>A Adição de Modelo Textual encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-file-o"></i>  Modelo Textual &gt; <i aria-hidden="true" class="glyphicon glyphicon-plus"></i> Novo Modelo Textual. </p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela de Novo Modelo Textual serve para  cadastrar um novo modelo ao projeto.
                      A princípio, os dados a serem inseridos são:

                    </p>
                    <ul>
                      <li>Título: nome do modelo textual</li>
                      <li>Texto: texto padrão do modelo textual contendo no máximo 300 caracteres</li>
                    </ul>
                    <p>
                      Após o preenchimento das informAtividades acima, é necessário clicar no botão <button type="button" class="btn btn-success">Salvar</button>.
                    </p>

                    <p>
                      No modo de adição, há a opção de cancelar a adição de modelo, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Cancelar</button>.
                    </p>

<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m38" class="modalAjuda collapse">



  <p>A VisualizAtividade do Modelo Textual encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-file-o"></i>  Modelo Textual &gt; <i aria-hidden="true" class="glyphicon glyphicon-search"></i> Visualizar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela para Visualizar Modelo Textual serve para visualizAtividade detalhada sobre o modelo textual selecionado.
                    </p>
                    <p>
                      As informAtividades do modelo textual a serem visualizadas são:
                    </p>
                    <ul>
                      <li>Título: nome do modelo textual</li>
                      <li>Texto: texto padrão do modelo textual contendo no máximo 300 caracteres</li>
                    </ul>
                    <p>
                      Para editar o modelo textual, primeiro, é necessário clicar no botão
                      <button type="button" class="btn btn-primary "> Editar Modelo</button>.
                      Aparecerá uma nova janela, na qual será possível a edição dos dados do modelo selecionado.
                    </p>
                    <p>
                      No modo de visualizAtividade, há a opção de apagar o modelo, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Apagar Modelo</button> e depois confirmar.
                    </p>

                    <strong>*Modelos Textual alterado e/ou deletado não afetará os certificados já gerados.</strong>

<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m39" class="modalAjuda collapse">




  <p>A Edição do Modelo Textual encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-file-o"></i>  Modelo Textual &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i> Editar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela para Editar Modelo Textual serve para edição dos dados do mesmo.
                    </p>
                    <p>
                      As informAtividades do Modelo Textual a serem editadas são:
                    </p>
                    <ul>
                      <li>Título: nome do modelo textual</li>
                      <li>Texto: texto padrão do modelo textual contendo no máximo 300 caracteres</li>
                    </ul>
                    <p>
                      No modo de edição, após o preenchimento das informAtividades acima, é necessário clicar no botão
                      <button type="button" class="btn btn-success">Salvar</button>.
                    </p>
                    <p>
                      Caso deseje cancelar as modificAtividades basta clicar no botão
                      <button type="button" class="btn btn-danger">Cancelar</button> e depois confirmar.
                    </p>

                    <strong>*Modelos Textual alterado e/ou deletado não afetará os certificados já gerados.</strong>
<!--
</div>
</div>
-->
</div>
</div>

<!--Modelo GRÁFICO-->
<!--Divisória de conteúdo modal-->
<div id="m40" class="modalAjuda collapse">


  <!--Divisória de conteúdo modal-->
  <div id="m41" class="modalAjuda collapse">


    <!--Divisória de conteúdo modal-->
    <div id="m42" class="modalAjuda collapse">


      <!--Divisória de conteúdo modal-->
      <div id="m43" class="modalAjuda collapse">


        <!--Divisória de conteúdo modal-->
        <div id="m44" class="modalAjuda collapse">




          <p>A Listagem de Tipo de Participantes encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> Configuraçōes &gt; <i aria-hidden="true" class="glyphicon glyphicon-users"></i> Tipo de Participantes</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela de Listagem de Tipo de Participantes serve para listar todos os tipos já cadastradas no sistema.
                    </p>

                    <p>
                      Na tela de Listagem de Tipo de Participantes, é apresentada uma lista com os tipo já cadastrados,
                      onde para cada um, há as opções para Editar
                      <a class="btn btn-success btn-xs">
                        <i title="Editar Curso" class="fa fa-pencil"></i>
                      </a>
                      e Remover
                      <a class="btn btn-danger btn-xs">
                        <i title="Remover Curso" class="fa fa-trash"></i>
                      </a>.
                    </p>
                    <table id="tableProjeto" class="table table-striped table-hover table-condensed">
                      <thead>
                        <tr>
                          <th><a>Nome</a></th>
                          <th class="actions">Atividades</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Coordenador</td>
                          <td class="actions ">
                            <div class="btn-group col-md-12" role="group">
                              <a class="btn btn-success btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Editar Tipo Pessoa" class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Remover Tipo Pessoa" class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Público-Alvo</td>
                          <td class="actions">
                            <div class="btn-group col-md-12" role="group">
                              <a class="btn btn-success btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Editar Tipo Pessoa" class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Remover Tipo Pessoa" class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr><tr>
                          <td>Membros</td>
                          <td class="actions">
                            <div class="btn-group col-md-12" role="group">
                              <a class="btn btn-success btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Editar Tipo Pessoa" class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Remover Tipo Pessoa" class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr><tr>
                          <td>Outros</td>
                          <td class="actions">
                            <div class="btn-group col-md-12" role="group">
                              <a class="btn btn-success btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Editar Tipo Pessoa" class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Remover Tipo Pessoa" class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Staff</td>
                          <td class="actions">
                            <div class="btn-group col-md-12" role="group">
                              <a class="btn btn-success btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Editar Tipo Pessoa" class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Remover Tipo Pessoa" class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>


                    <p>
                      Os tipos de Participantes que estão em uso em projetos não podem ser excluídos.
                    </p>
                    <p>É preciso tomar cuidado ao editar tipos de Participantes que estão em uso para que elas continuem
                    relevantes para os projetos onde estão sendo usadas.</p>

<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m45" class="modalAjuda collapse">



  <p>A Adição de Tipo de Participantes encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> Configuraçōes &gt; <i aria-hidden="true" class="glyphicon glyphicon-users"></i>  Tipo de Participantes &gt; <i aria-hidden="true" class="glyphicon glyphicon-plus"></i> Novo Tipo de Participantes</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela de Novo Tipo de Pessoa serve para cadastrar um novo tipo de pessoa no sistema.
                      A princípio, a informAtividade a ser cadastrada é:

                    </p>
                    <ul>
                      <li>Tipo de Pessoa;</li>
                    </ul>
                    <p>
                      Após o preenchimento da informAtividade acima, é necessário clicar no botão
                      <button type="button" class="btn btn-success">Salvar</button>.
                    </p>

                    <p>
                      No modo de adição, há a opção de cancelar a adição do tipo de pessoa, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Cancelar</button>.
                    </p>



<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m46" class="modalAjuda collapse">



  <p>A Edição de Tipo de Participantes encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> Configuraçōes &gt; <i aria-hidden="true" class="glyphicon glyphicon-users"></i>  Tipo de Participantes &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i> Editar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela de Editar Tipo de Pessoa tem a função de editar um tipo de pessoa préviamente cadastrado no sistema.
                      A princípio, a informAtividade a ser editada é:

                    </p>
                    <ul>
                      <li>Tipo de Pessoa;</li>
                    </ul>
                    <p>
                      Após o edição da informAtividades acima, é necessário clicar no botão <button type="button" class="btn btn-success">Salvar</button>.
                    </p>

                    <p>
                      No modo de edição, há a opção de apagar o tipo de pessoa, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Apagar</button>.
                    </p>

                    <p>É preciso tomar cuidado ao editar tipos de Participantes que estão em uso para que elas continuem
                    relevantes para os projetos onde estão sendo usadas.</p>


<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m47" class="modalAjuda collapse">



  <p>A Listagem de Tipo de Atividade encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-cubes"></i>  Tipo de Atividade</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela de Listagem de Tipo de Atividade serve para listar os tipos de Atividade já criados.
                    </p>
                    <p>
                      Na tela de Listagem de Tipo de Atividade é apresentada uma lista,
                      onde para cada tipo de Atividade há as opções
                      Editar
                      <a class="btn btn-warning btn-xs">
                        <i title="Editar Curso" class="fa fa-pencil"></i>
                      </a>
                      e Remover
                      <a class="btn btn-danger btn-xs"><i title="Remover Curso" class="fa fa-trash"></i></a>
                      dependendo da permissão de acesso do usuário.


                    </p>
                    <table id="tableModalidades" class="table table-striped table-hover table-condensed">
                      <thead>
                        <tr>
                          <th><a>Descrição</a></th>
                          <th class="actions">Atividades</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Aula</td>
                          <td class="actions">
                            <div class="btn-group col-md-12" role="group">
                              <a class="btn btn-warning btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Editar Curso" class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Remover Curso" class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody></table>
<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m48" class="modalAjuda collapse">



  <p>A Adição de Tipo de Atividade encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-cubes"></i>  Tipo de Atividade&gt; <i aria-hidden="true" class="glyphicon glyphicon-plus"></i> Novo </p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela de Adição de Tipo de Atividade serve para cadastrar um novo Tipo de Atividade.
                      A princípio, o dado a ser inserido é:
                    </p>
                    <ul>
                      <li>Descrição: descrição do Tipo de Atividade</li>

                    </ul>
                    <p>
                      Após o preenchimento das informAtividades acima, é necessário clicar no botão <button type="button" class="btn btn-success">Salvar</button>.
                    </p>

                    <p>
                      No modo de adição, há a opção de cancelar a adição de Tipo de Atividade, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Cancelar</button>.
                    </p>
<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m49" class="modalAjuda collapse">




  <p>A Edição de Tipo de Atividade encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-cubes"></i>  Tipo de Atividade &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i> Editar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela para Editar Tipo de Atividade serve para edição dos dados do mesmo.
                    </p>
                    <p>
                      A informAtividade de Tipo de Atividade a ser editada é:
                    </p>
                    <ul>
                      <li>Descrição: descrição do Tipo de Atividade</li>
                    </ul>
                    <p>
                      No modo de edição, após o preenchimento das informAtividades acima, é necessário clicar no botão
                      <button type="button" class="btn btn-success">Salvar</button>.
                    </p>
                    <p>
                      Caso deseje cancelar as modificAtividades basta clicar no botão
                      <button type="button" class="btn btn-danger">Cancelar</button>.
                    </p>
<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m50" class="modalAjuda collapse">




  <p>A Listagem de Tipo de Atividade encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-id-card"></i>  Tipo de Atividade</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela de Listagem de Tipo de Atividade serve para listar os tipos de atividade já criadas.
                    </p>
                    <p>
                      Na tela de Listagem de Tipo de Atividade, é apresentada uma lista,
                      onde para cada tipo de atividade, há as opções para Visualizar
                      <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                        <i title="Visualizar" class="fa fa-search"></i>
                      </a>,
                      Editar
                      <a class="btn btn-warning btn-xs">
                        <i title="Editar Curso" class="fa fa-pencil"></i>
                      </a>
                      e Remover
                      <a class="btn btn-danger btn-xs"><i title="Remover Curso" class="fa fa-trash"></i></a>
                      dependendo da permissão de acesso do usuário.


                    </p>
                    <table id="tableModalidades" class="table table-striped table-hover table-condensed">
                      <thead>
                        <tr>
                          <th><a>Descrição</a></th>
                          <th class="actions">Atividades</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Aula</td>
                          <td class="actions">
                            <div class="btn-group col-md-12" role="group">
                              <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                                <i data-toggle="tooltip" data-placement="top" title="Visualizar" class="fa fa-search"></i>
                              </a>
                              <a class="btn btn-warning btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Editar Curso" class="fa fa-pencil"></i>
                              </a>
                              <a class="btn btn-danger btn-xs">
                                <i data-toggle="tooltip" data-placement="top" title="Remover Curso" class="fa fa-trash"></i>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody></table>
<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m51" class="modalAjuda collapse">




  <p>A Adição de Tipo de Atividade encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-id-card"></i>  Tipo de Atividade&gt; <i aria-hidden="true" class="glyphicon glyphicon-plus"></i> Nova Modalidade </p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela de Adição de Tipo de Atividade serve para cadastrar um novo Tipo de Atividade.
                      A princípio, o dado a ser inserido é:
                    </p>
                    <ul>
                      <li>Descrição: descrição do Tipo de Atividade</li>

                    </ul>
                    <p>
                      Após o preenchimento das informAtividades acima, é necessário clicar no botão <button type="button" class="btn btn-success">Salvar</button>.
                    </p>

                    <p>
                      No modo de adição, há a opção de cancelar a adição de Tipo de Atividade, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Cancelar</button>.
                    </p>
<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m52" class="modalAjuda collapse">




  <p>A VisualizAtividade de Tipo de Atividade encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-id-card"></i>  Tipo de Atividade &gt; <i aria-hidden="true" class="glyphicon glyphicon-search"></i> Visualizar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela para Visualizar Tipo de Atividade serve para visualizAtividade dos detalhes sobre o tipo de atividade selecionada.
                    </p>
                    <p>
                      A informAtividade do tipo de atividade selecioanda a ser visualizada é:
                    </p>
                    <ul>
                      <li>Descrição: descrição do tipo de atividade</li>
                    </ul>
                    <p>
                      Para editar o tipo de atividade, primeiro, é necessário clicar no botão
                      <button type="button" class="btn btn-primary "> Editar Tipo Atividade</button>.
                      Aparecerá uma nova janela, na qual será possível a edição dos dados do tipo de atividade selecionada.
                    </p>
                    <p>
                      No modo de visualizAtividade, há a opção de apagar o tipo de atividade, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Apagar Tipo Atividade</button> e depois confirmar.
                    </p>

<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m53" class="modalAjuda collapse">



  <p>A Edição de Tipo de Atividade encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-id-card"></i>  Tipo de Atividade &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i> Editar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela para Editar Tipo de Atividades serve para edição dos dados do mesmo.
                    </p>
                    <p>
                      A informAtividade de Tipo de Atividades a ser editada é:
                    </p>
                    <ul>
                      <li>Descrição: descrição do Tipo de Atividades</li>
                    </ul>
                    <p>
                      No modo de edição, após o preenchimento das informAtividades acima, é necessário clicar no botão
                      <button type="button" class="btn btn-success">Salvar</button>.
                    </p>
                    <p>
                      Caso deseje cancelar as modificAtividades basta clicar no botão
                      <button type="button" class="btn btn-danger">Cancelar</button>.
                    </p>
<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m54" class="modalAjuda collapse">



  <p>A Listagem do Tipo de Certificado encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-file-o"></i> Tipo de Certificado</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela de Listagem de Tipo de Certificado serve para listar os tipos de certificado já criados.
                    </p>

                    <p>
                      Na tela de Listagem de Tipos de Certificado, é apresentada uma lista ,
                      onde para cada tipo, há as opções para Visualizar
                      <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                        <i title="Visualizar" class="fa fa-search"></i>
                      </a>,
                      Editar
                      <a class="btn btn-warning btn-xs">
                        <i title="Editar Curso" class="fa fa-pencil"></i>
                      </a>
                      e Remover
                      <a class="btn btn-danger btn-xs"><i title="Remover Curso" class="fa fa-trash"></i></a>
                      dependendo da permissão de acesso do usuário.


                    </p>
                    <table id="tableTipoCertificado" class="table table-striped table-hover table-condensed">
                      <thead>
                        <tr>
                          <th><a>Título</a></th>
                          <th><a>Tipo da Atividade</a></th>
                          <th class="actions text-center">Atividades</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Modelo 1</td>
                          <td>Extensão</td>
                          <td class="actions text-center">
                            <a class="btn btn-primary btn-xs" title="Visualizar Curso">
                              <i data-toggle="tooltip" data-placement="top" title="Visualizar" class="fa fa-search"></i>
                            </a>
                            <a class="btn btn-warning btn-xs">
                              <i data-toggle="tooltip" data-placement="top" title="Editar Curso" class="fa fa-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-xs">
                              <i data-toggle="tooltip" data-placement="top" title="Remover Curso" class="fa fa-trash"></i>
                            </a>

                          </td>
                        </tr>
                      </tbody></table>

                      <p></p>
<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m55" class="modalAjuda collapse">




  <p>A Adição de Tipo de Certificado encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-file-o"></i>  Tipo de Certificado &gt; <i aria-hidden="true" class="glyphicon glyphicon-plus"></i> Novo Tipo de Certificado. </p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela de Novo Tipo de Certificado serve para  cadastrar um novo tipo de certificado ao projeto.
                      A princípio, os dados a serem inseridos são:

                    </p>
                    <ul>
                      <li>Título: nome do tipo de certificado</li>
                      <li>Tipo da Atividade: tipo da Atividade do certificado</li>
                      <li>Legenda do Campo Genérico: serve como referência para que os coordenadores saibam o que preencher no Campo Genérico</li>
                      <li>Texto: texto padrão do tipo de certificado contendo no máximo 500 caracteres,
                        informa qual será o formato do certificado para ser usado posteriormente, definindo macros e quais campos serão obrigatórios.
                        <ul>
                          <li>Nome: local onde será inserido o nome ddo participante</li>
                          <li>Documento: local onde será inserido o documento (cpf ou passaporte) do participante</li>
                          <li>Coautores: local onde serão inseridos os nomes dos coautores, caso o trabalho apresentado possuir mais de um autor</li>
                          <li>Atividade: Local onde será inserido o nome da Atividade</li>
                          <li>Carga horária: local onde será preenchida a quantidade de carga horária</li>
                          <li>Atividade: local onde será preenchido o tipo de atividade que foi realizada</li>
                          <li>Função: Local onde será inserida a função exercida pelo participante</li>
                          <li>LotAtividade: Local onde será inserido o local de LotAtividade aonde foi relizada a Atividade</li>
                          <li>Data Inicial: Local onde será inserida a data de início cadastrada para o participante</li>
                          <li>Data Final: Local onde será inserido a data de final cadastrada para o participante</li>
                          <li>Título: Local onde será inserido o título da atividade/trabalho</li>
                          <li>Campo Genérico: Local onde será inserido o conteúdo preenchido no Campo Genérico.</li>
                        </ul>
                        Por padrão, o texto vem justificado.
                      </li>
                    </ul>
                    <p>
                      Após o preenchimento das informAtividades acima, é necessário clicar no botão <button type="button" class="btn btn-success">Salvar</button>.
                    </p>

                    <p>
                      No modo de adição, há a opção de cancelar a adição de modelo, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Cancelar</button>.
                    </p>
                    <p>
                      <strong>ObservAtividade:</strong> Os administradores do sistema (AGETIC) tem acesso a dois campos adicionais:
                      "Descrição da Assinatura do Coordenador" e "Descrição da Assinatura do Responsável pela Unidade".
                      Através destes campos, é possível alterar o texto padrão que aparece abaixo das assinaturas do Coordenador e do Responsável pela Unidade.
                    </p>

<!--
</div>
</div>
-->
</div>
<!--Divisória de conteúdo modal-->
<div id="m56" class="modalAjuda collapse">



  <p>A VisualizAtividade do Tipo de Certificado encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-file-o"></i>  Tipo de Certificado &gt; <i aria-hidden="true" class="glyphicon glyphicon-search"></i> Visualizar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->
                    <p>
                      A tela para Visualizar Tipo de Certificado serve para visualizAtividade detalhada sobre o tipo de certificado selecionado.
                    </p>
                    <p>
                      As informAtividades do tipo de certificado a serem visualizadas são:
                    </p>
                    <ul>
                      <li>Título: nome do tipo de certificado</li>
                      <li>Tipo da Atividade: tipo da Atividade que foi desenvolvida</li>
                      <li>Texto: texto padrão do tipo de certificado contendo no máximo 500 caracteres</li>
                    </ul>
                    <p>
                      Para editar o tipo de certificado, primeiro, é necessário clicar no botão
                      <button type="button" class="btn btn-warning"> Editar Certificado</button>.
                      Aparecerá uma nova janela, na qual será possível a edição dos dados do tipo selecionado.
                    </p>
                    <p>
                      No modo de visualizAtividade, há a opção de apagar o tipo, é necessário clicar no botão
                      <button type="button" class="btn btn-danger">Apagar Certificado</button> e depois confirmar.
                    </p>

                    <strong>*Tipos de Certificado alterados e/ou deletados não afetarão os certificados já gerados.</strong>

<!--
</div>
</div>
-->
</div>

<!--Divisória de conteúdo modal-->
<div id="m57" class="modalAjuda collapse">




  <p>A Edição do Tipo de Certificado encontra-se no seguinte caminho: <i aria-hidden="true" class="glyphicon glyphicon-home"></i> Início &gt; <i aria-hidden="true" class="glyphicon glyphicon-gears"></i> ConfigurAtividades &gt; <i aria-hidden="true" class="glyphicon glyphicon-file-o"></i>  Tipo de Certificado &gt; <i aria-hidden="true" class="glyphicon glyphicon-pencil"></i> Editar</p>
<!--
                <div class="box box-success col-xs-12">
                    <div class="box-header">
                    -->

                    <p>
                      A tela para Editar Tipo de Certificado serve para edição dos dados do mesmo.
                    </p>
                    <p>
                      As informAtividades do Tipo de Certificado a serem editadas são:
                    </p>
                    <ul>
                      <li>Título: nome do tipo de certificado</li>
                      <li>Tipo da Atividade: tipo da Atividade do certificado</li>
                      <li>Legenda do Campo Genérico: serve como referência para que os coordenadores saibam o que preencher no Campo Genérico</li>
                      <li>Texto: texto padrão do tipo de certificado contendo no máximo 500 caracteres,
                        informa qual será o formato do certificado para ser usado posteriormente, definindo macros e quais campos serão obrigatórios.
                        <ul>
                          <li>Nome: local onde será inserido o nome ddo participante</li>
                          <li>Documento: local onde será inserido o documento (cpf ou passaporte) do participante</li>
                          <li>Coautores: local onde serão inseridos os nomes dos coautores, caso o trabalho apresentado possuir mais de um autor</li>
                          <li>Atividade: Local onde será inserido o nome da Atividade</li>
                          <li>Carga horária: local onde será preenchida a quantidade de carga horária</li>
                          <li>Atividade: local onde será preenchido o tipo de atividade que foi realizada</li>
                          <li>Função: Local onde será inserida a função exercida pelo participante</li>
                          <li>LotAtividade: Local onde será inserido o local de LotAtividade aonde foi relizada a Atividade</li>
                          <li>Data Inicial: Local onde será inserida a data de início cadastrada para o participante</li>
                          <li>Data Final: Local onde será inserido a data de final cadastrada para o participante</li>
                          <li>Título: Local onde será inserido o título da atividade/trabalho</li>
                          <li>Campo Genérico: Local onde será inserido o conteúdo preenchido no Campo Genérico.</li>
                        </ul>
                        Por padrão, o texto vem justificado.
                      </li>
                    </ul>
                    <p>
                      No modo de edição, após o preenchimento das informAtividades acima, é necessário clicar no botão
                      <button type="button" class="btn btn-success">Salvar</button>.
                    </p>
                    <p>
                      Caso deseje cancelar as modificAtividades basta clicar no botão
                      <button type="button" class="btn btn-danger">Cancelar</button> e depois confirmar.
                    </p>
                    <p>
                      <strong>ObservAtividade:</strong> Os administradores do sistema (AGETIC) tem acesso a dois campos adicionais:
                      "Descrição da Assinatura do Coordenador" e "Descrição da Assinatura do Responsável pela Unidade".
                      Através destes campos, é possível alterar o texto padrão que aparece abaixo das assinaturas do Coordenador e do Responsável pela Unidade.
                    </p>

                    <strong>*Tipos de Certificado alterados e/ou deletados não afetarão os certificados já gerados.</strong>
<!--
</div>
</div>
-->
</div>
</div>

