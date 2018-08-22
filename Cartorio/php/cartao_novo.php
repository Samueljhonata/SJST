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
<title>Novo Cartão</title>
 <!-- <meta charset="UTF-8"/> -->
    <link rel="stylesheet" href="_css/estilo.css"/>
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
&nbsp    <a  id="botao" href="cartao.php"> &nbsp Pesquisar Cartão &nbsp </a>
&nbsp <a  id="selecionado" href="cartao_novo.php"> &nbsp Novo Cartão &nbsp </a>
&nbsp <a  id="botao" href="caixa.php"> &nbsp Caixa &nbsp </a>
&nbsp <?php if ($nivel==3) { echo "<a  id='botao' href='administracao.php' style='color: yellow;'> &nbsp Administração &nbsp </a>";} ?>
&nbsp <a  id="botao" href="sair.php"> &nbsp Sair &nbsp </a>

<form id="formul" method="post" action="modelo_cartao.php">
<input type="hidden" value="CARTÓRIO DO 1° OFÍCIO DE NOTAS" name="rodape" />

<br><div id="formu">
<div id="label">Nome:</div> <input type="text" name="nome"  style="width:860px; " autofocus required /><br><br>

<a style="position: absolute; top:100px; left: 0px;"><div id="label">Profissão: </div><input type="text" name="profissao" /></a><br><br>

<a style="position: absolute; top:100px; left: 495px;"> <div id="label">Estado Civil:</div> <input type="text" name="estado_civil" /> <br><br></a>

<a style="position: absolute; top:200px; left: 0px;"><div id="label">Nacionalidade:</div> <input type="text" name="nacionalidade" /></a><br><br>

<a style="position: absolute; top:200px; left: 495px;"><div id="label"> Nascimento:</div> <input type="text" name="nascimento" maxlength="10" OnKeyPress="formatar('##/##/####', this)" /></a><br><br>

<a style="position: absolute; top:300px; left: 0px;"><div id="label">Telefones:</div> <input type="text" name="tel1" /></a> 
<a style="position: absolute; top:340px; left: 495px;">  <input type="text" name="tel2" /></a><br><br>

<a style="position: absolute; top:400px; left: 0px;"><div id="label">Endereço:</div> 

<a style="position: absolute; top:440px; left: 0px;"><input type="text" name="endereco" placeholder="Rua/Avenida/Praça/Rural" /></a>

<a style="position: absolute; top:440px; left: 495px;"> <input type="text" name="numero" placeholder="N°" style="width:150px;"/> &nbsp &nbsp &nbsp <input type="text" name="apt" placeholder="Apt" style="width:150px;"/> </a>

<a style="position: absolute; top:490px; left: 0px;">
 <input type="text" name="bairro" placeholder="Bairro" />  </a>
 
 <a style="position: absolute; top:490px; left: 495px;"><input type="text" name="cidade" placeholder="Cidade" value="Bom Despacho - MG" /></a>
</a>

<br><br>

<a style="position: absolute; top:550px; left: 0px;"><div id="label">C.I.:</div> <input type="text" name="rg" style="width:200px;" /> &nbsp SSP/ <input type="text" name="estado" style="width:65px;" value="MG" /></a>

<a style="position: absolute; top:550px; left: 495px;"><div id="label">C.P.F.:</div> <input type="text" name="cpf" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" required /> </a>

<a style="position: absolute; top:650px; left: 0;"><div id="label">Outros Doc.:</div> <input type="text" name="outros" /> </a>

<a style="position: absolute; top:650px; left: 495px;"><div id="label">Data:</div> <input type="text" value="<?php echo date('d/m/Y');?>"  name="data" /> </a>

<a style="position: absolute; top:750px; left: 0;"><div id="label">Obs:</div> <input type="text" name="obs" style="width:860px;" /> </a>

<a style="position: absolute; top:850px; left: 300px;"><input id="botao" type="submit" value="Imprimir" style="background-color: green;" />&nbsp &nbsp &nbsp
<input id="botao" type="reset" value="Limpar" style="background-color: yellow;"/>
</a>
</div>
</form>

</body>