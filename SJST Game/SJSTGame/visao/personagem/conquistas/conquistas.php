<?php 

?>
<h4	> <?=$conquistas;?> </h4><br>
<div align="center" style="overflow: auto; height:80%; width: 99%;position:relative; top:-25px;border:none;">

	<?php
		for($j=0;$j<5; $j++){
			$linha = 10 + ($j*80);
			$linha = "$linha"."px";
			for($i=0;$i<8; $i++){
				$coluna = 40 + ($i*100);
				$coluna = "$coluna"."px";
				switch ($conquistas){
					case "Igreja":
						break;
				}
				echo"<div style='width: 60px; height: 60px;border: 1px solid rgba(48,33,30,.5);position:absolute; top:$linha;left:$coluna;'>
				
				</div>
				";
			}
		}
	 ?>
</div>