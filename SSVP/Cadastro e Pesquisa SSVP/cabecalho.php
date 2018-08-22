<!DOCTYPE html>
<html>
	<head>		
		<title>Cadastro e Pesquisa SSVP</title>
	</head>
	
	<SCRIPT>
	function confirmar(){
			decisao = confirm("DESEJA CONFIRMAR?");
			if (decisao){
				return true;
			} else {
				return false;
			}
		}
	</SCRIPT>
	<link rel="stylesheet" href="estilo.css"/>
	<style>
		body{
			background-color: gray;
			align: center;
		}
	</style>
	<?php
		/*$dsn = 'mysql:host=localhost;dbname=protocolo';
		$username = 'Samuel';
		$password = 'samuel';
		$db = new PDO($dsn, $username, $password);

		//pega ultimo registro
		$result = $db->query('SELECT * FROM `processo` ORDER BY `controle` ASC', PDO::FETCH_ASSOC);
			foreach ($result as $row) {
			//$controlec= $row['controle'];
		}
		$result->closeCursor();

		//

		*/
	?>
	<body>
		<h3 align="center"> <b style="font-size:40pt;" > Cadastro e Pesquisa SSVP </b></h3>
			<h2 align="center">
				<table align="center">
				<tr>
					<td style="background-color:blue;">
						<form action="index.php" method="get">
							<input  type="hidden" name="a" value="1" />
							<input  id="botao" type="submit" value="Cadastrar" style="background-color: blue; " />
						</form>
					</td>
					
					<td style="background-color:green;">
						<form action="index.php" method="get">
							<input  type="hidden" name="a" value="2" />
							<input  id="botao" type="submit" value="Consultar" style="background-color: green; " />
						</form>
					</td>
					<td style="background-color:orange;">
						<form action="index.php" method="get">
							<input  type="hidden" name="a" value="3" />
							<input  id="botao" type="submit" value="Atualizar" style="background-color: orange; " />
						</form>
					</td>				
				</tr>
				</table>
			</h2>
		<?php
			echo"<h2 align='center'>";
			if (isset($_GET['a'])){
				if ($_GET['a']==1){
		?>
					<form id='cabeca' align='center' style='background-color: blue;'> Cadastrar  </form>
					
				<table align="center">
				<tr>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="cadastrar" value="1" />
							<input  id="botao" type="submit" value="Conselho Particular" style="background-color: gray; " />
						</form>
					</td>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="cadastrar" value="2" />
							<input  id="botao" type="submit" value="Conferencia" style="background-color: gray; " />
						</form>
					</td>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="cadastrar" value="3" />
							<input  id="botao" type="submit" value="Membro" style="background-color: gray; " />
						</form>
					</td>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="cadastrar" value="4" />
							<input  id="botao" type="submit" value="Assistido" style="background-color: gray; " />
						</form>
					</td>
					
									
				</tr>
				</table>
			
					
		<?php
				}
				if ($_GET['a']==2){
					?>
					<form id='cabeca' align='center' style='background-color: green;'> Consultar  </form>
					
				<table align="center">
				<tr>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="consultar" value="1" />
							<input  id="botao" type="submit" value="Conselho Particular" style="background-color: gray; " />
						</form>
					</td>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="consultar" value="2" />
							<input  id="botao" type="submit" value="Conferencia" style="background-color: gray; " />
						</form>
					</td>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="consultar" value="3" />
							<input  id="botao" type="submit" value="Membro" style="background-color: gray; " />
						</form>
					</td>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="consultar" value="4" />
							<input  id="botao" type="submit" value="Assistido" style="background-color: gray; " />
						</form>
					</td>
					
									
				</tr>
				</table>
			
					
		<?php
				}
				if ($_GET['a']==3){
					?>
					<form id='cabeca' align='center' style='background-color: orange;'> Atualizar  </form>
					
				<table align="center">
				<tr>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="atualizar" value="1" />
							<input  id="botao" type="submit" value="Conselho Particular" style="background-color: gray; " />
						</form>
					</td>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="atualizar" value="2" />
							<input  id="botao" type="submit" value="Conferencia" style="background-color: gray; " />
						</form>
					</td>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="atualizar" value="3" />
							<input  id="botao" type="submit" value="Membro" style="background-color: gray; " />
						</form>
					</td>
					<td style="background-color:gray;">
						<form action="index.php" method="get">
							<input  type="hidden" name="atualizar" value="4" />
							<input  id="botao" type="submit" value="Assistido" style="background-color: gray; " />
						</form>
					</td>
					
									
				</tr>
				</table>
			
					
		<?php
				}
			}
			echo"</h2>";
		?>