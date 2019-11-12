<header>
        <nav class="navbar navbar-nti navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand nome-sistema" href="https://certificados.ufms.br/home">
                        <span class="hidden-sm hidden-xs">Sistema de Certificados</span>
                        <span class="visible-sm visible-xs">SICERT</span>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!---->
                    <div>
                        <form method="post" accept-charset="utf-8" class="navbar-form navbar-right" role="form" action="https://certificados.ufms.br/">
                            <div style="display:none;">
                                <input type="hidden" name="_method" class="form-control" value="POST">
                            </div>
                            <div class="form-group text required">
                                <input type="text" name="passaporte" class="form-control" placeholder="CPF ou passaporte" autofocus="autofocus" required="required" id="passaporte">
                            </div>&nbsp;
                            <div class="form-group password required">
                                <input type="password" name="senha" class="form-control" placeholder="Senha" required="required" id="senha" value="">
                            </div>&nbsp;
                            <button class="btn btn-info" type="submit">Entrar</button>
                        </form>            
                    </div>
                </div>
            </div>
        </nav>
    </header>