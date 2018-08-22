<?php 
	$unidade = "";
?>

<table>
	<tr class="titulo" align="center">
		<td colspan="3">
			Informações sobre <?php echo $unidade; ?>
		</td>
	</tr>
	
	<tr align="center">
		<td rowspan="5">
			<img src="imagens/unidades_militares/pelotao.png" style="width:150px;"/>
			<br><b><?php echo $unidade; ?></b>
		</td>
	</tr>
	
	<tr>
		<td>
			<b>Comandante da Unidade:</b>
		</td>
		
		<td>
			<b><a href="" class="link"> José da Silva </a></b>
		</td>
	</tr>
	
	<tr>
		<td>
			<b>Unidade integrante:</b>
		</td>
		
		<td>
			<b>Batalhão "Nome"</b>
		</td>
		
	</tr>
	
	<tr>
		<td>
			<b>Comandante Superior:</b>
		</td>
		
		<td>
			<b><a href="" class="link"> "Patente Nome" </a></b>
		</td>
		
	</tr>
	
	<tr>
		<td>
			<b>Subordinados:</b>
		</td>
		
		<td>
			<b><a href="" class="link"> "Patente" "Nome"</a></b>
			<br><b><a href="" class="link"> "Patente" "Nome"</a></b>
			<br><b><a href="" class="link"> "Patente" "Nome"</a></b>
			<br><b><a href="" class="link"> "Patente" "Nome"</a></b>
			<br><b><a href="" class="link"> "Patente" "Nome"</a></b>
			<br><b><a href="" class="link"> "Patente" "Nome"</a></b>
			<br><b><a href="" class="link"> "Patente" "Nome"</a></b>
		</td>
		
	</tr>
</table>
<input type="submit" value="Renomear <?php echo $unidade; ?>" />
<input type="submit" value="Pedir Demissão do Cargo" style="color:red;"/>