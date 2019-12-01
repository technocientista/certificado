<?php
session_start();
include 'conn.php';
$correcao = 0;
$cancelados = 0;
$assinados = 0;
$erros = 0;

$arr = $_POST['check'];


if (!$arr) {
    $_SESSION['msg'] = "Nenhum item foi selecionado";
    $_SESSION['check'] = 1;
    header("Location: ../diretor.php");
    exit();
}




switch (get_post_action('correcao', 'cancelar', 'assinar')) {
    case 'correcao':


    foreach($arr as $check){

        $id = $check;

        $sql = "SELECT * FROM participa";

        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
                if ($id == $linha["id_participa"]) {
            # code...
                    $status_participa = $linha['status_participa'];
                    $situacao_participa = $linha['fk_situacao_ativ_id_situacao_ativ'];
                }


            }
        }

        if ($status_participa && $situacao_participa == 3 && $situacao_participa != 6) {
    # code...
            $sql = "UPDATE participa SET fk_situacao_ativ_id_situacao_ativ = 5 WHERE id_participa='$id'";
            $resultado_usuario = mysqli_query($conn, $sql);
            if(mysqli_affected_rows($conn)){

                $correcao = $correcao +1;

            }else{

                $_SESSION['msg'] = "Erro de conexão: Não foi possível enviar para correção";
                $_SESSION['check'] = 1;
                header("Location: ../diretor.php");
                exit();
            }
        }else{

            $erros = $erros + 1;
        }


    }

    //FIM DO FOREACH...

    $_SESSION['msg'] = "<strong>".$correcao."</strong> aprovações foram enviadas para correção.";
    $_SESSION['check'] = 1;
    $_SESSION['alert_color'] = 1;
    header("Location: ../diretor.php");
    exit();

    break;

    case 'cancelar':



    foreach($_POST["check"] as $check){
        $id = $check;

        $sql = "SELECT * FROM participa";

        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
                if ($id == $linha["id_participa"]) {
            # code...
                    $status_participa = $linha['status_participa'];
                    $situacao_participa = $linha['fk_situacao_ativ_id_situacao_ativ'];
                }


            }
        }      

        if ($status_participa && $situacao_participa == 3 && $situacao_participa != 6) {
    # code...
            $sql = "UPDATE participa SET fk_situacao_ativ_id_situacao_ativ = 6 WHERE id_participa='$id'";
            $resultado_usuario = mysqli_query($conn, $sql);
            if(mysqli_affected_rows($conn)){

                $cancelados = $cancelados + 1;

            }else{

                $_SESSION['msg'] = "Erro de conexão: Não foi possível aprovar os aluno";
                $_SESSION['check'] = 1;
                header("Location: ../diretor.php");
                exit();
            }
        }else{

            $erros = $erros + 1;
        }
    }

    $_SESSION['msg'] = "<strong>".$cancelados."</strong> aprovações foram canceladas.";
    $_SESSION['check'] = 1;
    $_SESSION['alert_color'] = 1;
    header("Location: ../diretor.php");
    exit();


    break;

    case 'assinar':

    foreach($_POST["check"] as $check){
        $id = $check;

        $sql = "SELECT * FROM participa";

        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
                if ($id == $linha["id_participa"]) {
            # code...
                    $status_participa = $linha['status_participa'];
                    $situacao_participa = $linha['fk_situacao_ativ_id_situacao_ativ'];
                }


            }
        }

        if ($status_participa && $situacao_participa == 3) {
    # code...
            $sql2 = "UPDATE participa SET fk_situacao_ativ_id_situacao_ativ = 2 WHERE id_participa='$id'";
            $resultado_usuario = mysqli_query($conn, $sql2);
            if(mysqli_affected_rows($conn)){

                $assinados = $assinados + 1;

            }else{

                $_SESSION['msg'] = "Erro de conexão: Não foi possível aprovar os aluno";
                $_SESSION['check'] = 1;
                header("Location: ../diretor.php");
                exit();
            }
        }else{

            $erros = $erros + 1;
        }
    }

    $_SESSION['msg'] = "<strong>".$assinados."</strong> aprovações foram assinadas.";
    $_SESSION['check'] = 1;
    $_SESSION['alert_color'] = 1;
    header("Location: ../diretor.php");
    exit();

    break;

    default:
        //no action sent
}


function get_post_action($name){
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}
?>