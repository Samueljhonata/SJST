<h4 class="titulo4"> Quadro de Avisos </h4>
<table>
	<tr align="center" class="titulo">
		<td>
			Data
		</td>

		<td>
			Assunto
		</td>

	</tr>

	<?php
	for ($i = 0; $i < count($empresa->getAvisos()); $i++) {
		echo "
        <tr>
        <td>
            <b> " . date_format($empresa->getAvisos()[$i]->getData(), 'd/m/Y - h:i') . " </b>
        </td>

        <td>
            <a class='link' onclick=mostraEsconde(1,'aviso$i')>" . $empresa->getAvisos()[$i]->getAssunto() . "</a>
        </td>
    </tr>
    <tr>
        <td colspan='2'>
            <div id='aviso$i' class='invisivel'>
            <a class='link' onclick=mostraEsconde(0,'aviso$i') style='position: relative; left: 95%'> Fechar </a><br>
                " . $empresa->getAvisos()[$i]->getConteudo() . "
            </div>
        </td>
        
    </tr>
        ";
	}
	?>
</table>
<br>
