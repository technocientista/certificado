<?php
include 'verifica_session_start.php';
include 'conn.php';

$id = $_GET['id'];

$sql2 = "SELECT * FROM certificado ";

$result = $conn->query($sql2);

if ($result->num_rows > 0) {

    while($linha = $result->fetch_assoc()) {
        if ($id == $linha["id_certificado"]) {

            $_SESSION['msg'] = "O certificado é válido";
            $_SESSION['check'] = 1;
            $_SESSION['alert_color'] = 1;
            header("Location: ../validar.php");
            exit();
            

        }else{
            $_SESSION['msg'] = "O código digitado não é válido";
            $_SESSION['check'] = 1;
            
            header("Location: ../validar.php");
            exit();
        }

    }
}else{
    $_SESSION['msg'] = "O código digitado não é válido";
    $_SESSION['check'] = 1;
    
    header("Location: ../validar.php");
    exit();
}

