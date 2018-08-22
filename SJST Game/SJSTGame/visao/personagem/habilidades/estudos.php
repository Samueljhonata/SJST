<?php

?>
<h4 class="titulo4"> Meus Estudos </h4>
<div style="width:90%; " class="autoAjusta">

    <table>
        <?php
        for ($i = 0; $i < count($personagemPrincipal->getHabilidades()->getEstudo()); $i++) {
            /*switch ($personagemPrincipal->getHabilidades()->getEstudo()[$i]->getNivel()){
                case 1:
                    $titulo = "Aprendiz";
                    break;
                case 2:
                    $titulo = "Aprendiz";
                    break;
                case 3:
                    $titulo = "Prático";
                    break;
                case 4:
                    $titulo = "Prático";
                    break;
                case 5:
                    $titulo = "Proficional";
                    break;
            }*/
            ?>
            <tr align='left'>
                <td>
                    <b> <?= $personagemPrincipal->getHabilidades()->getEstudo()[$i]->getNomeHab(); ?> </b>
                </td>

                <td>
                    <a class="link"
                       title="<?= $personagemPrincipal->getHabilidades()->getEstudo()[$i]->getNomeHab(); ?>: <?= $personagemPrincipal->getHabilidades()->getEstudo()[$i]->getPorcentagem(); ?>%">
                        <div class="progress borda2" style="width: 230px;display: inline-block">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                 aria-valuemax="100"
                                 style="width:<?= $personagemPrincipal->getHabilidades()->getEstudo()[$i]->getPorcentagem(); ?>%"></div>
                        </div>

                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div><br>