<?php
if(isset($_GET['nivel'])){
	$nivel = $_GET['nivel'];
}else{
	$nivel = 1;
}
if($nivel == 1){
	$tipo_igreja = "Catedral Diocesana";
	$cargo = "Bispo";
}else{
	$tipo_igreja = "Catedral Metropolitana";
	$cargo = "Arcebispo";
}
?>
	<h2 class="titulo2"><?= $tipo_igreja; ?></h2>
	<div style="background-image:url(imagens/interior_igreja.png); background-repeat: no-repeat; background-position: center top;" class="divPrincipal center-block" id="principal">
		<a style="position:relative; top:120px;left:190px;"  class="sala" > Assistir a missa </a>
		<a style="position:relative; top:275px;left:280px;"  class="sala"> Rezar </a>
		<a style="position:relative; top:50px;left:330px;"  class="sala"> Sacristia </a>
		<a style="position:relative; top:50px;left:-350px;"  class="sala" onclick="mostraEsconde(0,'principal');mostraEsconde(1,'dentro')"> Gabinete do <?php echo $cargo; ?> </a>
		<a style="position:relative; top:490px;left:-190px;"  class="sala"> Fora da igreja </a>

	</div>

	<div class="divPrincipal autoAjusta center-block invisivel text-center" id="dentro">
		<?php include("lote/igreja/catedral/dentro_catedral.php"); ?>
	</div>

<?php
if (isset($_GET['a'])){
	switch($_GET['a']){
		case 1: include("catedral/informacoes_igreja.php");
		case 2: include("catedral/dentro_igreja.php");
		case 3: include("catedral/casa_paroquial.php");
		case 4: include("catedral/sacristia.php");
		case 5: include("catedral/gabinete_$cargo.php");
		case 6: include("catedral/cemiterio.php");
	}
}else{

}
?>