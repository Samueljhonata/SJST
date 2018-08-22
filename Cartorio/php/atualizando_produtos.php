<?php
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$cod = $_POST['cod'];
$quantidade = $_POST['quantidade'];
$adicionar = $_POST['adicionar'];
$retirar = $_POST['retirar'];

$aa= $quantidade+$adicionar-$retirar;
$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("UPDATE `cartorio`.`inventario` SET `quantidade` = '$aa' WHERE `inventario`.`cod` = $cod");
header("Location: inventario.php");

?>