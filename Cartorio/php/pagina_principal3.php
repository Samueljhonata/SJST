<!DOCTYPE html>
<?php
session_start();
$usuario= $_SESSION['usuario'];
$nivel= $_SESSION['nivel'];
$hoje= $_SESSION['hoje'];
if (isset ($usuario)){}else {header("Location: index.php");
}
?>
<html>
<head>
<title>Bem Vindo, <?php echo $usuario; ?></title>
  <meta charset="UTF-8"/>
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
   <a  id="selecionado" href="pagina_principal.php">&nbsp Início &nbsp </a>
&nbsp    <a  id="botao" href="cartao.php"> &nbsp Pesquisar Cartão &nbsp </a>
&nbsp <a  id="botao" href="cartao_novo.php"> &nbsp Novo Cartão &nbsp </a>
&nbsp <a  id="botao" href="caixa.php"> &nbsp Caixa &nbsp </a>
&nbsp <?php if ($nivel==3) { echo "<a  id='botao' href='administracao.php' style='color: yellow;'> &nbsp Administração &nbsp </a>";} ?>
&nbsp <a  id="botao" href="sair.php"> &nbsp Sair &nbsp </a>
<a id="texto"> <?php 
 
 echo "<div id=''><br> Bem vindo, $usuario. Bom Despacho, $hoje. <br><br><br>";
 ?>
 <form><input  type="hidden" name="a" value="1" />
 <input  id="botao" type="submit" value="Cartões do dia" style="background-color: rgb(50,50,50); position: absolute; left: 140px; top: 260px;" /></form>
 <form><input  type="hidden" name="a" value="2" />
 <input  id="botao" type="submit" value="Caixa do dia" style="background-color: rgb(50,50,50);position: absolute; left: 370px; top: 260px;" /></form>
 <form><input  type="hidden" name="a" value="3" />
 <input  id="botao" type="submit" value="Cartões por dia" style="background-color: rgb(50,50,50); position: absolute; left: 570px; top: 260px;" /></form>
  <form><input  type="hidden" name="a" value="4" />
 <input  id="botao" type="submit" value="Caixa por dia" style="background-color: rgb(50,50,50); position: absolute; left: 810px; top: 260px;" /></form>
 <br><br><br>

 <!--
 <a  id="botao" href="novo_mensalista.php" style="background-color: rgb(50,50,50); position: relative; left: 680px; top: -158px;">Novo Mensalista</a>
 <a  id="botao" href="cartao.php" style="background-color: rgb(50,50,50); position: relative; left: 680px; top: -158px;">Pagar Mensalista</a> <br><br>
-->

<?php
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$db = new PDO($dsn, $username, $password);
//CARTOES
if (isset($_GET['a'])){
if ($_GET['a']==1){ 

$nume=0;

echo "<table style='font-size: 18pt;'><tr id='titulo' style='color: blue; '><td>Nome</td><td>CPF</td><td>Data</td><td>Funcionário</td></tr>";
$result = $db->query("SELECT * FROM `cartoes` WHERE `data` LIKE '$hoje'", PDO::FETCH_ASSOC);
foreach ($result as $row) {

echo "<tr><td>{$row['nome']}</td> <td>{$row['cpf']}</td> <td>{$row['data']}</td> <td>{$row['usuario']}</td></tr> ";
}

$result->closeCursor();
echo "</tabele>";
}}

//CAIXA
if (isset($_GET['a'])){
if ($_GET['a']==2){ 
$soma_semelhanca=0;
$soma_autentici=0;
$soma_autentica=0;
$soma_autentica_eletro=0;
$soma_cartao=0;

$a=0;
////////////
$result = $db->query("SELECT * FROM `caixa` WHERE `data` LIKE '$hoje' ORDER BY `usuario` ASC", PDO::FETCH_ASSOC);
foreach ($result as $row) {
$a_semelhanca[$a]="{$row['semelhanca']}";
$a_autentici[$a]="{$row['autenticidade']}";
$a_autentica[$a]="{$row['autenticacao']}";
$a_autentica_eletro[$a]="{$row['a_eletronica']}";
$a_cartao[$a]="{$row['cartao']}";

$soma_semelhanca= $soma_semelhanca+$a_semelhanca[$a];
$soma_autentici= $soma_autentici+ $a_autentici[$a];
$soma_autentica= $soma_autentica+ $a_autentica[$a];
$soma_autentica_eletro= $soma_autentica_eletro+ $a_autentica_eletro[$a];
$soma_cartao= $soma_cartao+ $a_cartao[$a];

$a++;

}
$rec_firma= $soma_semelhanca+$soma_autentici;
$valor_rf= $rec_firma*5.27;
$valor_autentica= $soma_autentica*5.27;
$valor_a_eletro= $soma_autentica_eletro*16.33;
$valor_cartao= $soma_cartao*12;
$valor_total= $valor_rf+$valor_autentica+$valor_a_eletro+$valor_cartao;////////////////////////////////////////////////////////////////////////////////////////////////////////////
$soma_entrada=0;
$soma_saida=0;

$a1=0;
////////////
$result = $db->query("SELECT * FROM `retiradas` WHERE `data` LIKE '$hoje'", PDO::FETCH_ASSOC);
foreach ($result as $row) {
$a_valor_sai[$a1]="{$row['valor']}";

$soma_saida= $soma_saida+$a_valor_sai[$a1];

$a1++;
}
$a2=0;
$result = $db->query("SELECT * FROM `entradas` WHERE `data` LIKE '$hoje'", PDO::FETCH_ASSOC);
foreach ($result as $row) {
$a_valor_entra[$a2]="{$row['valor']}";

$soma_entrada= $soma_entrada+$a_valor_entra[$a2];

$a2++;

}
$tfj= ($rec_firma+$soma_autentica+$soma_cartao)*1.25;
$total= $valor_total+$soma_entrada-$soma_saida-$tfj;
if (isset ($_POST['caixa_anterior'])) { $caixa_anterior= $_POST['caixa_anterior'];
$total= $total + $caixa_anterior;
}

echo"<table><tr><td style='background-color: green; color: white;'>GERAL</td>
<tr><td>Caixa Anterior</td>"; ?> <td> R$ <form method="post"> <input name="caixa_anterior" style="width: 125px;" type="text" value="<?php if (isset ($_POST['caixa_anterior'])) { echo $caixa_anterior;} ?>"/> <?php echo " </form></td></tr>
<tr><td>Serviços</td><td> R$ $valor_total</td></tr>
<tr><td>Entradas</td><td> R$ $soma_entrada</td></tr>
<tr><td>Saidas</td><td> R$ $soma_saida</td></tr>
<tr><td>TFJ</td><td> R$ $tfj </td></tr>
<tr><td>Total</td><td> R$ $total</td></tr>
</table>";





////////////////////////////////////////////////////////////////////////
//GERAL


echo"<br><table style='text-align: center;'><tr ><td style='background-color: black; color:white; font-size: 18pt;'>Atendimentos: <td style='font-size:29pt; background-color: black; color:white;'>$a</td>
</tr><tr id='titulo' style='color: blue; font-size: 23pt;'><td>Data</td><td>Semelhança</td><td>Autenticidade</td><td>Autenticação</td><td>A. Eletrônica</td><td>Cartão</td></tr>
<tr><td>$hoje</td><td>$soma_semelhanca</td><td>$soma_autentici</td><td>$soma_autentica</td><td>$soma_autentica_eletro</td><td>$soma_cartao</td></tr>
<tr><td>R. Firma:</td><td> $rec_firma </td><td>R$ $valor_rf</td><td>R$ $valor_autentica</td><td>R$ $valor_a_eletro</td><td>R$ $valor_cartao</td></tr>
<tr><td style='background-color: black; color:white;'>TOTAL:</td><td style='background-color: black; color:white;'>R$ $valor_total</td></tr>
</table><br>";
//ENTRADAS
echo"<table style='color: white; '><tr><td style='background-color: blue; '>Entradas</td></tr><tr id='titulo 'style='color: blue;' ><td>Data</td><td>Valor</td><td>Descrição</td><td>Funcionário</td></tr>";
$result = $db->query("SELECT * FROM `entradas` WHERE `data` LIKE '$hoje'", PDO::FETCH_ASSOC);
foreach ($result as $row) {

echo "<tr style='color: black; '><td>{$row['data']}</td> <td>{$row['valor']}</td> <td>{$row['descricao']}</td> <td>{$row['usuario']}</td></tr> ";
}echo "</table>";
//SAÍDAS
echo"<br> <table ><tr><td style='color: white; background-color:red;'>Saídas</td></tr><tr id='titulo' style='color: blue; '><td>Data</td><td>Valor</td><td>Descrição</td><td>Funcionário</td></tr>";

$result = $db->query("SELECT * FROM `retiradas` WHERE `data` LIKE '$hoje'", PDO::FETCH_ASSOC);
foreach ($result as $row) {

echo "<tr><td>{$row['data']}</td> <td>{$row['valor']}</td> <td>{$row['descricao']}</td> <td>{$row['usuario']}</td></tr> ";
}

$result->closeCursor();
echo "</table>";


echo"</table>";



$result->closeCursor();


//DETALHAMENTO
echo"<br><table style='font-size: 15pt; text-align: center;'><tr><td style='background-color: yellow; color: blue; font-size:18pt;' >Detalhamento</td></tr><tr id='titulo' style='color: blue; '><td>Data</td><td>Semelhança</td><td>Autenticidade</td><td>Autenticação</td><td>Cartão</td><td>Funcionário</td></tr>";
$result = $db->query("SELECT * FROM `caixa` WHERE `data` LIKE '$hoje' ORDER BY `usuario` ASC", PDO::FETCH_ASSOC);
foreach ($result as $row) {

echo "<tr><td>{$row['data']}</td> <td>{$row['semelhanca']}</td> <td>{$row['autenticidade']}</td> <td>{$row['autenticacao']}</td> <td>{$row['cartao']}</td> <td>{$row['usuario']}</td></tr> ";
}echo"</table>";


}
}

if (isset($_GET['a'])){
if ($_GET['a']==3){ 
echo "Cartões<br><br><form method='get' > <input type='hidden' value='4' name='a' /> Dia: "; ?> <input type="text" name="data" maxlength="10" OnKeyPress="formatar('##/##/####', this)" autofocus required placeholder="DD/MM/AAAA" /> <?php echo "<input type='submit' value='OK'/></form><br>";

if (isset($_GET['data'])){
$data_pesq=($_GET['data']);
$nume=0;
if ($data_pesq<>""){
echo "Dia pesquisado: $data_pesq. 
<br><table style='font-size: 18pt;'><tr id='titulo' style='color: blue; '><td>Nome</td><td>CPF</td><td>Data</td><td>Funcionário</td></tr>";
$result = $db->query("SELECT * FROM `cartoes` WHERE `data` LIKE '$data_pesq'", PDO::FETCH_ASSOC);
foreach ($result as $row) {

echo "<tr><td>{$row['nome']}</td> <td>{$row['cpf']}</td> <td>{$row['data']}</td> <td>{$row['usuario']}</td></tr> ";
}

$result->closeCursor();
echo "</tabele>";
}}}}

///-///-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-/-
if (isset($_GET['a'])){
if ($_GET['a']==4){ 
echo "Caixa<br><br><form method='get' > <input type='hidden' value='4' name='a' /> Dia: "; ?> <input type="text" name="data" maxlength="10" OnKeyPress="formatar('##/##/####', this)" autofocus required placeholder="DD/MM/AAAA" /> <?php echo "<input type='submit' value='OK'/></form><br>";

if (isset($_GET['data'])){

$data_pesq=($_GET['data']);
if ($data_pesq<>""){
echo "Dia pesquisado: $data_pesq.";
$soma_semelhanca=0;
$soma_autentici=0;
$soma_autentica=0;
$soma_autentica_eletro=0;
$soma_cartao=0;

$a=0;
////////////
$result = $db->query("SELECT * FROM `caixa` WHERE `data` LIKE '$data_pesq' ORDER BY `usuario` ASC", PDO::FETCH_ASSOC);
foreach ($result as $row) {
$a_semelhanca[$a]="{$row['semelhanca']}";
$a_autentici[$a]="{$row['autenticidade']}";
$a_autentica[$a]="{$row['autenticacao']}";
$a_autentica_eletro[$a]="{$row['a_eletronica']}";
$a_cartao[$a]="{$row['cartao']}";

$soma_semelhanca= $soma_semelhanca+$a_semelhanca[$a];
$soma_autentici= $soma_autentici+ $a_autentici[$a];
$soma_autentica= $soma_autentica+ $a_autentica[$a];
$soma_autentica_eletro= $soma_autentica_eletro+ $a_autentica_eletro[$a];
$soma_cartao= $soma_cartao+ $a_cartao[$a];

$a++;

}
$rec_firma= $soma_semelhanca+$soma_autentici;
$valor_rf= $rec_firma*5.27;
$valor_autentica= $soma_autentica*5.27;
$valor_a_eletro= $soma_autentica_eletro*16.33;
$valor_cartao= $soma_cartao*12;
$valor_total= $valor_rf+$valor_autentica+$valor_a_eletro+$valor_cartao;////////////////////////////////////////////////////////////////////////////////////////////////////////////
$soma_entrada=0;
$soma_saida=0;

$a1=0;
////////////
$result = $db->query("SELECT * FROM `retiradas` WHERE `data` LIKE '$data_pesq'", PDO::FETCH_ASSOC);
foreach ($result as $row) {
$a_valor_sai[$a1]="{$row['valor']}";

$soma_saida= $soma_saida+$a_valor_sai[$a1];

$a1++;
}
$a2=0;
$result = $db->query("SELECT * FROM `entradas` WHERE `data` LIKE '$data_pesq'", PDO::FETCH_ASSOC);
foreach ($result as $row) {
$a_valor_entra[$a2]="{$row['valor']}";

$soma_entrada= $soma_entrada+$a_valor_entra[$a2];

$a2++;

}
$tfj= ($rec_firma+$soma_autentica+$soma_cartao)*1.25;
$total= $valor_total+$soma_entrada-$soma_saida-$tfj;
if (isset ($_POST['caixa_anterior'])) { $caixa_anterior= $_POST['caixa_anterior'];
$total= $total + $caixa_anterior;
}

echo"<table><tr><td style='background-color: green; color: white;'>GERAL</td>
<tr><td>Caixa Anterior</td>"; ?> <td> R$ <form method="post"> <input name="caixa_anterior" style="width: 125px;" type="text" value="<?php if (isset ($_POST['caixa_anterior'])) { echo $caixa_anterior;} ?>"/> <?php echo " </form></td></tr>
<tr><td>Serviços</td><td> R$ $valor_total</td></tr>
<tr><td>Entradas</td><td> R$ $soma_entrada</td></tr>
<tr><td>Saidas</td><td> R$ $soma_saida</td></tr>
<tr><td>TFJ</td><td> R$ $tfj </td></tr>
<tr><td>Total</td><td> R$ $total</td></tr>
</table>";





////////////////////////////////////////////////////////////////////////
//GERAL


echo"<br><table style='text-align: center;'><tr ><td style='background-color: black; color:white; font-size: 18pt;'>Atendimentos: <td style='font-size:29pt; background-color: black; color:white;'>$a</td>
</tr><tr id='titulo' style='color: blue; font-size: 23pt;'><td>Data</td><td>Semelhança</td><td>Autenticidade</td><td>Autenticação</td><td>A. Eletrônica</td><td>Cartão</td></tr>
<tr><td>$hoje</td><td>$soma_semelhanca</td><td>$soma_autentici</td><td>$soma_autentica</td><td>$soma_autentica_eletro</td><td>$soma_cartao</td></tr>
<tr><td>R. Firma:</td><td> $rec_firma </td><td>R$ $valor_rf</td><td>R$ $valor_autentica</td><td>R$ $valor_a_eletro</td><td>R$ $valor_cartao</td></tr>
<tr><td style='background-color: black; color:white;'>TOTAL:</td><td style='background-color: black; color:white;'>R$ $valor_total</td></tr>
</table><br>";
//ENTRADAS
echo"<table style='color: white; '><tr><td style='background-color: blue; '>Entradas</td></tr><tr id='titulo 'style='color: blue;' ><td>Data</td><td>Valor</td><td>Descrição</td><td>Funcionário</td></tr>";
$result = $db->query("SELECT * FROM `entradas` WHERE `data` LIKE '$hoje'", PDO::FETCH_ASSOC);
foreach ($result as $row) {

echo "<tr style='color: black; '><td>{$row['data']}</td> <td>{$row['valor']}</td> <td>{$row['descricao']}</td> <td>{$row['usuario']}</td></tr> ";
}echo "</table>";
//SAÍDAS
echo"<br> <table ><tr><td style='color: white; background-color:red;'>Saídas</td></tr><tr id='titulo' style='color: blue; '><td>Data</td><td>Valor</td><td>Descrição</td><td>Funcionário</td></tr>";

$result = $db->query("SELECT * FROM `retiradas` WHERE `data` LIKE '$hoje'", PDO::FETCH_ASSOC);
foreach ($result as $row) {

echo "<tr><td>{$row['data']}</td> <td>{$row['valor']}</td> <td>{$row['descricao']}</td> <td>{$row['usuario']}</td></tr> ";
}

$result->closeCursor();
echo "</table>";


echo"</table>";



$result->closeCursor();


//DETALHAMENTO
echo"<br><table style='font-size: 15pt; text-align: center;'><tr><td style='background-color: yellow; color: blue; font-size:18pt;' >Detalhamento</td></tr><tr id='titulo' style='color: blue; '><td>Data</td><td>Semelhança</td><td>Autenticidade</td><td>Autenticação</td><td>Cartão</td><td>Funcionário</td></tr>";
$result = $db->query("SELECT * FROM `caixa` WHERE `data` LIKE '$hoje' ORDER BY `usuario` ASC", PDO::FETCH_ASSOC);
foreach ($result as $row) {

echo "<tr><td>{$row['data']}</td> <td>{$row['semelhanca']}</td> <td>{$row['autenticidade']}</td> <td>{$row['autenticacao']}</td> <td>{$row['cartao']}</td> <td>{$row['usuario']}</td></tr> ";
}echo"</table>";


}
}}}


//ANOTAÇÕES
/*
if (isset($_GET['a'])){
if ($_GET['a']==3){ 
echo"<br><table><tr id='titulo' style='color: blue; '><td>Data</td><td>Cliente</td><td>Serviços</td><td>Comparecente</td><td>Funcionário</td></tr>";

$result = $db->query("SELECT * FROM `rel_clientes` WHERE `dia` LIKE '$hoje'", PDO::FETCH_ASSOC);
foreach ($result as $row) {

echo "<tr><td>{$row['dia']}</td> <td>{$row['cliente']}</td> <td>{$row['servicos']}</td> <td>{$row['nome']}</td> <td>{$row['usuario']}</td></tr> ";
}

$result->closeCursor();
echo "</table>";

}}
*/
?>
 </form></a></body>
 </html>