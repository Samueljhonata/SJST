<!DOCTYPE html>
<html>
<head>
<title>Login</title>
  <meta charset="UTF-8"/>
  <style>
  body{
	font-size: 30px;
	background-color: gray;
	padding-right:80pt;
	padding-left: 80pt;
  }
  h2{
	color: white;
	background-color: black;
  }
  form{
	padding-right:80pt;
	padding-left: 80pt;	font-size: 30px;
	background-color: white;
  }
  input{
	font-size: 30px;
	background-color: rgb(230,230,230);
  }
  b{
	font-size: 40px;
  }
  #botao{
  background-color: black;
  color: white;
  }
  #erro{
  color: red;
  }
  </style>
 </head>
 <body>
 <h2>Faça o seu Login:</h2>
 <form method="post" action="validar.php"><br><br>
 <b>Nome:</b> <input type="text" name="usuario" autofocus required /><br><br>
 <b>Senha:</b> <input type="password" name="senha" /> 
 <input type="hidden" name="hoje" value="<?php echo date('d/m/Y');?>" />
 <input id="botao" type="submit" value="Entrar" /><br>
 <?php session_start(); 
 if (isset($_SESSION['erro'])){
	if ($_SESSION['erro']=1) {
	echo "<a id='erro'> *Usuário ou senha inválidos.</a>";
	}}
	session_destroy();
	
?>
 <br><br>
 </form>
 
 </body>
 </html>