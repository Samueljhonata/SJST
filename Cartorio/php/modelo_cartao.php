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
<title>Entrar</title>
 <!--<meta charset="UTF-8"/>-->
<style media="print">
.botao {
display: none;
}
</style>
 <style>
@page land {size: landscape;}
div#cartao{
	border: 0px solid #606060;
	height: 340px;
	width: 475px;		
	position:absolute;
	right: -3px;
	top: 170px; 
}
div#nome{
	font-size: 18px;
	margin-top:15%;
	text-align: center;
	position: relative;
	top: -70px;
}
div#assinaturas{
	font-size: 16px;
	margin-top:15%;
	text-align: center;
	position: relative;
	top: -162px;
}
div#prof{
	border: 1px solid #606060;
	height: 20px;
	width: 465px;		
	position: relative;
	right: -5px;
	top: -167px;
}
a#naci{
	position: absolute;
	right: 20px;
	top: 0px;
}
div#endereco{
	border: 1px solid #606060;
	height: 40px;
	width: 465px;		
	position: relative;
	right: -5px;
	top: -165px;
}
div#ecivil{
	border: 1px solid #606060;
	height: 20px;
	width: 465px;		
	position: relative;
	right: -5px;
	top: -160px;
}
a#ci{
	position: absolute;
	left: 190px;
	top: 0px;
}
div#cpf{
	border: 1px solid #606060;
	height: 20px;
	width: 465px;		
	position: relative;
	right: -5px;
	top: -155px;
}
a#outros{
	position: absolute;
	left: 190px;
	top: 0px;
}
div#nas{
	border: 1px solid #606060;
	height: 20px;
	width: 465px;		
	position: relative;
	right: -5px;
	top: -150px;
}
a#tels{
	position: absolute;
	left: 190px;
	top: 0px;
}
div#obs{
	border: 1px solid #606060;
	height: 40px;
	width: 465px;		
	position: relative;
	right: -5px;
	top: -145px;
}

div#rodape{
	text-align: center;
	border: 0px solid #606060;
	height: 20px;
	width: 465px;		
	position: relative;
	right: -5px;
	top: -140px;
}
div#rodape2{
	text-align: center;
	border: 0px solid #606060;
	height: 40px;
	width: 465px;		
	position: relative;
	right: -5px;
	top: -145px;
	font-size: 10pt;
}
div#data{
	position: absolute;
	right: 10px;
	top: 300px;
	font-size: 10pt;
}
  #botao{
  background-color: black;
  color: white;
  padding: 10px;
  text-decoration:none; 
  font-size: 50px;
  }
</style>
</head>
<body>
<?php
$nome= $_POST['nome'];
$profissao= $_POST['profissao'];
$estado_civil= $_POST['estado_civil'];
$nacionalidade= $_POST['nacionalidade'];
$nascimento= $_POST['nascimento'];
$tel1= $_POST['tel1'];
$tel2= $_POST['tel2'];
$endereco= $_POST['endereco'];
$numero= $_POST['numero'];
$apt= $_POST['apt'];
$bairro= $_POST['bairro'];
$cidade= $_POST['cidade'];
$rg= $_POST['rg'];
$estado= $_POST['estado'];
$cpf= $_POST['cpf'];
$outros= $_POST['outros'];
$data= $_POST['data'];
$obs= $_POST['obs'];

$rodape= $_POST['rodape'];
if ($numero<>""){ $numero="n. $numero,";} else {$numero="";}
if ($apt<>""){$apt= "apt. $apt";} else {$apt="";}
if ($bairro<>""){$bairro=" Bairro $bairro,";} else {$bairro="";}
?>
<a href="cartao_novo.php" id="botao"  class="botao">Voltar</a> <button id="botao" class="botao" onClick="window.location.reload();">Imprimir novamente</button>
<div id="cartao">
<div id="nome"><b> <?php echo $nome; ?> </b></div>
<div id="assinaturas">___________________________________________________________<br><br>
-----------------------------------------------------------------------------------------<br><br>
-----------------------------------------------------------------------------------------</div>
<div id="prof"> &nbsp Profissao: <b><?php echo $profissao; ?> <a id="naci"></b> Nacionalidade: <b> <?php echo $nacionalidade; ?> </b></a></div>
<div id="endereco">&nbsp Residencia: &nbsp <b> <?php echo "$endereco, $numero $apt $bairro $cidade.";?></b></div>
<div id="ecivil"> &nbsp E. Civil:  <b> <?php echo $estado_civil; ?> </b> <a id="ci"> C.I. <b> <?php echo $rg; ?> &nbsp &nbsp &nbsp &nbsp SSP/ <?php echo $estado; ?></b></a> </div>
<div id="cpf"> &nbsp C.P.F.: <b> <?php echo $cpf; ?> </b> <a id="outros"> Outros Doc. <b><?php echo $outros; ?></b> </a></div>
<div id="nas"> &nbsp Nasc. <b> <?php echo $nascimento; ?> </b> <a id="tels"> Tels. <b><?php echo $tel1; ?> &nbsp </b> e <b><?php echo $tel2; ?></b></a></div>
<div id="obs"> &nbsp Obs: <b> <?php echo $obs; ?> </b></div>
<div id="rodape"> <b><?php echo $rodape; ?></b> </div>
<div id="rodape2"> Comarca de Bom Despacho - MG </div>
<div id="data"> <b><?php echo $data; ?></b></div>
</div>
<?php
//SALVANDO CARTAO NO BANCO
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$salvo= "$cpf.jpg";
if ($nome<>"" and $cpf<>"" ){
$db = new PDO($dsn, $username, $password);
$numRows = $db->exec("UPDATE `cartorio`.`cartoes` SET `data` = '$data' WHERE `cartoes`.`salvo` = '$salvo'");
$numRows = $db->exec("UPDATE `cartorio`.`cartoes` SET `nome` = '$nome' WHERE `cartoes`.`salvo` = '$salvo'");

$numRows = $db->exec("INSERT INTO cartoes VALUES ('', '$nome' , '$cpf', '$salvo', '$data', '$usuario')");
}
//ATE AQUI
?>
<script type="text/javascript">

	window.print();window.close();
</script>
</body>

