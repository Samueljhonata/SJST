	<h2 class="titulo2">Mercado Municipal de <?php echo $nome_vila; ?></h2>
		
	<div class="divPrincipal center-block text-center">

		<div align="left" style="border:none;">
			<a onClick="mostraEsconde(1,'div1');mostraEsconde(0,'div2');mostraEsconde(0,'div3');" class="menuCima"> Mercado de Bens</a> 
			<a onClick="mostraEsconde(0,'div1');mostraEsconde(1,'div2');mostraEsconde(0,'div3');" class="menuCima"> Mercado de Trabalho</a> 
			<a onClick="mostraEsconde(0,'div1');mostraEsconde(0,'div2');mostraEsconde(1,'div3');" class="menuCima"> Mercado Imobiliário</a>
		</div>
			
		<div id='div1' align="center" style="border:none;position:relative; top:-10px;">
			<?php include("lote/governo/mercado_municipal/mercado_bens.php"); ?>
		</div>
		
		<div id='div2' align="center" style="border:none;position:relative; top:-10px;display:none;">
			<?php include("lote/governo/mercado_municipal/mercado_trabalho.php"); ?>
		</div>
		
		<div id='div3' align="center" style="border:none;position:relative; top:-10px;display:none;">
			<?php include("lote/governo/mercado_municipal/mercado_imobiliario.php"); ?>
		</div>
	</div>

