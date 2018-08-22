
<table class="table table-responsive">
    <tr class="titulo">
        <td style="width: 35%">
            Situação
        </td>

        <td>
            Cargo
        </td>

        <td>
            Tipo
        </td>
    </tr>

    <?php
    for($i=0; $i < count($personagemPrincipal->getMeusCargos()); $i++) {
        if (!$personagemPrincipal->getMeusCargos()[$i]->getStatus()) {
            echo "
        <tr>
        <td>
            Desde <strong>" . date_format($personagemPrincipal->getMeusCargos()[$i]->getInicioMandato(), 'd/m/Y') . "</strong> até <strong>" . date_format($personagemPrincipal->getMeusCargos()[$i]->getFimMandato(), 'd/m/Y') . "</strong> (Em andamento)
        </td>

        <td>
            <a href='" . $personagemPrincipal->getMeusCargos()[$i]->getGabinete() . "'> " . $personagemPrincipal->getMeusCargos()[$i]->getTitulo() . " </a>
        </td>

        <td>
            " . $personagemPrincipal->getMeusCargos()[$i]->getTipo() . "
        </td>
    </tr>
        ";
        } else {
            echo "
        <tr>
        <td>
            De <strong>" . date_format($personagemPrincipal->getMeusCargos()[$i]->getInicioMandato(), 'd/m/Y') . "</strong> a <strong>" . date_format($personagemPrincipal->getMeusCargos()[$i]->getFimMandato(), 'd/m/Y') . "</strong> (Terminado)
        </td>

        <td>
            <a href='" . $personagemPrincipal->getMeusCargos()[$i]->getGabinete() . "'> " . $personagemPrincipal->getMeusCargos()[$i]->getTitulo() . " </a>
        </td>

        <td>
            " . $personagemPrincipal->getMeusCargos()[$i]->getTipo() . "
        </td>
    </tr>
        ";
        }
    }
    ?>

    <!--<tr>
        <td>
            Desde <strong><?=date_format($personagemPrincipal->getMeusCargos()[0]->getInicioMandato(),'d/m/Y'); ?></strong>
        </td>

        <td>
            <a href=''> <?=$personagemPrincipal->getMeusCargos()[0]->getTitulo(); ?> </a>
        </td>

        <td>
            Nomeado <?=$personagemPrincipal->getMeusCargos()[0]->getStatus(); ?>
        </td>
    </tr>

    <tr>
        <td>
            De <strong>01/01/1750</strong> até <strong>08/07/1750</strong>
        </td>

        <td>
            <a href=''> Conselheiro </a>
        </td>

        <td>
            Nomeado
        </td>
    </tr>-->
</table>