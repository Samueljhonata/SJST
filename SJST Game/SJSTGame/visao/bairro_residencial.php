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

<h2 class="titulo2">Bairro Residencial</h2>
<a href='?a=2#p' class="sala" > <b>Bairro Residencial</b></a>
<a href='?a=1#p' class="sala" > <b>Centro da Povoação</b></a>
<a href='?a=3#p' class="sala" > <b>Bairro Comercial</b></a>
<div style="background-color: green;" class="divPrincipal autoAjusta center-block">
	
<?php 
	if($tipo_vila ==1){
		$x = 10;
		$y = 5;//50 lotes
	}
	if($tipo_vila ==2){
		$x = 10;
		$y = 10;//100 lotes
	}
	if($tipo_vila ==3){
		$x = 15	;
		$y = 10; //150 lotes
	}
	for($i=1; $i<=400; $i++){
		$tipo_lote[$i] = "venda";
	}
	echo "<table style='background-color: brown;' cellspacing =0>";
	for($i=1; $i<=400; $i= $i+4){
		$tipo_lote[$i] = "casa";
	}
	for($i=2; $i<=400; $i= $i+7){
		$tipo_lote[$i] = "casa";
	}
	$a=1;
	for($i=1; $i <=$y; $i++){
		echo "<tr style='background-color: green;'>";
		for($j=1; $j <=$x; $j++){
			echo "<td style='border: 0px solid ;'>";
			if($tipo_lote[$a] == "venda"){
				echo "<a href='lote.php?id=$a&tipo_ed=0'><img src='imagens/lote.png' title='Lote a Venda - $a - Proprietário: El Rey' /></a>";
			}
			if($tipo_lote[$a] == "casa"){
				echo "<a href='lote.php?id=$a&tipo_ed=3&tipo_con=1'><img src='imagens/casa.png' title='Casa - $a - Proprietário: -'/></a>";
			}
			//echo "<td style='border: 1px solid ;'>";
			echo "</td>";
			$a++;
			//if($j%4 == 0)echo"&nbsp &nbsp &nbsp";
		}
		echo"<tr><td style='border: 0px solid;height: 10px;'></td></tr>";
		//if($i%2 == 0)echo"<p>";
	}
	echo "</table>";
?>
		
	
	<br>
	</div>
	<br>