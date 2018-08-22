<?php

?>
<h4 class="titulo4"> Meus Atributos </h4>
<div style="width:80%; height: 90px;">
    Você é um <b> <?=$personagemPrincipal->getFaseVida()->getFase();?></b>. <br>
    Tornando-se <b><?=$personagemPrincipal->getFaseVida()->getProximoNivel();?></b>, Seus atributos terão fator de multiplicação: <br>
    Força(x<?=$personagemPrincipal->getFaseVida()->getFatorForcaProx();?>) Inteligência(x<?=$personagemPrincipal->getFaseVida()->getFatorInteligenciaProx();?>) Carisma(x<?=$personagemPrincipal->getFaseVida()->getFatorCarismaProx();?>) Agilidade(x<?=$personagemPrincipal->getFaseVida()->getFatorAgilidadeProx();?>) <br>
    <?php if($personagemPrincipal->getFaseVida()->getNivel() != 6){?> <input type="submit" value="Tornar-se um <?=$personagemPrincipal->getFaseVida()->getProximoNivel();?>"/><?php } ?>
    <br>
</div>
<br><br>
<table>
    <tr align='left'>
        <td>
            <b> Força </b>
        </td>
        <td>
                <a class="link" title="Força: <?=$personagemPrincipal->getHabilidades()->getForca();?>%">
                    <div class="progress borda2" style="width: 230px;display: inline-block">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?=$personagemPrincipal->getHabilidades()->getForca();?>%"></div>
                    </div><b style="position: relative; top:-30px;">x10</b>
                </a>
        </td>

        <td>
            <b> Inteligência </b>
        </td>
        <td>
            <a class="link" title="Inteligência: <?=$personagemPrincipal->getHabilidades()->getInteligencia();?>%">
                <div class="progress borda2" style="width: 230px;display: inline-block">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?=$personagemPrincipal->getHabilidades()->getInteligencia();?>%"></div>
                </div><b style="position: relative; top:-30px;">x5</b>
            </a>
        </td>
    </tr>

    <tr align='left'>
        <td>
            <b> Carisma </b>
        </td>
        <td>
            <a class="link" title="Carisma: <?=$personagemPrincipal->getHabilidades()->getCarisma();?>%">
                <div class="progress borda2" style="width: 230px;display: inline-block">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?=$personagemPrincipal->getHabilidades()->getCarisma();?>%"></div>
                </div><b style="position: relative; top:-30px;">x7</b>
            </a>
        </td>

        <td>
            <b> Agilidade </b>
        </td>
        <td>
            <a class="link" title="Agilidade: <?=$personagemPrincipal->getHabilidades()->getAgilidade();?>%">
                <div class="progress borda2" style="width: 230px;display: inline-block">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?=$personagemPrincipal->getHabilidades()->getAgilidade();?>%"></div>
                </div><b style="position: relative; top:-30px;">x7</b>
            </a>
        </td>
    </tr>
</table>
<br>
