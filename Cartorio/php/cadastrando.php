<html>
<head>
<title>A</title>
</head>
	<body>
<?php
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$nivel = $_POST["nivel"];
if ($nome<>"" and $nivel<>"" ){
$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("INSERT INTO usuarios VALUES ('', '$nome' , '$senha', '$nivel')");
echo "Cadastrado";
$texto= "Cadastrado";
}
else{
echo "Nao cadastrado";
$texto= "Nao Cadastrado";
}
header("Location: administracao.php");

?>


</body>
</html>