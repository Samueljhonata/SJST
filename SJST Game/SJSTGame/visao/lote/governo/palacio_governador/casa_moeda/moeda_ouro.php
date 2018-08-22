<script>
	function calcular(){
		valor= document.getElementById("qt_transformar").value * 2700;
		mil = Math.floor(valor/1000);
		dec= valor%1000;
		if(dec == 0) dec = "000";
		document.getElementById("total").innerHTML = "Rs "+mil+"$"+dec;
	}
</script>
	<?php 

	?>
	
		<br><b>Transformar Moeda em Ouro</b><br><br>
		<table>
			
			<tr align="center">
				<td>
					Img
				</td>
				
				<td>
					Descrição
				</td>
				
				<td>
					Quantidade
				</td>
				
				<td>
					Oitavas de Ouro
				</td>
				
				<td>
					Fundir
				</td>
				
				
			</tr>
			
			<tr align="center">
				<td>
					
				</td>
				
				<td>
					Rs 2$700
				</td>
				
				<td>
					<b> <label id="total"> </label> </b>
				</td>
				
				<td>
					<input type="number" id="qt_transformar" style="width: 100px;" onChange="calcular()"/>
				</td>
				
				<td>
					<input type="submit" value="Fundir" />
				</td>
		</table>
	
	<br>
	
	</div>