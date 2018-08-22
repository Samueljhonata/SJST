<?php
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$minimo = $_POST['minimo'];

$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("INSERT INTO `inventario` VALUES ('', '$produto' , '$quantidade', '$minimo')");
header("Location: inventario.php?a=2");

?>