<?php
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$id= $_POST['id'];
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$nivel= $_POST['nivel'];
$db = new PDO($dsn, $username, $password);
if ($nome<>""){
$numRows = $db->exec("UPDATE `cartorio`.`usuarios` SET `nome` = '$nome' WHERE `usuarios`.`id` = $id"); echo "1";}

if ($senha<>""){
$numRows = $db->exec("UPDATE `cartorio`.`usuarios` SET `senha` = '$senha' WHERE `usuarios`.`id` = $id"); echo "2";}

if ($nivel<>""){
$numRows = $db->exec("UPDATE `cartorio`.`usuarios` SET `nivel` = '$nivel' WHERE `usuarios`.`id` = $id"); echo "3";}

echo "Atualizado com sucesso!";
header("Location: administracao.php?a=1");
?>
