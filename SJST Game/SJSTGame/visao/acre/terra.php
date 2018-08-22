
	<?php 
		include("cabecalho.php");
		$numero_terra = $_GET['id'];
	?>
	<div align='center'>
		<h3 class="titulo3"> Terra n° <?php echo $numero_terra; ?> </h3> 
		<table>
			<tr align='center'>
				<td>
					<a href="?id=<?php echo $numero_terra;?>" class="sala"> Informações </a>
				</td>
				
				<td>
					<a href="?id=<?php echo $numero_terra;?>" class="sala"> Gerir </a>
				</td>
				
				<td>
					<a href="moradia.php?a=4&id=<?php echo $numero_terra;?>" class="sala"> Moradia </a>
				</td>
				
				<td>
					<a href="?a=6&id=<?php echo $numero_terra;?>" class="sala"> Capela </a>
				</td>
				
				<td>
					<a href="pagina_principal.php?a=7" class="sala"> Mapa </a>
				</td>
			</tr>
		</table>
		
		
		<?php 
			if(isset($_GET["a"])){
				if($_GET["a"] == 4){
					include("moradia.php");
				}
				if($_GET["a"] == 6){
					include("capela.php");
				}
				}else{
		?>
			<h4 style="background-color:rgb(200,200,200);color:white"> Informações </h3> 
			
			<table>
				<tr>
					<td class='titulo'>
						<b>Informações</b>
					</td>
				</tr>
				
				<tr>
					<td colspan='3'>
						Proprietário: <b> <a href="">José da Silva</a> </b>
					</td>
				</tr>
				
				<tr>
					<td colspan='3'>
						Usufrutuário: <b> <a href="">José da Silva</a> </b> (dono)
					</td>
				<tr>
				
				<tr>
					<td>
						Comprado em <b> 10/10/1750 </b>
					</td>
					
					<td>
						Comprado de <b> El Rey de Portugal </b>
					</td>
					
					<td>
						<b> Fazenda Serra Verde </b>
					</td>
					
					
				<tr>
				<tr>
					<td>
						Plantado: <b> Milho </b>
					</td>
					
					<td>
						Estado: <b> Bom </b>
					</td>
					
					<td>
						Status Social: <b> +300 </b>
					</td>
				<tr>

				<tr>
					<td class='titulo'>
						<b>Localização</b>
					</td>
				</tr>
				
				<tr>
					<td>
						Vila: <b> Lisboa </b>
					</td>
					<td>
						Província: <b> Estremadura </b>
					</td>
					<td>
						Reino: <b> Portugal </b>
					</td>
				<tr>
			<table>
			<?php } ?>