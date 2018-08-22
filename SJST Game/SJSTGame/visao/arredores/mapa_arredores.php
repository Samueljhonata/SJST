<style>
	
	.rua{
		width: 10px;
		height: 10px;
		background-color: brown;
		border: 0px;
	}
	.rua_vertical{
		width: 10px;
		height: 10px;
		background-color: brown;
		border: 0px;
	}
	.casa{
		width: 50px;
		height: 50px;
		background-color: green;
		border: 0px;
	}
	.casa0{
		width: 100%;
		height: 100%;
		background-color: green;
		border: 1px solid;
		
	}
</style>
	<div style="overflow: auto; width: 90%;height: 500px;">
	<table  cellspacing="0" cellpadding="1" style="">
		
		<?php $a=1;
			for($i=0; $i <50; $i++){
				echo"<tr>";
				for($j=0; $j <50; $j++){
					echo "<td class='casa'><input name='Hectare $a' value='$a' type='button' title='Hectare $a' class='casa0'/></td>";
					$a++;
				}
				echo"</tr>";
			}
		
		?>
		</tr>
	</table>
	</div>