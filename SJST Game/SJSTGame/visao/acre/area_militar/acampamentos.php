<h3 class="titulo3">Acampamentos Militares - <?php echo $nome_vila; ?></h3>
<table>
	<?php
		for($j=0;$j<3; $j++){
			echo "<tr>";
			for($i=0;$i<5; $i++){
				echo"<td style='border:none;'>";
				echo"<a href='acre.php?id=9&tipo_ed=4&tipo_ed=8'><div style='width: 60px; height: 60px;border: 1px solid rgba(48,33,30,.5);'>
					
				</div></a>
				";
				echo"</td>";
			}
			echo "</tr>";
		}	
	?>		
</table>
