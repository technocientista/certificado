<?php
$servidor="localhost";
$usuario="id11533563_magalhaes";
$senha="201089";
$baseDeDados="id11533563_transito";

$conn = new mysqli($servidor,$usuario,$senha,$baseDeDados);
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
    echo "ERRO NA CONEXÃO!!!";
}


?>
