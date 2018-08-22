<style>
	.quadro{
		width: 10px;
		height:30px;
	}
</style>
<br>
	<div  style="  overflow: auto;width: 1000px;height: 500px;background-color: green; background-repeat: no-repeat;background-position: center top;">
		<?php 
			$municipio = $nome_vila;
			echo "<table style='background-color: green;' cellspacing ='0' >";
			$a=1;
			for($i=1; $i<=1000; $i++){
				$cor[$i] = "blue";
			}
			for($i=161; $i<=1000; $i++){
				$cor[$i] = "red";
			}
			for($i=172; $i<=180; $i++){
				$cor[$i] = "blue";
			}
			
			$a=1;
			for($i=1; $i <=20; $i++){
				echo "<tr align='center'style='background-color: green;'>";
				for($j=1; $j <=20; $j++){
							
						if(($a == 31) || ($a == 95) || ($a == 267)){
							if($a == 31){
								echo "<td class='quadro' colspan='2' rowspan='2' style='border: 0px solid ;'>";
								echo "
									<a href='arredores/viajar/viajando.php?lugar=1'>
										<img src='arredores/viajar/aldeia.png' title='Aldeia de Montemor, Município de Santarém - Província de Estremadura'style='width: 80%;' />
									</a>";
							}
							if($a == 95){
								echo "<td class='quadro' colspan='3' rowspan='3' style='border: 0px solid ;background-color: ;'>";
								echo "
									<a href='arredores/viajar/viajando.php?lugar=2'>
										<img src='arredores/viajar/vila.png' title='Vila de Santarém - Província de Estremadura' style='width: 80%;'/>
									</a>";
							}
							if($a == 267){
								echo "<td class='quadro' colspan='4' rowspan='4' style='border: 0px solid ;'>";
								echo "
									<a href='arredores/viajar/viajando.php?lugar=3'>
										<img src='arredores/viajar/cidade.png' title='Cidade de Lisboa - Província de Estremadura' style='width: 80%;'/>
									</a>";
							}
							
						}else{
							echo "<td class='quadro' style='border: 0px solid ;background-color: $cor[$a];r'>";
							echo "
								<a href='arredores/viajar/viajando.php?lugar=4&municipio=$municipio '>
									<img src='arredores/viajar/lote_.png' title='$a' style='width: 80%;'/>
								</a>";
						}
							echo "</td>";
					$a++;
				}
				echo"</tr>";
				//if($i%2 == 0)echo"<p>";
			}
		echo "</table>";
		?>
	
	</div>
	<br>