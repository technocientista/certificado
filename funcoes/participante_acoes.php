<?php
session_start();
include 'conn.php';
$apagados = 0;
$emitidos = 0;
$erros = 0;

$arr = $_POST['check'];


if (!$arr) {
    $_SESSION['msg'] = "Nenhum item foi selecionado";
    $_SESSION['check'] = 1;
    header("Location: ../participante.php");
    exit();
}


switch (get_post_action('apagar', 'emitir')) {
    case 'apagar':


    foreach($arr as $check){

        $id = $check;

        $sql = "SELECT * FROM participa";

        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
                if ($id == $linha["id_participa"]) {
            # code...
                    $status_participa = $linha['status_participa'];
                }


            }
        }

        if ($status_participa) {
    # code...
            $sql2 = "UPDATE participa SET status_participa = 0, fk_situacao_ativ_id_situacao_ativ = 6 WHERE id_participa='$id'";
            $resultado_usuario = mysqli_query($conn, $sql2);
            if(mysqli_affected_rows($conn)){

                $apagados = $apagados +1;

            }else{

                $_SESSION['msg'] = "Erro de conexão: Não foi possível aprovar os aluno";
                $_SESSION['check'] = 1;
                header("Location: ../participante.php");
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
    header("Location: ../participante.php");
    exit();

    break;

    case 'emitir':
    //1-verificar se a situacao está assinada.
    //2-gerar chave.
    //3-gravar na tabela certificado, dados da participação (atividade e usuario)
    //4-enviar dados do certificado para o template
    //5-executar gerar pdf


    foreach($_POST["check"] as $check){
        $id = $check;

        $sql = "SELECT * FROM (((participa AS p 
        JOIN usuario AS u  ON p.fk_usuario_id_usuario = u.id_usuario)
        JOIN situacao_ativ AS s ON p.fk_situacao_ativ_id_situacao_ativ = s.id_situacao_ativ)
        JOIN atividade AS a ON p.fk_atv_id_atv = a.id_atv)";

        $resultado = $conn->query($sql);

        //SELECIONA A LINHA DO ID MARCADO NO CHECKBOX
        if ($resultado->num_rows > 0) {
            while($linha = $resultado->fetch_assoc()) {
                if ($id == $linha["id_participa"]) {


                    $login                  = $linha["login"];
                    $tel_usuario            = $linha["tel_usuario"];

                    $id_participa           = $linha["id_participa"];
                    $status_participa       = $linha['status_participa'];
                    $situacao_participa     = $linha['id_situacao_ativ'];
                }


            }
        }

        //VERIFICA SE A SITUAÇÃO DA PARTICIPAÇÃO ESTÁ EM ASSINADO
        if ($status_participa && $situacao_participa == 2) {
            $chave = microtime();
            $a = explode(' ', $chave);
            $a[0] = str_replace('.', '', $a[0]);
            $a[0] = base_convert($a[0], 10, 36);
            $a[1] = base_convert($a[1], 10, 36);
            $chave_certificado = $a[0].$a[1];

            
            //INSERE OS DADOS DE PARTICIPAÇÃO NO CERTIFICADO
            $sql = "INSERT INTO certificado(fk_participa_id_participa, fk_situacao_certif_id_situacao_certif, id_certificado) VALUES ('$id', 1, '$chave_certificado')";
            $resultado_usuario = mysqli_query($conn, $sql);
            if(mysqli_affected_rows($conn)){

                $sql = "UPDATE participa SET fk_situacao_ativ_id_situacao_ativ = 4 WHERE id_participa='$id'";
                $resultado_usuario = mysqli_query($conn, $sql);
                if(mysqli_affected_rows($conn)){

                    $emitidos = $emitidos + 1;

                }else{

                    $_SESSION['msg'] = "Erro: Status não atualizado";
                    $_SESSION['check'] = 1;
                    header("Location: ../participante.php");
                    exit();
                } 


            }else{

                $_SESSION['msg'] = "Erro de conexão: Não foi possível aprovar os aluno";
                $_SESSION['check'] = 1;
                header("Location: ../participante.php");
                exit();
            }
        }else{

            $erros = $erros + 1;
        }

        

    }

    



    $_SESSION['msg'] = "<strong>".$erros."</strong> erros. <strong>".$emitidos."</strong> certificados emitidos.";
    $_SESSION['check'] = 1;
    $_SESSION['alert_color'] = 1;
    header("Location: ../participante.php");
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