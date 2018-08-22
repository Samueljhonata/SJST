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
$cpf = $_POST["cpf"];
$salvo = "$cpf.jpj";
if ($nome<>"" and $nivel<>"" ){
$db = new PDO($dsn, $username, $password);

$codigoUsuario = 1;
$query = mysql_query("SELECT id FROM cliques WHERE codigo_usuario = {$codigoUsuario}");
$total = mysql_num_rows($query);

if($total == 0){
	echo "Clique válido, podemos salvar no banco";
	unset($query);
	$query = mysql_query("INSERT INTO cliques (codigo_usuario) VALUES({$codigoUsuario})");
}else{
	echo "Já existe um clique para esse usuário no banco!";
}

/*
$numRows = $db->exec("INSERT INTO cartoes VALUES ('', '$nome' , '$cpf', '$salvo')");
echo "Cadastrado";
$texto= "Cadastrado";
}
else{
echo "Nao cadastrado";
$texto= "Nao Cadastrado";
}
header("Location: administracao.php");
*/
?>


</body>
</html>