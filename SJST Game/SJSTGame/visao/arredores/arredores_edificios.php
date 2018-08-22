
	<table>
		<tr>			
			<td>
				<form method="get" >
					<input type="hidden" name="a" value="10" />
					<input type="submit" value="Viajar" class="edificio"/>
				</form>
			</td>
			
			<td>
				<form action="minas_do_governo.php" >
					<input type="submit" value="Minas" class="edificio"/>
				</form>
			</td>
			
			<td>
				<form action="floresta.php" >
					<input type="submit" value="Floresta" class="edificio"/>
				</form>
			</td>
			<td>
				<form method="get" >
					<input type="hidden" name="a" value="13" />
					<input type="submit" value="Acampamentos Militares" class="edificio"/>
				</form>
			</td>
			
		</tr>
		<tr>
			
			<td>
				<form method="get" >
					<input type="hidden" name="a" value="14" />
					<input type="submit" value="Porto de <?php echo $nome_vila ?>" class="edificio"/>
				</form>
			</td>
		
			<td>
				<form method="get" action="terreno.php">
						<input type="submit" value="Meu Terreno"class="edificio" />
				</form>
			</td>

			<td>
				<form method="get" action="edificios_militares.php">
						<input type="submit" value="Edifícios Militares"class="edificio" />
				</form>
			</td>
						
			<td>
				<?php if (3 == 3){ ?>
					<form method="get" action="edificio_especial_rural.php">
						<input type="submit" value="Edifício Especial" class="edificio"/>
					</form>
				<?php } ?>
				
			</td>
			
		</tr>
	</table>