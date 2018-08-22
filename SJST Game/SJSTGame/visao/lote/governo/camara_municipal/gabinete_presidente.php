<?php 
	include("modal_window.html")
?>
<div style="width: 1000px;height: 500px;background-image:url(imagens/gabinete.png); background-repeat: no-repeat;background-position: center top;">
	<a style="position: relative; top:270px; left:-130px;" href="#dialog" name="modal"> 
		<b>Minha Conta</b><br>
		Saldo:<br>
		Rs1$000
	</a>
	<div style="position: relative; left: 150px;top:-50px; width:30%; border-radius:50px;"> 
		O que deseja?
		<br><br>
		<a class="sala" href="#dialog" name="modal"> Gerir a Conta</a>
		<a class="sala" href="#dialog1" name="modal"> Conseguir Crédito</a>
		<br><br>
	</div>
	<div style="border:none;position:absolute;top:450px;left:-150px;" id="boxes">
		<div id="dialog" class="window" >
			<a href="#" class="close">Fechar [X]</a><br>
			<?php include("lote/governo/camara_municipal/gabinete_alcaide.php"); ?>
		</div>
		<div id="dialog1" class="window">
			<a href="#" class="close">Fechar [X]</a><br>
			<?php //include("lote/governo/banco/agencia/pedir_credito.php"); ?>
		</div>
	</div>
</div>

		

