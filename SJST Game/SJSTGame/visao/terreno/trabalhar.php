<script>
	function tipo_campo(valor){	
		if(valor == 2){
			document.getElementById('cultura').style.display = 'none';
			document.getElementById('animais').style.display = 'block';
		}else{
					document.getElementById('cultura').style.display = 'block';
			document.getElementById('animais').style.display = 'none';
		}
	}
	function tipo_trabalho(valor){	
		if(valor == 0){
			document.getElementById('contratar').style.display = 'none';
		}else{
			document.getElementById('contratar').style.display = 'block';
		}
	}
	window.onload = function tipo_campo1(){
		document.getElementById('animais').style.display = 'none';
		document.getElementById('contratar').style.display = 'none';
	}
	
</script>

	<?php 
		
		
	?>
		<h3  class="titulo3"> Trabalhar nas Terras </h3> 
			
			<table>
				<tr align="center" class="titulo">
					<td rowspan="2">
						<b> Terra </b>
					</td>
					
					<td rowspan="2">
						<b> Localização </b>
					</td>
					
					<td colspan="3">
						<b> Campos </b>
					</td>
					
					<td>
						<label><input type="radio" checked name="tipo_campo" onClick="tipo_campo(1);" value=""> Cultura </label>
					</td>
					
					<td>
						<label><input type="radio" name="tipo" onClick="tipo_trabalho(0);" checked value=""> Trabalhar </label>
					</td>
					
					
				</tr>
				<tr align="center" class="titulo">
					<td>
						<b> Plantado </b>
					</td>
					<td>
						<b> Dias </b>
					</td>
					
					<td>
						<b> Adubado </b>
					</td>
					
					<td>
						<label><input type="radio" name="tipo_campo" onClick="tipo_campo(2);" value=""> Animais </label>
					</td>
					
					<td>
						<label><input type="radio" name="tipo" onClick="tipo_trabalho(1);" value=""> Contratar </label>
					</td>
				</tr>
				
				<tr align="center">
					<td>
						 <a href="terra.php?id=1"> Terra <b>01</b> </a>
					</td>
					
					<td>
						Lisboa, Estremadura, Portugal
					</td>
					
					<td>
						<b> Milho </b>
					</td>
					
					<td>
						<b> 1 </b> 
					</td>
					
					<td>
						<b> Não </b>
					</td>
					
					<td>
						<label id="cultura">
							<select>
								<option> Milho </option>
							</select>
							<input type="submit" value="Plantar"/>
						</label>
					
						<label id="animais">
							<select>
								<option> 1 </option>
							</select>
							<select>
								<option> Porcos </option>
							</select>
							<input type="submit" value="Comprar por Rs 500"/>
						</label>
					</td>
					
					<td>
						<label id="contratar">
							Salário: <input type="number" style="width: 80px;" />
						</label>
						<input  type="submit" value="Arar" />
						<input  type="submit" value="Adubar" />
						<input  type="submit" value="Capinar" />
						<input  type="submit" value="Colher" />
					</td>
				</tr>
				
				
			</table>
