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
	width: 700px;
	height: 540px;
	background-color: gray;
	}
	#reti{
	border: 5px solid #606060;
	width: 700px;
	height: 350px;
	background-color: gray;
	padding: 10px;}
	
 </style>
 <script>
 function calculaCaixa(){
var f_semelhanca = document.getElementById("semelhanca").value;
var f_autenticidade = document.getElementById("autenticidade").value;
var f_autenticacao = document.getElementById("autenticacao").value;
var f_eletronica = document.getElementById("a_eletronica").value;
var f_cartao = document.getElementById("cartao").value;
var f_total = ((parseInt(f_semelhanca) + parseInt(f_autenticidade)+ parseInt(f_autenticacao))*5.27)+(parseInt(f_eletronica)*16.33)+(parseInt(f_cartao)*12);
var total = f_total.toFixed(2);
document.getElementById("total").value= total;

var pago = document.getElementById("pago").value;
var troco2 = total-pago;
var troco = troco2.toFixed(2);
document.getElementById("troco").value= troco;

}
 </script>
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
<!-- AQUI -->
<form method="post" action="novo_movimento.php" id="formulario" style="padding: 10px; position: relative;  left: 150px;" >
<a style="font-size: 40px; background-color: rgb(80,250,80);"> <b>&nbsp &nbsp Caixa &nbsp &nbsp &nbsp &nbsp</b> </a><br>
<table style="padding: 10px; position: relative;  left: 15px;"><tr><td>Semelhança:</td> <td><input type="number" id="semelhanca" name="seme" value="0" onClick="calculaCaixa()" onBlur="calculaCaixa()" style="font-size: 30pt; width:100px; " /></td>
<td><a style="font-size:20pt;">Autenticidade:</a></td> <td><input type="number" id="autenticidade"  name="auten" value="0" style="font-size: 30pt; width:100px; " onClick="calculaCaixa()" onBlur="calculaCaixa()" /></td></tr>
<tr><td>Autenticação:</td> <td><input type="number" id="autenticacao" name="autenticacao" value="0" style="font-size: 30pt; width:100px; " onClick="calculaCaixa()" onBlur="calculaCaixa()" /></td>
<td>A.Eletrônica:</td> <td><input type="number" id="a_eletronica" name="a_eletronica" value="0" style="font-size: 30pt; width:100px; " onClick="calculaCaixa()" onBlur="calculaCaixa()" /></td></tr>
<tr><td>Cartão:</td> <td><input type="number" id="cartao"  name="cartao" value="0" style="font-size: 30pt; width:100px; " onClick="calculaCaixa()" onBlur="calculaCaixa()" /></td><td></td><td></td></tr></table>

<table style="text-align: center;"><tr><td style="color: white; background-color: black;">TOTAL</td><td style="color: white; background-color: black;"> <input  readonly="true" type="text" id="total" value="0.00" style="color: white; background-color: black;text-align: center;"/></td>
<td style="color: white; background-color: blue;">PAGO<a style="color: red;">*</a></td><td style="color: white; background-color: blue; "> <input value=""  type="text" id="pago" onKeyDown="calculaCaixa()" onBlur="calculaCaixa()" style="width: 194px; color: white; background-color: rgb(0,0,200);text-align: center;" /></td></tr>
<tr><td style="color: white; background-color: black;">TROCO</td><td style="color: white; background-color: black;"> <input  readonly="true" type="text" id="troco" value="0.00" style="color: white; background-color: black; text-align: center;" /></td>
<td>Nome:</td><td> <input type="text" name="anotacao" style="width: 194px; height: 40px; font-size: 15pt;" placeholder="Anotação" /> </td></tr>
</table>
<div style="text-align: center; position: relative;  left: 5px; background-color: gray;">
<input type="submit"  value="Lançar" style="background-color: blue; color: white; width: 210px;" /> <input type="reset" value="Limpar" style="background-color: yellow; color: black; width: 210px;"/></form>
</div>

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
echo "<br><br><form id='reti' method='post' action='novo_movimento.php' style='position: relative;  left: 150px; top: -50px;'>
<a style='font-size: 40px; background-color: rgb(30,50,250);'> <b>&nbsp Movimento  &nbsp &nbsp &nbsp &nbsp </b> </a>

<table><tr><td>Tipo</td><td>Valor<a style='color: red;'>*</a></td><td>Descrição</td></tr><td style='color: blue;'>Entrada</td> <td><input type='text' name='entrada'  style='color: blue;' /></td>
<td> <input type='text' name='descricao_entrada'  style='color: blue;' /></td></tr>
<tr><td style='color: red;'>Saída</td><td><input type='text' name='saida' style='color: red;' /></td>
<td> <input type='text' name='descricao_saida' style='color: red;' /></tr><a style='color: rgba(200,0,0,.9);'>*Usar ponto no lugar da vírgula</a></table>
<div style='text-align: center; position: relative;  left: 5px; background-color: gray;'><input type='submit' style='background-color: blue; color: white; width: 210px;' value='Lançar' />  <input type='reset' value='Limpar' style='background-color: yellow; color: black; width: 210px;'/></form></div>

<br><br>
";}
?>
</div>
</body>