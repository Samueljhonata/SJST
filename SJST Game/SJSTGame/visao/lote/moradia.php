<?php 
	$tipo_moradia = "Casa";

	if(isset($_GET['ed'])){
		include("lote/moradia/dentro.php"); 
	}else{
?>

<h2 class="titulo2"><?php echo $tipo_moradia; ?></h2>
	<div style="width: 1000px;height: 500px;background-image:url(imagens/moradia.png); background-repeat: no-repeat;background-position: center top;">
		
		
		<br>
		<br><a href="lote.php?id=0&tipo_ed=3&ed=1" class="sala" style="position:relative; top: 350px;">Entrar</a>
		<br><a href="pagina_principal.php?a=7" class="sala" style="position:relative; top: 420px;left: 430px;">Voltar para o bairro</a>
		<?php 	if($venda == 1 ) include("lote/placa_venda.php"); ?>
	</div>
	<?php }?>
