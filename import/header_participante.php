<?php include 'funcoes/verifica_session_start.php'; ?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand btn btn-light " href="index.php">

                <i class="material-icons text-success">
                    home
                </i>
            </a>
            <?php


            if (isset($_SESSION['id'])) {

                ?>
                <a class="navbar-brand btn btn-light " href="funcoes/logout.php">

                    <i class="material-icons text-success">
                        logout
                    </i>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a id="participante" class="nav-link" href="participante.php">Minhas atividades</a>

                        </li>
                        <li class="nav-item ">
                            <a id="novas_atividades" class="nav-link" href="novas_atividades.php">Novas atividades</a>

                        </li>
                        <li class="nav-item ">
                            <a id="meus_certificados" class="nav-link" href="meus_certificados.php">Meus certificados</a>

                        </li>
                    </ul>
                </div>
                <?php  
            }
            ?>
        </div>
    </nav>
</header>