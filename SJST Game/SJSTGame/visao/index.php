<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="estilos/estilo.css"/>
        <link rel="stylesheet" href="estilos/bootstrap/bootstrap.css"/>
        <link rel="stylesheet" href="estilos/bootstrap/bootstrap-theme.css"/>
        <link rel="stylesheet" href="estilos/bootstrap/bootstrap-theme.min.css"/>
        <link rel="stylesheet" href="estilos/estilo.css"/>
		<style>
			body{
				align:center;
				background-color:rgb(10,10,20);
			}
		</style>	
	</head>
	
	<body>
	<?php include("cima.php"); ?>
	<div style="height:480px; background-color:rgb(90,64,47);">
		<form action="cadastrar.php">
			<table class="fundo1" style="width: 20%; position: absolute; left:20px; top: 140px;">
				<tr>
					<td class="titulo" style="font-size:120%">Cadastrar:</td>
				</tr>
				
				<tr>
					<td>
						Se ainda não tem uma conta, não perca tempo, e faça uma agora mesmo. 
					</td>
				</tr>

				<tr>
					<td>
						Login:<br>
						<input type="text" /> 
					</td>
				</tr>
				
				<tr>
					<td>
						Senha:<br>
						<input type="password" /> 
					</td>
				</tr>
				
				<tr>
					<td>
						Confirmar Senha:<br>
						<input type="password" /> 
					</td>
				</tr>
				
				<tr>
					<td>
						E-mail:<br>
						<input type="text" /> 
					</td>
				</tr>
				
				<tr>
					<td>
						Sexo:<br>
						<label>
							<input type="radio" name="sexo"/> Masculino
						</label>
						<label>
							<input type="radio" name="sexo"/> Feminino
						</label>
					</td>
				</tr>
				
				<tr>
					<td>
						<?php include("Captcha/index.php"); ?><br>
						<input type="text" /> 
					</td>
				</tr>
				
				<tr>
					<td align="center">
						<input type="submit" value="Cadastrar" style="width:100%;"/>
					</td>
				</tr>
			</table>
		</form>
	<div class="fundo1" style="width:64%; height: 440px;position: absolute; left:22%; top: 140px;">
		<a class="menuCima" href="" style="">Informações</a> 
		<a class="menuCima" href="" style="">Conhecendo mais</a>
		<p> Viva na pele de uma pessoa em pleno século XVIII. Comece como um recém-nascido, em uma Família ou orfanato, e faça seu nome entrar para a história!</p>
		<p> Seja um militar, um governante, um nobre, um grande comerciante, um burguês, um sacerdote ou mesmo um simples camponês.</p>
		<p> Interaja com outros jogadores, faça da sua família uma das mais renomadas e da sua Companhia Comercial a mais rica.</p>
	</div>

		<form action="pagina_principal.php">
			<table style="width: 10%; position: absolute; right:40px; top: 140px;">
				<tr>
					<td class="titulo" style="font-size:120%">Entrar:</td>
				</tr>

				<tr>
					<td>
						Login:<br>
						<input type="text" autofocus /> 
					</td>
				</tr>
				
				<tr>
					<td>
						Senha: <br>
						<input type="password" /> 
					</td>
				</tr>
				
				<tr>
					<td align="center">
						<input type="submit" value="Entrar" style="width:100%;"/>
					</td>
				</tr>
			</table>
		</form>

</div>

    <?php $inicial=1; include_once ("rodape.php") ?>
    <body>
</html>
