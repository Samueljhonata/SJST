<?php 

?>
<h3 class="titulo3"> Eleições </h3>
<a onClick="mostraEsconde(1,'municipais');mostraEsconde(0,'regionais');mostraEsconde(0,'pministro');mostraEsconde(0,'cortes');" class="menuCima"> Municipais</a>
<a onClick="mostraEsconde(1,'regionais');mostraEsconde(0,'municipais');mostraEsconde(0,'pministro');mostraEsconde(0,'cortes');" class="menuCima"> Regionais</a>
<a onClick="mostraEsconde(1,'pministro');mostraEsconde(0,'municipais');mostraEsconde(0,'regionais');mostraEsconde(0,'cortes');" class="menuCima"> 1° Ministro </a>
<a onClick="mostraEsconde(1,'cortes');mostraEsconde(0,'municipais');mostraEsconde(0,'regionais');mostraEsconde(0,'pministro');" class="menuCima"> Corte</a>

<div id="municipais" style="border:none;display:none;">
	<?php include("lote/governo/camara_municipal/eleicoes/eleicoes_municipais.php"); ?>
</div>

<div id="regionais" style="border:none;display:none;">
	<?php include("lote/governo/camara_municipal/eleicoes/eleicoes_regionais.php"); ?>
</div>

<div id="pministro" style="border:none;display:none;">
	<?php include("lote/governo/camara_municipal/eleicoes/eleicoes_p_ministro.php"); ?>
</div>

<div id="cortes" style="border:none;display:none;">
	<?php include("lote/governo/camara_municipal/eleicoes/eleicoes_cortes.php"); ?>
</div>