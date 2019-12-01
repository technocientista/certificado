<?php
session_start();
include 'conn.php';
$aprovados = 0;
$reprovados = 0;
$erros = 0;

$arr = $_POST['check'];


if (!$arr) {
    $_SESSION['msg'] = "Nenhum item foi selecionado";
    $_SESSION['check'] = 1;
    header("Location: ../responsavel.php");
    exit();
}


switch (get_post_action('aprova', 'reprova')) {
    case 'aprova':


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

        if ($status_participa && $situacao_participa != 3) {
    # code...
            $sql = "UPDATE participa SET fk_situacao_ativ_id_situacao_ativ = 3 WHERE id_participa='$id'";
            $resultado_usuario = mysqli_query($conn, $sql);
            if(mysqli_affected_rows($conn)){

                $aprovados = $aprovados +1;

            }else{

                $_SESSION['msg'] = "Erro de conexão: Não foi possível aprovar os aluno";
                $_SESSION['check'] = 1;
                header("Location: ../responsavel.php");
                exit();
            }
        }else{

            $erros = $erros + 1;
        }


    }

    //FIM DO FOREACH...

    $_SESSION['msg'] = "<strong>".$aprovados."</strong> alunos foram aprovados.";
    $_SESSION['check'] = 1;
    $_SESSION['alert_color'] = 1;
    header("Location: ../responsavel.php");
    exit();

    break;

    case 'reprova':



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

        if ($status_participa && $situacao_participa != 8) {
    # code...
            $sql = "UPDATE participa SET fk_situacao_ativ_id_situacao_ativ = 8 WHERE id_participa='$id'";
            $resultado_usuario = mysqli_query($conn, $sql);
            if(mysqli_affected_rows($conn)){

                $reprovados = $reprovados + 1;

            }else{

                $_SESSION['msg'] = "Erro de conexão: Não foi possível aprovar os aluno";
                $_SESSION['check'] = 1;
                header("Location: ../responsavel.php");
                exit();
            }
        }else{

            $erros = $erros + 1;
        }
    }

    $_SESSION['msg'] = "<strong>".$reprovados."</strong> alunos foram reprovados.";
    $_SESSION['check'] = 1;

    header("Location: ../responsavel.php");
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