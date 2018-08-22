<?php
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$id = $_POST["id"];
$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("DELETE FROM `cartorio`.`usuarios` WHERE `usuarios`.`id` = $id");
header("Location: administracao.php");
?>
<form/>