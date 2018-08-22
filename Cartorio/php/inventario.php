<!DOCTYPE html>
<?php
session_start();
$usuario= $_SESSION['usuario'];
$nivel= $_SESSION['nivel'];
if (isset ($usuario)){}else {header("Location: index.php");
}
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$db = new PDO($dsn, $username, $password);
?>
<html>
<head>
<title>Programa Cartório -SJST- Inventário</title>
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

<div id="formul" style="position: relative; left: 0px; height: 1100px;">
<a style="font-size: 30pt; background-color: rgb(170,170,170); position: relative; left: 5px; top: 5px;"> &nbsp <b>Inventário Interno &nbsp </b></a>
<br>
<form>
 <input  id="botao" type="submit" value="Geral" style="background-color: rgb(50,50,50); position: relative; left: 0px; top: 10px;" /></form>
 <form><input  type="hidden" name="a" value="1" />
 <input  id="botao" type="submit" value="Administração" style="background-color: rgb(50,50,50); position: relative; left: 110px; top: -50px;" /></form>
 <form><input  type="hidden" name="a" value="2" />
 <input  id="botao" type="submit" value="Novo" style="background-color: rgb(50,50,50); position: relative; left: 340px; top: -109px;" /></form>
<?php echo "<a style='position: relative; top: -100px;'>";
if (isset($_GET['a'])){
//-------------------------------------------------------Administração------------------------------------------------------------------------------------//
if ($_GET['a']==1){echo "<y style=' 
font-size: 30pt;
padding-left: 50px;
padding-right: 50px;
 background-color: black;
 color: white;
'> Administração</y><br><br>
 <table style=' padding-right:80pt;
 padding-left: 80pt;
 background-color: white;
 color: black;
'>
<tr><td style='background-color: gray;'>Cod</td><td style='background-color: gray;'>Produto</td><td style='background-color: gray;'>Quantidade</td><td style='background-color: gray;'>Adicionar</td><td style='background-color: gray;'>Retirar</td></tr>
";
$a= 0;
$result = $db->query("SELECT * FROM `inventario` ORDER BY `inventario`.`produto` ASC", PDO::FETCH_ASSOC);
foreach ($result as $row) {
$a++;
$aa[$a]= $row['cod'];
$bb[$a]= $row['quantidade'];

echo "<tr><td>{$row['cod']}</td> <td>{$row['produto']}</td> <td>{$row['quantidade']}</td> <form method='post' action='atualizando_produtos.php'><input type='hidden' name='cod' value='$aa[$a]'/><input type='hidden' name='quantidade' value='$bb[$a]'/> <td> <input type='number' min='0' name='adicionar'/></td><td> <input type='number' min='0' name='retirar'/></td><td><input type='submit' value='OK' /></td></form></tr> ";

}

$result->closeCursor();
echo "</table>";


echo "</table>";
}
//-------------------------------------------------------Novo------------------------------------------------------------------------------------//

if ($_GET['a']==2){
echo "<y style=' 
font-size: 30pt;
padding-left: 50px;
padding-right: 200px;
 background-color: black;
 color: white;
'> Novo</y><br>";
echo "<form method='post' action='novo_produto.php' style=' padding-right:80pt;
 padding-left: 80pt;
 background-color: white;
 color: black;
'><br>
Produto: <input name='produto' type='text' style='position: relative; left: 43px;' /><br><br>
Qt. mínima: <input name='minimo' type='number' value='0' min='0' /><br><br>
Quantidade: <input name='quantidade' type='number' value='0' min='0' /> 

<input type='submit' value='Cadastrar'/>
</form>
";
//////////////////////////////EXCLUIR
echo "<br><y style=' 
font-size: 30pt;
padding-left: 50px;
padding-right: 180px;
 background-color: black;
 color: white;
'> Excluir</y><br>";
echo "<form method='post' action='excluir_produto.php' style=' padding-right:80pt;
 padding-left: 80pt;
 background-color: white;
 color: black;
'><br>
Cod: <input name='cod' type='number' style='width: 90px;' />
<input type='submit' value='Excluir'/>
</form>";
//////////////////////////////GERENCIAR
echo "<br><y style=' 
font-size: 30pt;
padding-left: 50px;
padding-right: 130px;
 background-color: black;
 color: white;
'> Gerenciar</y><br>
<br><table>
<tr><td style='background-color: gray;'>Cod</td><td style='background-color: gray;'>Produto</td><td style='background-color: gray;'>Qt.Mínima</td></tr>
";
$y= 0;
$result = $db->query("SELECT * FROM `inventario` ORDER BY `inventario`.`produto` ASC", PDO::FETCH_ASSOC);
foreach ($result as $row) {
$y++;
$produto[$y]= $row['produto'];
$min[$y]= $row['minimo'];
$bb[$y]= $row['cod'];

echo "<tr><td>{$row['cod']}</td><form method='post' action='gerenciar_produtos.php'><td><input value='$produto[$y]' name='produto'/> </td> <input type='hidden' name='cod' value='$bb[$y]'/></td> <td> <input type='number' min='1' value='$min[$y]' name='minimo'/></td> <td><input type='submit' value='Mudar' /></td></form></tr> ";

}

$result->closeCursor();
echo "</table>";

}
//-------------------------------------------------------Geral------------------------------------------------------------------------------------//

}else{
echo "<y style=' 
font-size: 30pt;
padding-left: 50px;
padding-right: 190px;
 background-color: black;
 color: white;
'> Geral</y><br><br>
<table style=' padding-right:80pt;
 padding-left: 80pt;
 background-color: white;
 color: black;
'>
<tr><td style='background-color: gray;'>Cod</td><td style='background-color: gray;'>Produto</td><td style='background-color: gray;'>Quantidade</td><td style='background-color: gray;'><img src='sinal.png' /> </td></tr>";
$z=0;
$result = $db->query("SELECT * FROM `inventario` ORDER BY `inventario`.`produto` ASC", PDO::FETCH_ASSOC);
foreach ($result as $row) {
$minimo[$z]= $row['minimo'];
$quantidade[$z]= $row['quantidade'];

echo "<tr><td>{$row['cod']}</td> <td>{$row['produto']}</td> <td>{$row['quantidade']}</td>";?> <td><img src="<?php if ($minimo[$z]>$quantidade[$z]) {echo "vermelho.png";} if ($minimo[$z]<$quantidade[$z]) {echo "verde.png";} if ($minimo[$z]==$quantidade[$z]) {echo "amarelo.png";}?>" /> <?php echo "	</td></tr> ";
$z++;
}

$result->closeCursor();
echo "</table>";
}

?>
</a>
</div>
</body>