<!DOCTYPE html>
<?php
session_start();
$usuario= $_SESSION['usuario'];
$nivel= $_SESSION['nivel'];
if (isset ($usuario)){}else {header("Location: index.php");
}
?>
<?php if (isset($_POST['seme']) and (isset ($_POST['auten']))){$seme= $_POST['seme']; $auten= $_POST['auten']; $autenticacao= $_POST['autenticacao']; $a_eletronica= $_POST['a_eletronica']; $cartao= $_POST['cartao']; 
if (isset ($_POST['pago'])) {$pago= $_POST['pago'];}



} ?>
<html>
<head>
<title>Bem Vindo, <?php echo $usuario; ?></title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
 <style>
input{
font-size: 30pt;
width:200px;
}
input#label{
width:60px;
font-size: 50pt;
}
input#label2{
width:60px;
font-size: 50pt;
}
a#texto{
font-size: 40px;
}

	form#formulario{
	border: 5px solid #606060;
	width: 445px;
	height: 680px;
	background-color: gray;
	}
	#reti{
	border: 5px solid #606060;
	width: 950px;
	height: 350px;
	background-color: gray;
	}
	
 </style>
 </head>
 <body> 
   <a  id="botao" href="pagina_principal.php">&nbsp Início &nbsp </a>
&nbsp    <a  id="botao" href="cartao.php"> &nbsp Pesquisar Cartão &nbsp </a>
&nbsp <a  id="botao" href="cartao_novo.php"> &nbsp Novo Cartão &nbsp </a>
&nbsp <a  id="selecionado" href="caixa.php"> &nbsp Caixa &nbsp </a>
&nbsp <?php if ($nivel==3) { echo "<a  id='botao' href='administracao.php' style='color: yellow;'> &nbsp Administração &nbsp </a>";} ?>
&nbsp <a  id="botao" href="sair.php"> &nbsp Sair &nbsp </a>

<div id="formul" style="position: relative; left: 0px; height: 1100px;">
</form id="formulario" style="position: relative: left: 500px;" >
<br>
<form method="post" id="formulario" style="font-size:17pt; position: relative; left: 100px;">

<a style="font-size: 40px; background-color: yellow;"> <b>&nbsp Calcular  &nbsp &nbsp &nbsp &nbsp </b> </a><br>

<table style="padding: 10px; "><tr><td>Por semelhança:</td> <td><input type="number" id="label" name="seme" value="<?php if (isset($_POST['seme']) ){ echo $seme;} else {echo "0";} ?>" style="font-size: 23pt;" /></td><td><input type="submit" value="Calcular" style="font-size:20pt; background-color: green; width: 90pt;" type="botao" /></td></tr>
<tr><td>Por autenticidade:</td> <td><input type="number" id="label"  name="auten" value="<?php if (isset($_POST['auten']) ){ echo $auten;} else {echo "0";} ?>" style="font-size:23pt;" /></td><td><input type="submit" value="Calcular" style="font-size:20pt; background-color: green; width: 90pt;" type="botao" /></td></tr>
<tr><td>Autenticação:</td> <td><input type="number" id="label" name="autenticacao" value="<?php if (isset($_POST['autenticacao']) ){ echo $autenticacao;} else {echo "0";} ?>" style="font-size:23pt;" /></td><td><input type="submit" value="Calcular" style="font-size:20pt; background-color: green; width: 90pt;" type="botao" /></td></tr>
<tr><td>Aut. Eletrônica:</td> <td><input type="number" id="label" name="a_eletronica" value="<?php if (isset($_POST['a_eletronica']) ){ echo $a_eletronica;} else {echo "0";} ?>" style="font-size:23pt;" /></td><td><input type="submit" value="Calcular" style="font-size:20pt; background-color: green; width: 90pt;" type="botao" /></td></tr>
<tr><td>Cartão:</td> <td><input type="number" id="label"  name="cartao" value="<?php if (isset($_POST['cartao']) ){ echo $cartao;} else {echo "0";} ?>" style="font-size:23pt;" /></td>

<td><input type="submit" value="Calcular" style="font-size:20pt; background-color: green; width: 90pt;" type="botao" /></td></tr>
</table><table>
<tr><td><a id="texto">TOTAL.:</a></td> <td><input  readonly="true" type="text" name="" value="<?php if (isset($_POST['seme']) and (isset ($_POST['auten']))){ echo ($a_eletronica*16.33)+($cartao*12)+($seme+$auten+$autenticacao)*5.27;} else {echo "0";} ?>" /> <p></td></tr>
<tr><td><a id="texto">PAGO...:</a></td> <td> <input type="text" name="pago" value="<?php if (isset($_POST['pago']) and (isset ($_POST['pago']))){ echo $pago;} else {echo "0";} ?>" /></td></tr>
<tr><td><a id="texto">TROCO:</a></td> <td><input readonly="true" type="text" id="" value="<?php if (isset($_POST['seme']) and (isset ($_POST['auten']))){ echo ($pago-($a_eletronica*16.33)-($cartao*12)-($seme+$auten+$autenticacao)*5.27);} else {echo "0";} ?>" /></td></tr></form>
</table>
<!-- AQUI -->
<form method="post" action="novo_movimento.php" id="formulario" style="position: relative; top:-684px; left: 500px; " >
<a style="font-size: 40px; background-color: rgb(80,250,80);"> <b>&nbsp &nbsp Caixa &nbsp &nbsp &nbsp &nbsp</b> </a><br>
<table style="padding: 10px; "><tr><td>Por semelhança:</td> <td><input type="number" id="label2" name="seme" value="<?php if (isset($_POST['seme']) ){ echo $seme;} else {echo "0";} ?>" style="font-size: 23pt;" /></td></tr>
<tr><td><a style="font-size:20pt;">Por autenticidade:</a></td> <td><input type="number" id="label2"  name="auten" value="<?php if (isset($_POST['auten']) ){ echo $auten;} else {echo "0";} ?>" style="font-size:23pt;" /></td></tr>
<tr><td>Autenticação:</td> <td><input type="number" id="label2" name="autenticacao" value="<?php if (isset($_POST['autenticacao']) ){ echo $autenticacao;} else {echo "0";} ?>" style="font-size:23pt;" /></td></tr>
<tr><td>Aut. Eletrônica:</td> <td><input type="number" id="label2" name="a_eletronica" value="<?php if (isset($_POST['a_eletronica']) ){ echo $a_eletronica;} else {echo "0";} ?>" style="font-size:23pt;" /></td></tr>
<tr><td>Cartão:</td> <td><input type="number" id="label2"  name="cartao" value="<?php if (isset($_POST['cartao']) ){ echo $cartao;} else {echo "0";} ?>" style="font-size:23pt;" /></td></tr>
<tr><td>Nome:</td><td> <input type="text" name="anotacao" style="width: 175px; height: 40px; font-size: 15pt;" placeholder="Anotação" /> </td></tr>

<td><input type="submit"  value="Lançar" style="background-color: blue; color: white;" /></form></td>
<td> <form  action="caixa.php"><input type="submit" value="Limpar" style="background-color: yellow; color: black; width: 135pt;"/></form></td>

</table>
<!--
<form method="post" id="formulario" action="novo_movimento.php" style="position: relative; top:-965px; left: 810px; width: 350px;" >
<h3 style="position: relative; top:-20px;">Anotação</h3>
Por semelhança...: <input type="number" id="label" name="seme" value="<?php if (isset($_POST['seme']) ){ echo $seme;} else {echo "0";} ?>" /><br><br>
Por autenticidade: <input type="number" id="label"  name="auten" value="<?php if (isset($_POST['auten']) ){ echo $auten;} else {echo "0";} ?>" /><br><br>
Autenticação.......: <input type="number" id="label" name="autenticacao" value="<?php if (isset($_POST['autenticacao']) ){ echo $autenticacao;} else {echo "0";} ?>" /><br><br>
Cartão.................: <input type="number" id="label"  name="cartao" value="<?php if (isset($_POST['cartao']) ){ echo $cartao;} else {echo "0";} ?>" />
<input type="submit" id="botao" value="Lançar" />

<a href="pesquisar_mensalista.php"  target="_blank" id="botao" style="position: relative; top:-375px; right:-5px;" >Pesquisar</a> 
<a style="width: 70px; position: relative; top:-430px;">Mensalista:<input type="number" name="mensalista" placeholder="ID" min="1" style="width: 70px;" required ></a>
</form>--></form>
<?php
if ($nivel>1){
echo "<br><br><form id='reti' method='post' action='novo_movimento.php' style='position: absolute; top:690px; left: -510px;'>
<a style='font-size: 40px; background-color: rgb(30,50,250);'> <b>&nbsp Movimento  &nbsp &nbsp &nbsp &nbsp </b> </a>

<table><tr><td>Tipo</td><td>Valor<a style='color: red;'>*</a></td><td>Descrição</td></tr><td style='color: blue;'>Entrada</td> <td><input type='text' name='entrada'  style='color: blue;' /></td>
<td> <input type='text' name='descricao_entrada'  style='color: blue;' /></td></tr>
<tr><td style='color: red;'>Saída</td><td><input type='text' name='saida' style='color: red;' /></td>
<td> <input type='text' name='descricao_saida' style='color: red;' /></tr><td></td><td><input type='submit' style='background-color: blue; color: white;' value='Lançar' /> </td><td> <form  action='caixa.php'><input type='submit' value='Limpar' style='background-color: yellow; color: black; width: 120pt;'/></tr><a style='color: rgba(200,0,0,.9);'>*Usar ponto no lugar da vírgula</a></table>

<br><br>
";}
?>
</div>
</body>