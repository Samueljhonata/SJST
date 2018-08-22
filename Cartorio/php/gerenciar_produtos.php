<?php
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$cod = $_POST['cod'];
$minimo = $_POST['minimo'];
$produto = $_POST['produto'];
$retirar = $_POST['retirar'];

$aa= $quantidade+$adicionar-$retirar;
$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("UPDATE `cartorio`.`inventario` SET `produto` = '$produto', `minimo` = '$minimo' WHERE `inventario`.`cod` = $cod");
header("Location: inventario.php?a=2");


?>