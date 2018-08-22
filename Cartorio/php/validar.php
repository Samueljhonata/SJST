<?php 
session_start();

$usuario= $_POST['usuario'];
$senha= $_POST['senha'];
$hoje= $_POST['hoje'];

$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$db = new PDO($dsn, $username, $password);
$nume=0;
$a=0;
$result = $db->query("SELECT * FROM usuarios WHERE nome LIKE '$usuario' AND senha LIKE '$senha'", PDO::FETCH_ASSOC);
foreach ($result as $row) {
//o usuario
$usuario[$nume]="{$row['nome']}";
$senha[$nume]="{$row['senha']}";
$nivel[$nume]="{$row['nivel']}";

$a++;
$nume = $nume + 1;
}

$result->closeCursor();

if ($a>0){
$_SESSION['usuario']= $usuario;
$_SESSION['nivel']= $nivel[0];
$_SESSION['hoje']= $hoje;
header("Location: pagina_principal.php");
}
else{
$_SESSION['erro']= 1;
header("Location: index.php");

}
?>