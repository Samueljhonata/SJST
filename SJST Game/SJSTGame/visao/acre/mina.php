<h2 class="titulo2">Minas - <?php echo $nome_vila; ?></h2>

<?php
	if(isset($_GET['ed'])){
		echo "<div style='width: 1000px;height: 500px;'>";
		include("acre/minas/minas.php"); 
		echo "</div>";
	}else{
?>
<div style='width: 1000px;height: 500px;'>
<table>
	<?php
		for($j=0;$j<5; $j++){
			echo "<tr>";
			for($i=0;$i<8; $i++){
				$k = 1;
				echo"<td style='border:none;'>";
				echo"<a href='acre.php?id=0&tipo_ed=3&ed=$k'><div style='width: 60px; height: 60px;border: 1px solid rgba(48,33,30,.5);'>
					
				</div></a>
				";
				echo"</td>";
			}
			echo "</tr>";
		}	
	?>		
</table>
</div>

	<?php }?>