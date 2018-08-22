<?php
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$cod = $_POST['cod'];

$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("DELETE FROM `inventario` WHERE `cod`= $cod");
header("Location: inventario.php?a=2");


?>