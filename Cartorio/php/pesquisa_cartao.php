<?php
session_start();

$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$db = new PDO($dsn, $username, $password);
$nume=0;
$a=0;
if (isset($_POST['cpf'])){
$cpf= $_POST['cpf'];
$result = $db->query("SELECT * FROM cartoes WHERE cpf LIKE '%$cpf%' ", PDO::FETCH_ASSOC);
foreach ($result as $row) {
//o usuario
$nome[$nume]="{$row['nome']}";
$cpf_p[$nume]="{$row['cpf']}";
$salvo[$nume]="{$row['salvo']}";

$a++;
$nume = $nume + 1;
}

$result->closeCursor();
echo "$nome[0]<br> $cpf[0] <br><img=  <img src='cartoes/'$salvo[0]'' width='1117px' height='550px' />
$salvo[0]";

$_SESSION['salvo']= $salvo[0];
$_SESSION['nome']= $nome[0];
$_SESSION['cpf_p']= $cpf_p[0];
}



if (isset($_POST['nom'])){
$nom= $_POST['nom'];
$result = $db->query("SELECT * FROM cartoes WHERE nome LIKE '%$nom%' ", PDO::FETCH_ASSOC);
foreach ($result as $row) {
//o usuario
$nome[$nume]="{$row['nome']}";
$cpf_p[$nume]="{$row['cpf']}";
$salvo[$nume]="{$row['salvo']}";

$a++;
$nume = $nume + 1;
}

$result->closeCursor();
echo "$nome[0]<br> $cpf[0] <br><img=  <img src='cartoes/'$salvo[0]'' width='1117px' height='550px' />
$salvo[0]";

$_SESSION['salvo']= $salvo[0];
$_SESSION['nome']= $nome[0];
$_SESSION['cpf_p']= $cpf_p[0];
}

header("Location: cartao.php");
?>
