<?php

?>

<h4 class="titulo4"> Caixa de Saída </h4>
<table align="center">
    <tr class="titulo">
        <td>
            <b> Destinatário </b>
        </td>

        <td>
            <b> Assunto </b>
        </td>

        <td>
            <b> Data </b>
        </td>

        <td>
            <b> Excluir </b>
        </td>

    </tr>
    <?php
    for ($i = 0; $i < count($personagemPrincipal->getCorreio()->getSaida()); $i++) {
        echo "
        <tr>
        <td>
            <input type='checkbox'/> <a href=''>" . $personagemPrincipal->getCorreio()->getSaida()[$i]->getRemetente() . " </a>
        </td>

        <td>
            <a href=''> " . $personagemPrincipal->getCorreio()->getSaida()[$i]->getAssunto() . "</a>
        </td>

        <td>
            <b> " . date_format($personagemPrincipal->getCorreio()->getSaida()[$i]->getData(), 'd/m/Y') . " </b>
        </td>

        <td>
            <input type='submit' value='Excluir'/>
        </td>
    </tr>
        ";
    }
    ?>

    <tr>
        <td colspan="4">
            <input type="submit" value="Excluir Marcados"/>
        </td>
    </tr>
</table>
<br><br>