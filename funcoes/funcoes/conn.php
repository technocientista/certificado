<?php
$servidor="localhost";
$usuario="root";
$senha="";
$baseDeDados="transito";

$conn = new mysqli($servidor,$usuario,$senha,$baseDeDados);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
    echo "ERRO NA CONEXÃO!!!";
}


?>
