
<!doctype html>
<html lang="pt-br">

<head>

 <head>

   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
   <meta charset="utf-8">
   <title></title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
   rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="estilo.css">

 </head>

 <body>

  <header class="bg-dark">

    <h3 class="bg-dark container-fluid text-white"> Faça login <img src="img/perfil.png" width="4%"> </h3>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <h3>Sistema Certificado</h3>
      </a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

          <li class="nav-item">
            <a class="nav-link " href="emitir.html"> Certificado</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="suporte.html">Suporte</a>
          </li>
          <li class="nav-item">
            <li class="nav-item ">
              <a class="nav-link " href="login.html">Entrar</a>
            </li>
            <li class="nav-item">

            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
              <button class="btn btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
            </form>
          </div>
        </nav>


      </header>




      <div class="navbar-wrapper" >
        <div class="container">
          <nav class="navbar navbar-fixed-top" style="border-radius: 4px; background-color: #FFF;" >
            <div class="container">
              <div class="navbar-header">

                <span class="sr-only"></span>
                <span class="icon-bar" style="background-color: gray;"></span>
                <span class="icon-bar" style="background-color: gray;"></span>
                <span class="icon-bar" style="background-color: gray;"></span>
              </button>
              <a href="file:///C:/Users/IFCE-ALUNO/Documents/GitHub/certificado/TelaInicial.html" class="navbar-brand" style="padding-top: 10px;"> </a> </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right" style="font-weight: bold;">



                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>            
      <div class="row">
        <div class="col-md-8 col-md-offset-2 container">
          <div class="panel panel-default">
            <div class="panel-heading">Entre em contato</div>
            <div class="panel-body">
              <form class="" method="POST" action="https://bitt.com.br/contato/create">
                <input type="hidden" name="_token" value="murH31tfOfKCsoufbcZAKWJQd0GVnpuKDJK7sU9s">
                <div class="form-group col-md-12 has-error">
                  <label for="assunto">Assunto <span class="text-danger">*</span></label>
                  <select class="form-control" name="assunto">
                    <option value="0">--- Escolha --- </option>
                    <option value="4" >Alteração nos meus dados junto à plataforma</option>
                    <option value="12">Cancelar inscrição já paga</option>
                    <option value="5">Dificuldades em realizar um cadastro</option>
                    <option value="6">Dificuldades na inscrição de um Evento</option>
                    <option value="3">Dificuldades no Login</option>
                    <option value="13">Dúvidas em relação à um evento, como local, vagas, horário e etc.</option>
                    <option value="2">Meu e-ticket / chave não é válida, ou já está vencida</option>
                    <option value="1">Não recebi meu certificado ou meu certificado está com erros</option>
                    <option value="30">Outro assunto</option>
                  </select>
                  <span class="help-block">
                    <strong>Favor escolher o assunto deste contato.</strong>
                  </span>
                </div>
                <div class="form-group col-md-12">
                  <label for="name">Seu nome <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name" value="" required="">
                </div>

                <div class="form-group col-md-6">
                  <label for="email">Seu e-mail <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" value="" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="telefone">Seu telefone (c/ DDD)</label>
                  <input type="text" class="form-control" name="telefone" value="" maxlength="11" placeholder="opcional">
                </div>
                <div class="form-group col-md-12">
                  <label for="msg">Mensagem <span class="text-danger">*</span><small>(descreva a dúvida ou dificuldade, informe a msg. de erro quando houver)</small></label>
                  <textarea class="form-control" name="msg" maxlength="191" required=""></textarea>
                </div>
                <div class="form-group col-md-12 text-right">
                  <a href="https://bitt.com.br/contato/formulario?_token=sCh13fNqire5jrcho4L3FD4nLBLPj4SjNepxbUzB&amp;assunto=0" class="btn btn-default">Voltar</a>&nbsp;&nbsp;<button class="btn btn-success" type="submit">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <footer>
        <address>
          <strong>Sistema de Certificados</strong><br>
          Av Paulino Felix, 3185, Centro<br>
          Acopiara, CE<br>
          Tel: (88) 3565-2751 ou 5083-3884
        </address>
        <address>
          Email: certsis@gmail.com
        </address>
      </footer>
    </style>




  </body>

  </html>
