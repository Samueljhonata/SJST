<?php 

?>
<h4 class="titulo4" xmlns="http://www.w3.org/1999/html"> Classe </h4>

<div style="width:97%; height: 330px;position: relative; top:-10px;">
	Você faz parte do <strong><?=$personagemPrincipal->getStatusSocial()->getEstamento(); ?></strong> e é um <b> <?=$personagemPrincipal->getStatusSocial()->getClasse(); ?> </b>. <br>
	<?=$personagemPrincipal->getStatusSocial()->getDescricaoClasse(); ?><br>
	<div align="left"> <strong>Bônus de classe:</strong> </div>
	<br>
	<div align="left" style="overflow: auto;border:none;width:97%;height:60%;position:relative; left:10px;" align="center">
		<?php
		for($i=0; $i < count($personagemPrincipal->getStatusSocial()->getBonusDeClasse()); $i++){
			echo "- ".$personagemPrincipal->getStatusSocial()->getBonusDeClasse()[$i]."<br>";
		}
		?>
	</div>
	<br>
	<input type="submit" value="Aristocrata" />
	<input type="submit" value="Religioso" />
	<input type="submit" value="Burguês" />
	<input type="submit" value="Militar" />
	<input type="submit" value="Médico" />
	<input type="submit" value="Erudito" />
</div>
