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
$tel = $_POST["tel"];
$perm1 = $_POST["perm1"];
$perm2 = $_POST["perm2"];
$perm3 = $_POST["perm3"];
$perm4 = $_POST["perm4"];
$perm5 = $_POST["perm5"];
$debito = $_POST["debito"];

if ($nome<>""){
$db = new PDO($dsn, $username, $password);

$numRows = $db->exec("INSERT INTO clientes VALUES ('', '$nome' , '$tel', '$perm1', '$perm2', '$perm3', '$perm4', '$perm5', '$debito')");
/*
$nume=0;
$a=0;
$result = $db->query("SELECT * FROM clientes WHERE nome LIKE '$nome'", PDO::FETCH_ASSOC);
foreach ($result as $row) {
 
 $_POST['cod']= "{$row['cod']}"; 
  $_POST['mensalista']= "{$row['nome']}"; 
  $_POST['tel']= "{$row['tel']}";
  $_POST['perm1']= "{$row['perm1']}";
  $_POST['perm2']= "{$row['perm2']}";
  $_POST['perm3']= "{$row['perm3']}";
  $_POST['perm4']= "{$row['perm4']}";
  $_POST['perm5']= "{$row['perm5']}";
  $_POST['debito']= "{$row['debito']}";
  }

$result->closeCursor();*/
 session_start();
 $_SESSION['mensalista']= $nome;
}
else{
echo "Nao cadastrado";
$texto= "Nao Cadastrado";
}
header("Location: novo_mensalista.php");

?>


</body>
</html>