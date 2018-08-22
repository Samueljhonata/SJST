
	<?php 

	?>
	
		<?php if(isset($_GET['nova'])){
			include("escrever_nota.php");
		}else{ ?>
		<h4 class="titulo4"> Minhas Notas </h4>
		<table>
			<tr align="center"class="titulo">
				<td>
					Data
				</td>
				
				<td>
					Assunto
				</td>
				
				<td>
					Excluir
					<a style="color: white" href="?a=7&b=2&nova">Novo </a>
				</td>
			</tr>
			
			<tr align="center">
				<td>
					<b> 10/10/1750; 10:09 </b>
				</td>
				<td>
					<a href=""> Nota1 </a>
				</td>
				
				<td>
					<input type="submit" value="Excluir" />
				</td>
				
			</tr>
		</table>
		<br>
		<?php }?>