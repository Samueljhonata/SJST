<?php

echo "
		
					
					<form method='post' action='cadastrando.php'>
						<table align='center'>
							<input type='hidden' name='tipo_cadastro' value='cp' />
							<tr>
								<td>
									<b>Conselho:</b><br> <input type='text' name='nome' maxlength='60' autofocus required style='width:550px;'/>
								</td>
								<td>
									<b>Codigo Conselho:</b><br> <input type='text' name='cod' maxlength='20' required style='width:200px;'/>
								</td>	
								<td>
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
								</tr>
							
							<tr>
								<td><b>Local Reuniao: </b><br> <input type='text' name='local_reuniao' style='width:550px;' maxlength='60'/></td>
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
								<td><b>Horario da Reuniao:</b><br> <input type='text' name='horario_reuniao' style='width:75px;' maxlength='20'/> Horas </td>
							</tr>
							<tr> 
								<td colspan='3'> Diretoria </td>
							</tr>
							<tr>
								<td colspan='3'>
									Presidente:<br>
									ID: <input type='number' name='id_presidente' style='width: 100px;'/> Nome: <input disabled  type='text' name='id_presidente' style='width: 550px;'/> CPF: <input type='text' style='width: 200px;'/>
								</td>
							</tr>
							<tr>
								<td align='center' colspan='4'><input id='botao' type='submit' value='Cadastrar' onclick='return confirmar()'/></td>
							</tr>
						</table>
						 
					 </form>
					";

?>