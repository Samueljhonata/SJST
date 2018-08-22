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
	
		<br><b>Transformar Ouro em Moeda</b><br><br>
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
					Dinheiro
				</td>
				
				<td>
					Cunhar
				</td>
				
				
			</tr>
			
			<tr align="center">
				<td>
					
				</td>
				
				<td>
					Oitava de Ouro
				</td>
				
				<td>
					<input type="number" id="qt_transformar" style="width: 100px;" onChange="calcular()"/>
				</td>
				
				<td>
					<b> <label id="total"> </label> </b>
				</td>
				
				<td>
					<input type="submit" value="Cunhar" />
				</td>
		</table>
	
	<br>
	
	</div>