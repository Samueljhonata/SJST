<?php
$personagemPrincipal->getStatusSocial()->getPontosParaProxNivel();
?>
<h4 class="titulo4"> Status Social </h4>

<div style="width:97%; height: 200px;position: relative; top:0px;" align="left">
    <div align="center">
        Nível atual: <b><?= $personagemPrincipal->getStatusSocial()->getNivel(); ?> </b>
        <a class="link"
           title="<?= $personagemPrincipal->getStatusSocial()->getPontos() . "/" . $personagemPrincipal->getStatusSocial()->getPontosProxNivel(); ?>">
            <div class="progress borda2" style="width: 230px;display: inline-table">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                     aria-valuemax="100"
                     style="width:<?= $personagemPrincipal->getStatusSocial()->getPontosParaProxNivel(); ?>%"></div>
            </div>
        </a>


    </div>
    <div class="col-md-5 borda1" style="height: 80%">
        <h4>Bônus</h4>
        <div class="autoAjusta" style="height: 70%">
            <?php
            for($i=0; $i< count($personagemPrincipal->getStatusSocial()->getBonus()); $i++){
                echo "- ".$personagemPrincipal->getStatusSocial()->getBonus()[$i]->getDescricao(). " (".$personagemPrincipal->getStatusSocial()->getBonus()[$i]->getValor()."%)";
            }
            ?>
        </div>

    </div>
    <div class="col-md-5 col-lg-push-2 borda1 autoAjusta" style="height: 80%">
        <h4>Penalidades</h4>
        <div class="autoAjusta" style="height: 70%">
            <?php
            for($i=0; $i< count($personagemPrincipal->getStatusSocial()->getPenalidades()); $i++){
                echo "- ".$personagemPrincipal->getStatusSocial()->getPenalidades()[$i]->getDescricao(). " (".$personagemPrincipal->getStatusSocial()->getPenalidades()[$i]->getValor()."%)";
            }
            ?>
        </div>
    </div>

    <div class="col-md-12 borda1">
    Requisitos para o próximo nível:
    <div align="left" style="overflow: auto;border:none;width:95%;height:100px;position:relative; left:10px;"
         align="center">
        - <?= $personagemPrincipal->getStatusSocial()->getPontosProxNivel(); ?> Pontos de Status Social
    </div></div>

    <?php
    if ($personagemPrincipal->getStatusSocial()->getPontos() >= $personagemPrincipal->getStatusSocial()->getPontosProxNivel()) {
        echo "<br><input type='submit' value='Aumentar Nível'/>";
    }
    ?>

</div>

