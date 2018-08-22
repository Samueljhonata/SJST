<?php 
	
?>

<h3 class="titulo3"> Camas </h3> 

<table>	
	<tr class='titulo'>
		<td>
			<b> Img </b>
		</td>
				
		<td>
			<b> Descrição </b>
		</td>
		
		<td>
			<b> Informações </b>
		</td>
		
		<td>
			<b> Estado </b>
		</td>
		
		<td>
			<b> Descansar </b>
		</td>
	</tr>
			
	<tr>
		<td>
			<b>  </b>
		</td>
				
		<td>
			<b> Cama Comum </b>
		</td>
				
		<td>
			<b> Descansa x% por hora </b>
		</td>
		
		<td>
			<b style="color: blue;"> Desocupada </b>
		</td>
		
		<td>
			<select>
				<?php for($i=1; $i<=100;$i++) echo" <option> $i% </option>"; ?>
			</select>
			<input type="submit" value="Descansar" /> 
		</td>
	</tr>

</table>
<br><br>