<!DOCTYPE html>
<html>
<head>
<title></title>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
 <style>
table{border-collapse: collapse; border: 2px solid black;}
 td{
 border-collapse: collapse;
 	border: 2px solid black;
	font-size: 12pt;
   padding: 2px;}
   tr{border-collapse: collapse; border: 3px solid black;}
 </style>
<?php
session_start();
$data= $_SESSION['hoje'];;
$file_type = "msword";
$file_ending = "doc";

HEADER("Content-Type: application/$file_type");
HEADER("Content-Disposition: attachment; filename=$data.$file_ending");
HEADER("Pragma: no-cache");
HEADER("Expires: 0");

$dsn = 'mysql:host=localhost;dbname=cartorio';
$username = 'Samuel';
$password = 'samuel';
$db = new PDO($dsn, $username, $password);
$nume=1;
echo "<div style='font-size: 14pt; text-align: center;'><b>CARTÕES DO DIA $data</b></div>";
echo "<table style='font-size: 15pt;'>
<tr>
<td width='40px'><b>N°</b></td>
<td width='400px'><b>Nome</b></td>
<td><b>CPF</b></td>
</tr>";
$result = $db->query("SELECT * FROM `cartoes` WHERE `data` LIKE '$data'", PDO::FETCH_ASSOC);
foreach ($result as $row) {

echo "<tr><td>$nume</td> <td>{$row['nome']}</td> <td>{$row['cpf']}</td> </tr> ";
$nume= $nume+1;
}

$result->closeCursor();
echo "</tabele>";
?>