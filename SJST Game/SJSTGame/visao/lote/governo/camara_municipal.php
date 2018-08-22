<h2 class="titulo2">Câmara Municipal de <?php echo $nome_vila; ?></h2>

<div id="principal"style="background-image:url(imagens/portas.png); background-repeat: no-repeat;background-position: center top;" class="divPrincipal center-block text-center">

	<a class="sala" onClick="mostraEsconde(1,'eleicoes');mostraEsconde(0,'principal');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salao');mostraEsconde(0,'presidente');mostraEsconde(0,'vereador');mostraEsconde(0,'assistente');" style="position: relative; left: -85px;top:100px; width:30%;">
		Sala de Votações
	</a>
	<a class="sala" onClick="mostraEsconde(1,'biblioteca');mostraEsconde(0,'principal');mostraEsconde(0,'eleicoes');mostraEsconde(0,'salao');mostraEsconde(0,'presidente');mostraEsconde(0,'vereador');mostraEsconde(0,'assistente');" style="position: relative; left: -60px;top:50px; width:30%;">
		Biblioteca
	</a>
	<a class="sala" onClick="mostraEsconde(1,'salao');mostraEsconde(0,'principal');mostraEsconde(0,'eleicoes');mostraEsconde(0,'biblioteca');mostraEsconde(0,'presidente');mostraEsconde(0,'vereador');mostraEsconde(0,'assistente');" style="position: relative; left: 40px;top:10px; width:30%;">
		Salão Principal
	</a>
	<a class="sala" onClick="mostraEsconde(1,'presidente');mostraEsconde(0,'principal');mostraEsconde(0,'eleicoes');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salao');mostraEsconde(0,'vereador');mostraEsconde(0,'assistente');" style="position: relative; left: 90px;top:10px; width:30%;">
		Gabinete do Presidente
	</a>
	<a class="sala" onClick="mostraEsconde(1,'vereador');mostraEsconde(0,'principal');mostraEsconde(0,'eleicoes');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salao');mostraEsconde(0,'presidente');mostraEsconde(0,'assistente');" style="position: relative; left: 150px;top:50px; width:30%;">
		Gabinete do Vereador
	</a>
	<a class="sala" onClick="mostraEsconde(1,'assistente');mostraEsconde(0,'principal');mostraEsconde(0,'eleicoes');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salao');mostraEsconde(0,'presidente');mostraEsconde(0,'vereador');" style="position: relative; left: 100px;top:100px; width:30%;">
		Gabinete do Assistente
	</a>
</div>

<div id='eleicoes' align="center" class="divPrincipal center-block invisivel text-center">
	<?php include("lote/governo/camara_municipal/eleicoes.php"); ?>
</div>

<div id='biblioteca' align="center" class="divPrincipal center-block invisivel text-center">
	<?php include("lote/governo/camara_municipal/biblioteca.php"); ?>
</div>

<div id='salao' align="center" class="divPrincipal center-block invisivel text-center">
	<?php include("lote/governo/camara_municipal/informacoes_vila.php"); ?>
</div>

<div id='presidente' align="center" class="divPrincipal center-block invisivel text-center">
	<?php include("lote/governo/camara_municipal/gabinete_presidente.php"); ?>
</div>

<div id='vereador' align="center" class="divPrincipal center-block invisivel text-center">
	<?php include("lote/governo/camara_municipal/gabinete_vereador.php"); ?>
</div>

<div id='assistente' align="center" class="divPrincipal center-block invisivel text-center">
	<?php include("lote/governo/camara_municipal/gabinete_assistente.php"); ?>
</div>

<a class="sala" onClick="mostraEsconde(1,'principal');mostraEsconde(0,'eleicoes');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salao');mostraEsconde(0,'presidente');mostraEsconde(0,'vereador');mostraEsconde(0,'assistente');" style="position: relative; left: 485px;top:-10px; width:30%;">
	Voltar
</a>

