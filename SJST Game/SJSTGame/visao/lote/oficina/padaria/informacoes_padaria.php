<?php 
	$nome_estabelecimento = "Padaria Pão Doce";
	$proprietario = "José da Silva";
	$data_abertura = "10/10/1755";
	$fundador = "José da Silva";
	$usufrutuario = "José da Silva";
	$nivel = 1;
	$pts_status_social = "+100";
	$localizacao_vila = "Lisboa";
	$localizacao_regiao = "Estremadura";
	
?>
	<br>
				<table>
					<tr>
						<td class='titulo' colspan='3'>
							<b>Informações sobre a <?php echo $nome_estabelecimento; ?></b>
						</td>
					</tr>
					
					<tr>
						<td colspan='2'>
							Proprietário: <b> <a href=""> <?php echo $proprietario; ?> </a> </b>
						</td>
					
						<td>
							Aberta em <b> <?php echo $data_abertura; ?> </b> por <b> <a href=""> <?php echo $fundador; ?> </a> </b>
						</td>
					</tr>
					
					<tr>
						<td colspan='3'>
							Usufrutuário: <b> <a href=""> <?php echo $usufrutuario; ?> </a></b>
						</td>
					</tr>
					
					<tr>
						<td colspan='2'>
							Nível: <b> <?php echo $nivel; ?>  </b>
						</td>
						
						<td>
							Status Social: <b> <?php echo $pts_status_social; ?> </b>
						</td>
					</tr>
					<tr>
						<td class='titulo'>
							<b>Localização</b>
						</td>
					</tr>
					
					<tr>
						<td>
							Vila: <b> <?php echo $localizacao_vila; ?>  </b>
						</td>
						<td>
							Província: <b> <?php echo $localizacao_regiao; ?> </b>
						</td>
						<td>
							Reino: <b> Portugal </b>
						</td>
					</tr>
				</table>
			