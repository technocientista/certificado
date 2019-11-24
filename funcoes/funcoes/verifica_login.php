<?php
session_start();
if (!$_SESSION['usuario']) {
	# code...
	header('Location:../index.php');
	exit();
}