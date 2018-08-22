<?php

?>

<h4 class="titulo4"> Histórico de Eventos </h4>
<table align="center">
	<tr class="titulo">
		<td>
			<b> Data </b>
		</td>

		<td>
			<b> Evento </b>
		</td>

	</tr>
	<?php
	for($i=0; $i<count($empresa->getEventos()); $i++){
		echo"
        <tr>
        <td>
            <b> ". date_format($empresa->getEventos()[$i]->getData(),'d/m/Y')." </b>
        </td>

        <td>
            ".$empresa->getEventos()[$i]->getTexto()."
        </td>
    </tr>
        ";
	}
	?>

</table>
<br><br>