<?php

	echo "				
					<form method='post' action='.php'>
						<table align='center'>
							<input type='hidden' name='tipo_cadastro' value='cp' />
							<tr>
								<td>
									<b>Nome:</b><br> <input type='text' name='nome' maxlength='60' autofocus required style='width:450px;'/>
								</td>							
								<td colspan='2'>
									<b>Data Nascimento:</b><br> 
									<select style='font-size: 30px; background-color: rgb(230,230,230);' name='dia_nascimento'>";
							for($i=1; $i<=31; $i++){
								echo"
									  <option value='$i'>$i</option>
									";
							}
							echo"		</select> 
									/<select style='font-size: 30px; background-color: rgb(230,230,230);' name='mes_nascimento'>
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
									<select style='font-size: 30px; background-color: rgb(230,230,230);' name='ano_nascimento'>";	
							for($i=1900; $i<= date('Y'); $i++){
								echo"
									  <option value='$i'>$i</option>
									";
							}
							
							echo"		

								
								</tr>
							<tr>
								<td>
									<b>CPF: </b><br> <input type='text' name='cpf' style='width:250px;' maxlength='60'/>
								</td>
								<td>
									<b>RG: </b><br> <input type='text' name='rg' style='width:200px;' maxlength='60'/>
								</td>
							</tr>
							<tr>
								<td>
									<b>Telefone: </b><br> <input type='text' name='telefone' style='width:250px;' maxlength='60'/>
								</td>
								<td>
									<b>Profissao: </b><br> <input type='text' name='profissao' style='width:200px;' maxlength='60'/>
								</td>
							</tr>
							<tr>
								<td><b>Endereco: </b><br> <input type='text' name='local_reuniao' style='width:450px;' maxlength='60'/></td>
								
								<td colspan='2'>
									Filhos
								</td>
							</tr>
							";
						//----------------
						echo "
						<tr>
							<td> Conferencia <br>
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