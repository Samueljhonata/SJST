<?php 
	
?>
<h3 class="titulo2">Sala do Comandante do Batalhão "" </h3>
<div align="left" style="border:none;">
	<a class="menuCima" onClick="mostraEsconde(1,'info_bat');mostraEsconde(0,'organizacao_bat');mostraEsconde(0,'subordinados_bat');mostraEsconde(0,'novos_bat');mostraEsconde(0,'inventario_bat');" > Informações Batalhão</a>
	
	<a class="menuCima" onClick="mostraEsconde(1,'organizacao_bat');mostraEsconde(0,'info_bat');mostraEsconde(0,'subordinados_bat');mostraEsconde(0,'novos_bat');mostraEsconde(0,'inventario_bat');" > Organização e Tática</a>
	
	<a class="menuCima" onClick="mostraEsconde(1,'subordinados_bat');mostraEsconde(0,'info_bat');mostraEsconde(0,'organizacao_bat');mostraEsconde(0,'novos_bat');mostraEsconde(0,'inventario_bat');" > Subordinados</a>
	
	<a class="menuCima" onClick="mostraEsconde(1,'novos_bat');mostraEsconde(0,'info_bat');mostraEsconde(0,'organizacao_bat');mostraEsconde(0,'subordinados_bat');mostraEsconde(0,'inventario_bat');" > Novos Pelotões</a>
	
	<a class="menuCima" onClick="mostraEsconde(0,'info_bat');mostraEsconde(0,'organizacao_bat');mostraEsconde(0,'subordinados_bat');mostraEsconde(0,'novos_bat');mostraEsconde(1,'inventario_bat');" > Inventário do Batalhão </a>
</div>		
		
<div id="info_bat" style="display:block;border:none;">
	<?php include("exercito/informacao_unidade.php"); ?>
</div>

<div id="organizacao_bat" style="display:none;border:none;">
	<?php //include("exercito/organizacao.php"); ?>
</div>

<div id="subordinados_bat" style="display:none;border:none;">
	<?php include("exercito/subordinados.php"); ?>
</div>

<div id="novos_bat" style="display:none;border:none;">
	<?php include("exercito/pedidos_ingresso.php"); ?>
</div>

<div id="inventario_bat" style="display:none;border:none;">
	<?php include("inventario.php"); ?>
</div>