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
<title>Pesquisar Cartão</title>
  <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
<style>
  </style>
    <script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}

</script>
  </head>
  <body>
   <a  id="botao" href="pagina_principal.php">&nbsp Início &nbsp </a>
&nbsp    <a  id="selecionado" href="cartao.php"> &nbsp Pesquisar Cartão &nbsp </a>
&nbsp <a  id="botao" href="cartao_novo.php"> &nbsp Novo Cartão &nbsp </a>
&nbsp <a  id="botao" href="caixa.php"> &nbsp Caixa &nbsp </a>
&nbsp <?php if ($nivel==3) { echo "<a  id='botao' href='administracao.php' style='color: yellow;'> &nbsp Administração &nbsp </a>";} ?>
&nbsp <a  id="botao" href="sair.php"> &nbsp Sair &nbsp </a>
  <?php


  if (isset ($_SESSION['salvo'])){$salvo= $_SESSION['salvo'];} else {$salvo="Logo.jpg";}
 ?> <form method="post" action="pesquisa_cartao.php" > 
		<br><div id="formu">CPF.....: <input type="text" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" autofocus required />
		<input id="pesquisar" type="submit" value="Pesquisar" /> &nbsp &nbsp <a href="cartao.php" target ="_blank" id="botao" style="background-color: green;">+ Pesquisa</a></div></form>
		<form method="post" action="pesquisa_cartao.php" > 
		<div id="formu">Nome*: <input type="text" name="nom" " required />
		<input id="pesquisar" type="submit" value="Pesquisar" /> </div>
<?php	
if (isset($_SESSION['nome'])){
$nome= $_SESSION['nome'];
$cpf_p= $_SESSION['cpf_p'];
if ($nome <> "" or $cpf_p<> "") {echo "<table><tr >";}

if ($nome<>""){
echo "<td style='background-color: rgb(240,240,240); border: 0px solid #606060;'>Nome: $nome &nbsp &nbsp &nbsp &nbsp &nbsp </td>";} else {echo "<td style='font-size: 12pt; color: red; background-color: rgb(240,240,240); border: 0px solid #606060;'>Nome não cadastrado &nbsp &nbsp </td>";}
if ($cpf_p<>""){
echo "<td style='background-color: rgb(240,240,240); border: 0px solid #606060;'>CPF: $cpf_p </td>";}else {echo "<td style='font-size: 12pt; color: red; background-color: rgb(240,240,240); border: 0px solid #606060;'> &nbsp &nbsp CPF não cadastrado</td>";}
if ($nome <> "" or $cpf_p<> "") {echo "</tr><table>";}

}

echo "		<img src='cartoes/$salvo' id='img_cart' width='1117px'/>
		</form>";
 unset($_SESSION["salvo"]);
 unset($_SESSION["nome"]);
 unset($_SESSION["cpf_p"]);

?>
  </body>
  </html>