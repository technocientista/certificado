<?php
include 'funcoes/verifica_session_start.php';
if (!$_SESSION['usuario']) {
	# code...
	header('Location:index.php');
	exit();
}