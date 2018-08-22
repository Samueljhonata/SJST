<?php
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
session_start();
$usuario = $_SESSION["usuario"];
$data = $_SESSION["hoje"];

if (isset ($_POST['rec_firma'])){
$rec_firma = $_POST["rec_firma"];
$autenticacao = $_POST["autenticacao"];
$a_eletronica = $_POST["a_eletronica"];

$cartao = $_POST["cartao"];}




if ($rec_firma<>""){
$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("INSERT INTO `cartorio`.`caixa` (`id`, `rec_firma`, `autenticacao`, `a_eletronica`, `cartao`, `usuario`, `data`) VALUES ('', '$rec_firma' , '$autenticacao', 'a_eletronica', '$cartao', '$usuario', '$data')");
}


//Se for mensalista:
/*if (isset($_POST['mensalista'])){
$mensalista = $_POST["mensalista"];
$servicos= $seme+$auten+$autenticacao+$cartao;
$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("INSERT INTO rel_clientes VALUES ('', '$mensalista' , '$servicos', '$data', '$usuario', '0')");

}*/
//Se for entrada
if (isset($_POST['entrada'])){
$entrada = $_POST["entrada"];
if ($entrada<>""){
$descricao_entrada = $_POST["descricao_entrada"];


$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("INSERT INTO entradas VALUES ('', '$entrada' , '$descricao_entrada', '$usuario', '$data')");
}
}
//Se for saida
if (isset($_POST['entrada'])){
$saida = $_POST["saida"];
if ($saida<>""){
$descricao_saida = $_POST["descricao_saida"];

$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("INSERT INTO retiradas VALUES ('', '$saida' , '$descricao_saida', '$usuario', '$data')");
}
}

//Se for anotação
if (isset($_POST['anotacao'])){
$anotacao = $_POST["anotacao"];
if ($anotacao<>""){
$servicos= $seme+$auten+$autenticacao;
$cartao = $_POST["cartao"];

$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("INSERT INTO anotacoes VALUES ('', '$anotacao' , '$servicos', '$cartao', '$a_eletronica', '$usuario', '$data')");
}
}
header("Location: caixa.php");
?>