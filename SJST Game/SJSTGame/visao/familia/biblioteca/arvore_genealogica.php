<h4 class="titulo4"> Árvore Genealógica </h4>

<table>
    <tr class="titulo">
        <td>
            Data de entrada
        </td>
        <td>
            Nome
        </td>
        <td>
            Tipo
        </td>
        <td>
            Situação
        </td>

    <tr>
        <td>
            10/10/1750
        </td>

        <td>
            <a href=""><strong> <?= $familia->getConselhoAnciaos()->getPatriarca()->getNome(); ?> </strong></a>
        </td>
        <td>
            Patriarca
        </td>
        <td>
            <?= $familia->getConselhoAnciaos()->getPatriarca()->getSituacao(); ?>
        </td>
    </tr>

    <tr>
        <td>
            10/10/1750
        </td>

        <td>
            <a href=""><strong> <?= $familia->getConselhoAnciaos()->getHerdeiro()->getNome(); ?> </strong></a>
        </td>
        <td>
            Herdeiro
        </td>
        <td>
            <?= $familia->getConselhoAnciaos()->getHerdeiro()->getSituacao(); ?>
        </td>
    </tr>

    <?php
    for ($i = 0; $i < count($familia->getMembros()); $i++) {
        echo "
        <tr>
        <td>
            " . date_format($familia->getMembros()[$i]->getEntrada(),'d/m/Y') . "
        </td>
        <td>
            <href=''><b> " . $familia->getMembros()[$i]->getPersonagem()->getNome() . " </b></href>
        </td>
        
        <td>
            Membro
        </td>
        
        <td>
            " . $familia->getMembros()[$i]->getPersonagem()->getSituacao() . "
        </td>

    </tr>
        ";
    }
    ?>
</table>
<br>

