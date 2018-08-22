<?php

?>
<h3 class="titulo2">Informações do Exército</h3>

<!--Exército-->
<h3>Informações Gerais</h3>
    <table>
    <tr>
        <td>
            Nome do Exército:
        </td>
        <td>
            <strong><?=$exercito->getNome(); ?></strong>
        </td>
    </tr>
    <tr>
        <td>
            General:
        </td>
        <td>
            <strong><?=$exercito->getGeneral()->getNome(); ?></strong>
        </td>
    </tr>

    <tr>
        <td>
            Fundado em:
        </td>
        <td>
            <strong><?=date_format($exercito->getFundacao(),'d/m/Y - h:i'); ?></strong>
        </td>
    </tr>
</table>
    <br>
    <h3>Unidades Militares</h3>
<?php
	for($i=0; $i<4; $i++){
		if($i==0){
			$imagem = "exercito";
			$unidade_militar = "Exército";
			$comandante = "General ".$exercito->getGeneral()->getNome();
			$subordinado = "Regimento 'Nome'";
		}
		if($i==1){
			$imagem = "regimento";
			$unidade_militar = "Regimento";
			$comandante = "Coronel 'Nome'";
			$subordinado = "Batalhão 'Nome'";
		}
		if($i==2){
			$imagem = "batalhao";
			$unidade_militar = "Batalhão";
			$comandante = "Capitão 'Nome'";
			$subordinado = "Pelotão	'Nome'";
		}
		if($i==3){
			$imagem = "pelotao";
			$unidade_militar = "Pelotão";
			$comandante = "Tenente 'Nome'";
			$subordinado = "";
		}


?>



<table>
	<tr class="titulo" align="center">
		<td colspan="3">
			Unidade Militar "<?php echo $unidade_militar; ?>"
		</td>
	</tr>

	<tr>
		<td rowspan="3" align="center" style="width: 20%;">
			<b><?php echo $unidade_militar; ?> "Nome" </b><br>
			<img title="<?php echo $unidade_militar; ?>" src="imagens/unidades_militares/<?php echo $imagem;?>.png" />
		</td>
	</tr>

	<tr>
		<td style="width: 20%;">
			Comandante:
		</td>
		<td>
			<b><a href="" class="link"> <?php echo $comandante; ?></a></b>
		</td>
	</tr>

	<tr>
		<td>
			Subordinados:
		</td>
		<td>
			<b> <?php echo $subordinado; ?></b>
			<br><b> <?php echo $subordinado; ?></b>
			<br><b> <?php echo $subordinado; ?></b>
		</td>
	</tr>
</table>
<!--//Exército-->
	<?php } ?>