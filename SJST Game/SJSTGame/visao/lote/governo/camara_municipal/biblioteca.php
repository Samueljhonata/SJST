<?php 

?>
<h3 class="titulo3"> Biblioteca </h3>
<a onClick="mostraEsconde(1,'leis');mostraEsconde(0,'enciclopedias');mostraEsconde(0,'museu');" class="menuCima"> Leis e Decretos</a>
<a onClick="mostraEsconde(1,'enciclopedias');mostraEsconde(0,'leis');mostraEsconde(0,'museu');" class="menuCima"> Enciclopédias</a>
<a onClick="mostraEsconde(1,'museu');mostraEsconde(0,'leis');mostraEsconde(0,'enciclopedias');" class="menuCima"> Museu</a>

<div id="leis" style="border:none;display:none;">
	<?php include("lote/governo/camara_municipal/biblioteca/leis_decretos.php"); ?>
</div>

<div id="enciclopedias" style="border:none;display:none;">
	<?php include("lote/governo/camara_municipal/biblioteca/enciclopedias.php"); ?>
</div>

<div id="museu" style="border:none;display:none;">
	<?php include("lote/governo/camara_municipal/biblioteca/museu.php"); ?>
</div>
