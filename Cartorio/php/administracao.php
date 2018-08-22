<!DOCTYPE html>
<?php
session_start();
$usuario= $_SESSION['usuario'];
$nivel= $_SESSION['nivel'];
if (isset ($usuario)){}else {header("Location: index.php");

$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
}
?>
<html>
<head>
<title>Administração do Banco</title>
<meta charset="UTF-8"/>
     <link rel="stylesheet" href="_css/estilo.css"/>
 <style>
p{
font-size: 25pt;
background-color: black;
color: white;
}
 form{
 padding-right:80pt;
 padding-left: 80pt;
 background-color: white;
 color: black;
}
input{
font-size: 20pt;
}
h1 {
background-color: black;
color: white;
font-size: 35pt;
}
	td{
		border: 3px solid #606060;
		border-spacing: 5px;
		background-color: silver;
		padding: 10px;
	}
</style>
</head>
	<body>
	   <a  id="botao" href="pagina_principal.php">&nbsp Início &nbsp </a>
&nbsp    <a  id="botao" href="cartao.php"> &nbsp Pesquisar Cartão &nbsp </a>
&nbsp <a  id="botao" href="cartao_novo.php"> &nbsp Novo Cartão &nbsp </a>
&nbsp <a  id="botao" href="caixa.php"> &nbsp Caixa &nbsp </a>
&nbsp <?php if ($nivel==3) { echo "<a  id='selecionado' href='administracao.php' style='color: yellow;'> &nbsp Administração &nbsp </a>";} ?>
&nbsp <a  id="botao" href="sair.php"> &nbsp Sair &nbsp </a>
	<form><br><a href="" id="botao">Administração dos usuários</a> &nbsp <?php if ($usuario=='Samuel'){ ?> <a  target="_blank" href=http://192.168.0.101/modules/phpmyadmin414x150122094323/#PMAURL-0:index.php?db=&table=&server=1&target=&token=fbbb33fedb3e2d5f54022e6f7b05634b" id="botao">Banco de Dados</a> </form> <?php } ?>
	<form method="post" action="cadastrando.php">
		<p>Cadastrar usuário</p>
		Nome.: <input type="text" name="nome" required/></br></br>
        Senha.: <input type="text" name="senha"/></br></br>
   		Nível..: <input type="number" name="nivel" value="1" min="1" max="3" />
		<input type="submit" value="Cadastrar"/></br></br>
    </form>
	<form method="post" action="atualizando.php" >
		<p>Atualizar</p>
		<input type="number" name="id" style="width: 50px;" placeholder="ID" required />
		<input type="text" placeholder="Nome" name="nome"/>
        <input type="text" placeholder="Senha" name="senha" />
        <input type="number" name="nivel" placeholder="Nível" min="1" max="3"/>
		<input type="submit" value="OK"/></br>	</br>
    </form>
	<form method="post" action="excluindo.php">
		<p>Excluir</p>
		ID: <input type="number" name="id"/>
        <input type="submit" value="OK"/></br>	</br>
    </form><br>
<?php echo "<form method='get'> <input type='hidden' value='1' name='a' /><input type='submit' id='botao' value='Mostrar Usuários'/></form>";

	
	if (isset($_GET['a'])){ if ($_GET['a']==1){
echo "<form  > <input type='hidden'  /><input type='submit' id='botao' value='Ocultar Usuários'/></form>";
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$db = new PDO($dsn, $username, $password);

//$numRows = $db->exec("UPDATE `samuel`.`teste` SET `idade` = '$senha' WHERE `teste`.`nome` = '$nome'");
echo "<h2>Usuários salvos:</h2>";
echo "<table><tr><td>Id</td><td>Nome</td><td>Senha</td><td>Nível</td></tr>";
$result = $db->query('SELECT id, nome, senha, nivel FROM usuarios', PDO::FETCH_ASSOC);
foreach ($result as $row) {
$sa= $row['id'];
if ($sa == 1){
  echo "<tr><td>{$row['id']} </td><td>{$row['nome']} </td><td style= 'color: red'>****</td> <td>{$row['nivel']}</td></tr>";
}else {echo "<tr><td>{$row['id']} </td><td>{$row['nome']} </td><td>{$row['senha']}</td> <td>{$row['nivel']}</td></tr>";}}
 
$result->closeCursor();

unset($db);
echo "</table>";}}
?>

</body>
</html>