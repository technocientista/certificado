<!doctype html>
<html lang="pt-br">

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
            <a class="nav-link active" href="emitir.html"> Certificado</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="suporte.html">Suporte</a>
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


            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div style="margin-top: 100px;">
      <div class="container" style="margin-top: 60px;">
        <div class=" col-md-12 text-center">
          <h2>Emitir ou consultar um certificado</h2>

        </div>


      </div>
      <div class="col-md-12 text-center">
        <br>
        <h4><b>Informe seu CPF.</b><br><small></small></h4>

      </div>

      <div class="form-group justify-content-center container">
        <form action="" method="POST">
          <input type="hidden" name="_token" value="2tjuEq1qB7DDhw82vuSJDc8bj1wTkCGsLpq4GVQy">
          <div class="input-group">
            <input type="text" name='chave' class="form-control" maxlength="12" required placeholder="Entre com seu CPF">
            <span class="input-group-btn">
              <a class="btn btn-success" href="certificado.html"><span class="glyphicon glyphicon-search"></span>Próximo</a>
            </span>
          </div>
        </form>
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


</body>

</html>