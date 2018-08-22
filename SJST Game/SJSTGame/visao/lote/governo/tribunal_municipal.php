<?php
if (isset($_GET['a'])){

	switch($_GET['a']){
		/*case 1: include("lote///.php"); break;
        case 2: include("lote///.php"); break;
        case 3: include("lote///.php"); break;
        case 4: include("lote///.php"); break;
        case 5: include("lote///.php"); break;
        case 6: include("lote///.php"); break;*/
	}

}else{
	?>
	<h2 class="titulo2">Tribunal Municipal de Justiça de <?php echo $nome_vila; ?></h2>
	<div style="background-image:url(imagens/portas.png); background-repeat: no-repeat;background-position: center top;" class="divPrincipal center-block text-center">


		<a class="sala" style="position: relative; left: -120px;top:100px; width:30%;">
			Gabinete do Promotor
		</a>

		<a class="sala" style="position: relative; left: -150px;top:50px; width:30%;">
			Gabinete do Juiz
		</a>
		<a class="sala" style="position: relative; left: -60px;top:10px; width:30%;">
			Tribunal do Juri
		</a>
		<a class="sala"  style="position: relative; left: 10px;top:10px; width:30%;">
			Salão Principal
		</a>

		<a class="sala" href="" style="position: relative; left: 80px;top:50px; width:30%;">
			Gabinete do Juiz de Fora
		</a>
		<a class="sala" href="" style="position: relative; left: 80px;top:100px; width:30%;">
			Prisão
		</a>
	</div>

	<?php
}
?>

