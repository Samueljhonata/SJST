<?php

echo "
		
					
					<form method='post' action='.php'>
						<table align='center'>
							<input type='hidden' name='tipo_cadastro' value='conferencia' />
							<tr>
								<td>
									<b>Nome:</b><br> <input type='text' name='nome' maxlength='60' autofocus required style='width:450px;'/>
								</td>							
								<td colspan='1'>
									<b>Data Fundacao:</b><br> 
									<select style='font-size: 30px; background-color: rgb(230,230,230);' name='dia_fundacao'>";
							for($i=1; $i<=31; $i++){
								echo"
									  <option value='$i'>$i</option>
									";
							}
							echo"		</select> 
									/<select style='font-size: 30px; background-color: rgb(230,230,230);' name='mes_fundacao'>
									  <option value='01'>01</option>
									  <option value='02'>02</option>
									  <option value='03'>03</option>
									  <option value='04'>04</option>
									  <option value='05'>05</option>
									  <option value='06'>06</option>
									  <option value='07'>07</option>
									  <option value='08'>08</option>
									  <option value='09'>09</option>
									  <option value='10'>10</option>
									  <option value='11'>11</option>
									  <option value='12'>12</option>
									</select> /
									<select style='font-size: 30px; background-color: rgb(230,230,230);' name='ano_fundacao'>";	
							for($i=1900; $i<= date('Y'); $i++){
								echo"
									  <option value='$i'>$i</option>
									";
							}
							echo"		</select> 

								</td>

<td colspan='1'>
									<b>Data Agregacao:</b><br> 
									<select style='font-size: 30px; background-color: rgb(230,230,230);' name='dia_agregacao'>";
							for($i=1; $i<=31; $i++){
								echo"
									  <option value='$i'>$i</option>
									";
							}
							echo"		</select> 
									/<select style='font-size: 30px; background-color: rgb(230,230,230);' name='mes_agregacao'>
									  <option value='01'>01</option>
									  <option value='02'>02</option>
									  <option value='03'>03</option>
									  <option value='04'>04</option>
									  <option value='05'>05</option>
									  <option value='06'>06</option>
									  <option value='07'>07</option>
									  <option value='08'>08</option>
									  <option value='09'>09</option>
									  <option value='10'>10</option>
									  <option value='11'>11</option>
									  <option value='12'>12</option>
									</select> /
									<select style='font-size: 30px; background-color: rgb(230,230,230);' name='ano_agregacao'>";	
							for($i=1900; $i<= date('Y'); $i++){
								echo"
									  <option value='$i'>$i</option>
									";
							}
							echo"		</select> 

								</td>
								</tr>
							
							<tr>
								<td><b>Local Reuniao: </b><br> <input type='text' name='local_reuniao' style='width:450px;' maxlength='60'/></td>
								<td><b>Dia da Reuniao:</b><br>
									<select style='font-size: 30px; background-color: rgb(230,230,230);' name='dia_reuniao'>
									  <option value='Segunda-feira'>Segunda-feira</option>
									  <option value='Terca-feira'>Terca-feira</option>
									  <option value='Quarta-feira'>Quarta-feira</option>
									  <option value='Quinta-feira'>Quinta-feira</option>
									  <option value='Sexta-feira'>Sexta-feira</option>
									  <option value='Sabado'>Sabado</option>
									  <option value='Domingo'>Domingo</option>
									</select>

								</td>
								<td><b>Horario da Reuniao:</b><br> <input type='text' name='horario)reuniao' style='width:75px;' maxlength='20'/> Horas </td>
							</tr>
							";
						//----------------
						echo "
						<tr>
							<td>Conselho Particular <br>
								<select style='font-size: 30px; background-color: rgb(230,230,230);' name='mes_agregacao'>
									 <option value='01'>01</option> 
								</select> 
							</td>
						
									";
						
						//-----------------
						echo"
							
								<td align='center' colspan='4'><input id='botao' type='submit' value='Cadastrar' onclick='return confirmar()'/></td>
							</tr>
							
						</table>
						 
					 </form>
					";

?>