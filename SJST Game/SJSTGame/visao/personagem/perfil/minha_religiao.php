<?php
$ptsFePNivel = $personagemPrincipal->getPerfil()->getMinhaReligiao()->getPtsFeProxNivel();
$porcentagemPNivel = $personagemPrincipal->getPerfil()->getMinhaReligiao()->getPontosdeFe() / $ptsFePNivel * 100;

?>

<h4> Minha Religião </h4>
<div style="height: 160px;" align="left">
    <div style="border:none;" align="center">


        <table>
            <tr align="center">
                <td colspan="2" class="titulo">
                    <b style="font-size: 120%;">Igreja <?= $personagemPrincipal->getPerfil()->getMinhaReligiao()->getIgreja(); ?></b>
                </td>
            </tr>
            <tr align="center">
                <td>
                    Nível de Fé: <b> <?= $personagemPrincipal->getPerfil()->getMinhaReligiao()->getNiveldeFe(); ?> </b>
                </td>
                <td>
                    <a class="link"
                       title="<?= $personagemPrincipal->getPerfil()->getMinhaReligiao()->getPontosdeFe() . "/" . $ptsFePNivel; ?>">
                        Pontos de fé do Nível
                        <div class="progress borda2" style="width: 80px; height: 20px; display: inline-flex">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100"
                                 style="width:<?= $porcentagemPNivel; ?>%">
                            </div>
                        </div>
                    </a>
                </td>
            </tr>
        </table>
        Requisitos para o próximo nível:

        <div align="left" style="border:none;width:95%;height:80px;position:relative; left:10px;" class="autoAjusta">
            <?= $personagemPrincipal->getPerfil()->getMinhaReligiao()->getRequisiosPNivel(); ?>
        </div>
    </div>

</div>
<br>
<div class="autoAjusta" style="height: 140px">
<table>
    <tr align='center' class=titulo>
        <td>
            Histórico na religião
        </td>
    </tr>
    <?php

    for ($i = 0; $i < count($personagemPrincipal->getPerfil()->getMinhaReligiao()->getHistorico()); $i++) {
        echo "<tr> <td>";
        echo "<strong>" . date_format($personagemPrincipal->getPerfil()->getMinhaReligiao()->getHistorico()[$i]->getData(), 'd/m/Y') . " - </strong>" . $personagemPrincipal->getPerfil()->getMinhaReligiao()->getHistorico()[$i]->getTexto();
        echo "</td> </tr>";
    }
    ?>


</table>
</div>
<br>
