<!DOCTYPE html>
<html>
<head> <meta charset="UTF-8"/>
<script type="text/javascript">
function funcao1()
{
alert("Eu sou um alert!");
<?php echo "aaaa";?>
}


function myFunction(){
  

  }


</script>
<style>
input{
font-size: 30pt;
width:200px;
}
input#label{
width:80px;
}
</style>

</head>



<!--setInterval( "myFunction()", 200000000 );
myFunction();
</script>-->

<?php if (isset($_POST['seme']) and (isset ($_POST['auten']))){$seme= $_POST['seme']; $auten= $_POST['auten']; $autenticacao= $_POST['autenticacao']; $cartao= $_POST['cartao']; 
if (isset ($_POST['pago'])) {$pago= $_POST['pago'];}



} ?>
<body style="font-size:20pt;">
 <a href="pesquisar_mensalista.php" target="new">Pesquisar mensalista</a>       
</form>
<form action="texte.php"><input type="submit" value="Limpar" /></form>
<form method="post" style="font-size:15pt; ">
<h3>Calcular</h3>
Por semelhança...: <input type="number" id="label" name="seme" value="<?php if (isset($_POST['seme']) ){ echo $seme;} else {echo "0";} ?>" style="font-size:15pt;" /><br><br>
Por autenticidade: <input type="number" id="label"  name="auten" value="<?php if (isset($_POST['auten']) ){ echo $auten;} else {echo "0";} ?>" style="font-size:15pt;" /><br><br>
Autenticação.....: <input type="number" id="label" name="autenticacao" value="<?php if (isset($_POST['autenticacao']) ){ echo $autenticacao;} else {echo "0";} ?>" style="font-size:15pt;" /><br><br>
Cartão...............: <input type="number" id="label"  name="cartao" value="<?php if (isset($_POST['cartao']) ){ echo $cartao;} else {echo "0";} ?>" style="font-size:15pt;" />

<input type="submit" value="Calcular" style="font-size:15pt;" />

<br>
<input type="text" name="" value="<?php if (isset($_POST['seme']) and (isset ($_POST['auten']))){ echo ($seme+$auten+$autenticacao+$cartao)*5.27;} else {echo "0";} ?>" />
<input type="text" name="pago" value="<?php if (isset($_POST['pago']) and (isset ($_POST['pago']))){ echo $pago;} else {echo "0";} ?>" />
<input type="text" id="" value="<?php if (isset($_POST['seme']) and (isset ($_POST['auten']))){ echo ($pago-($seme+$auten+$autenticacao+$cartao)*5.27);} else {echo "0";} ?>" /></form>
<form method="post">
<h3>Caixa</h3>
Por semelhança...: <input type="number" id="label" name="seme" value="<?php if (isset($_POST['seme']) ){ echo $seme;} else {echo "0";} ?>" /><br><br>
Por autenticidade: <input type="number" id="label"  name="auten" value="<?php if (isset($_POST['auten']) ){ echo $auten;} else {echo "0";} ?>" /><br><br>
Autenticação.....: <input type="number" id="label" name="autenticacao" value="<?php if (isset($_POST['autenticacao']) ){ echo $autenticacao;} else {echo "0";} ?>" /><br><br>
Cartão...............: <input type="number" id="label"  name="cartao" value="<?php if (isset($_POST['cartao']) ){ echo $cartao;} else {echo "0";} ?>" />
<input type="submit" value="Lançar" />

</form>
<form method="get">
<input type="hidden" value="1" name="b"/>
<input type="submit" value="CCCC" />

<?php
echo "<br><br><form method='post' action=''>
Retiradas: <input type='text' value='0' name='retirada' />
<input type='submit' value='Lançar' /><br><br>
";
?>
////////////////////////////////////////////////////////
<?php
$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$db = new PDO($dsn, $username, $password);
$nume=0;

echo "<table><tr id='titulo'><td>Nome</td></tr>";
$result = $db->query("SELECT * FROM `cartoes` WHERE `data` LIKE '25/01/2015'", PDO::FETCH_ASSOC);
foreach ($result as $row) {

echo "<tr><td>{$row['nome']}</td> <td>{$row['cpf']}</td> <td>{$row['data']}</td></tr> ";
}

$result->closeCursor();
echo "</tabele>"
?>
</for>
</body>