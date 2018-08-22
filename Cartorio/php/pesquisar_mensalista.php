<!DOCTYPE html>
<?php
session_start();
$usuario= $_SESSION['usuario'];
$nivel= $_SESSION['nivel'];
if (isset ($usuario)){}else {header("Location: index.php");
}
?>
<html>
<head>
<title>Bem Vindo, <?php echo $usuario; ?></title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
 </head>
 <body> 
   <a  id="botao" href="pagina_principal.php">&nbsp Início &nbsp </a>
&nbsp    <a  id="botao" href="cartao.php"> &nbsp Pesquisar Cartão &nbsp </a>
&nbsp <a  id="botao" href="cartao_novo.php"> &nbsp Novo Cartão &nbsp </a>
&nbsp <a  id="botao" href="caixa.php"> &nbsp Caixa &nbsp </a>
&nbsp <?php if ($nivel==3) { echo "<a  id='botao' href='administracao.php' style='color: yellow;'> &nbsp Administração &nbsp </a>";} ?>
&nbsp <a  id="botao" href="sair.php"> &nbsp Sair &nbsp </a>
<a id="texto"> <?php 
 
 echo "<div><br> <a  id='botao' style='background-color: rgb(50,50,50);'>Pesquisar Mensalista</a>>>>> <br><br><br>";
 ?>
 <form method="post">
 Nome: <input type="text" name="mensalista" /> &nbsp &nbsp
 <input type="submit" id="botao" value="Pesquisar" style="background-color: green;"/>
 <br><br>

 </form>
 <?php if (isset($_POST['mensalista'])){
$mensalista= $_POST['mensalista'];
 echo "Mensalista: $mensalista";
 $dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$db = new PDO($dsn, $username, $password);
$nume=0;


$result = $db->query("SELECT * FROM `clientes` WHERE `nome` LIKE '%$mensalista%'", PDO::FETCH_ASSOC);
foreach ($result as $row) {

$codigo[$nume]="{$row['codigo']}";
$tel[$nume]="{$row['telefone']}";
$perm1[$nume]="{$row['perm1']}";
$perm2[$nume]="{$row['perm2']}";
$perm3[$nume]="{$row['perm3']}";
$perm4[$nume]="{$row['perm4']}";
$perm5[$nume]="{$row['perm5']}";
$debito[$nume]="{$row['debito']}";
$nome[$nume]="{$row['nome']}";

$nume = $nume + 1;


$result->closeCursor();
}

$a00 = 1;
$v = 0;
echo "
 <table style='font-size: 18px;'><tr id='titulo' style='font-size: 25px;'> <td>Cod</td><td>Nome</td><td>Telefone</td><td>Permição 1</td><td>Permição 2</td><td>Permição 3</td><td>Permição 4</td><td>Permição 5</td><td>Débito</td></tr>";
while ($a00 <= $nume){
//if ($nome[$v]==$mensalista) {
echo "	<tr><td>$codigo[$v]</td>
<td>$nome[$v]</td>
<td>$tel[$v]</td>
<td>$perm1[$v]</td>
<td>$perm2[$v]</td>
<td>$perm3[$v]</td>
<td>$perm4[$v]</td>
<td>$perm5[$v]</td>
<td>$debito[$v]</td>
</tr>
";

 $v = $v + 1;
$a00 = $a00 + 1;
 }

 echo "</table>";

  
 unset($_SESSION["mensalista"]);}
 
 ////////////////
 

 
 ?>
 
 </div>
<br><br>
 </form></a></body>
 </html>