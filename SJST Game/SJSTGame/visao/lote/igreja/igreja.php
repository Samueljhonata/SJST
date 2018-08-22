<?php 
	$tipo_igreja = "Igreja Matriz de $nome_vila";
	$nivel = 2;
	
?>

<?php 
	if (isset($_GET['a'])){
		
		switch($_GET['a']){
			case 1: include("igreja/informacoes_igreja.php");
			case 2: include("igreja/dentro_igreja.php");
			case 3: include("igreja/casa_paroquial.php");
			case 4: include("igreja/sacristia.php");
			case 5: include("igreja/gabinete_paroco.php");
			case 6: include("igreja/cemiterio.php");
		}
			
	}else{
?>
<h2 class="titulo2"><?php echo $tipo_igreja; ?></h2>
<div style="width: 1000px;height: 500px;background-image:url(imagens/interior_igreja.png); background-repeat: no-repeat; background-position: center top;">
	<a style="position:relative; top:120px;left:190px;" href="?id=<?php echo $id;?>&a=1" class="sala"> Assistir a missa </a>
	<a style="position:relative; top:275px;left:280px;" href="?id=<?php echo $id;?>&a=2" class="sala"> Rezar </a>
	<a style="position:relative; top:50px;left:330px;" href="?id=<?php echo $id;?>&a=4" class="sala"> Sacristia </a>
	<a style="position:relative; top:50px;left:-350px;" href="?id=<?php echo $id;?>&a=5" class="sala"> Gabinete do Pároco </a>
	<a style="position:relative; top:490px;left:-190px;" href="?id=<?php echo $id;?>&a=6" class="sala"> Fora da igreja </a>
			
</div>

<?php 
		
	}
?>