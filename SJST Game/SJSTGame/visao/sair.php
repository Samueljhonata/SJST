<?php
	session_start();
	/*unset($_SESSION['usuario']);
	unset($_SESSION['nivel_acesso']);*/
	unset($_SESSION['tipo_vila']);
	header("Location: index.php");
?>
