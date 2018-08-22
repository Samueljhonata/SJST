<?php
//$banco = new Banco();
$banco = $edificio;
$tipo_agencia = $banco->getTipoAgencia();
switch ($tipo_agencia){
    case 1: $tipo_agencia = "Sede";
        break;
    case 2: $tipo_agencia = "Agência ".$banco->getNumAgencia();
        break;

}
//$conta = new ContaBancaria();


include("modal_window.html");
?>
<h2 class="titulo2"><?= $tipo_agencia; ?> Banco de Portugal - <?php echo $povoacaoAtual->getNome(); ?></h2>


<div id="principal"style="background-image:url(imagens/portas.png); background-repeat: no-repeat;background-position: center top;" class="divPrincipal center-block text-center">


    <a class="sala" onClick="mostraEsconde(1,'salao');mostraEsconde(0,'principal');mostraEsconde(0,'eleicoes');mostraEsconde(0,'biblioteca');mostraEsconde(0,'presidente');mostraEsconde(0,'vereador');mostraEsconde(0,'assistente');" style="position: relative; left: 40px;top:10px; width:30%;">
        Sala do Gerente
    </a>
    <a class="sala" onClick="mostraEsconde(1,'presidente');mostraEsconde(0,'principal');mostraEsconde(0,'eleicoes');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salao');mostraEsconde(0,'vereador');mostraEsconde(0,'assistente');" style="position: relative; left: 90px;top:10px; width:30%;">
        Salão de Leilões
    </a>

</div>

<div id='eleicoes' align="center" class="divPrincipal center-block invisivel text-center">
    <?php include("lote/governo/banco/agencia/sala_gerente.php"); ?>
</div>

<div id='biblioteca' align="center" class="divPrincipal center-block invisivel text-center">
    <?php include("lote/governo/camara_municipal/biblioteca.php"); ?>
</div>

<div id='salao' align="center" class="divPrincipal center-block invisivel text-center">
    <?php include("lote/governo/banco/agencia/sala_gerente.php"); ?>
</div>

<div id='presidente' align="center" class="divPrincipal center-block invisivel text-center">
    <?php include("lote/governo/banco/agencia/leiloes.php"); ?>
</div>

<div id='vereador' align="center" class="divPrincipal center-block invisivel text-center">
    <?php include("lote/governo/camara_municipal/gabinete_vereador.php"); ?>
</div>

<div id='assistente' align="center" class="divPrincipal center-block invisivel text-center">
    <?php include("lote/governo/camara_municipal/gabinete_assistente.php"); ?>
</div>

<a class="sala" onClick="mostraEsconde(1,'principal');mostraEsconde(0,'eleicoes');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salao');mostraEsconde(0,'presidente');mostraEsconde(0,'vereador');mostraEsconde(0,'assistente');" style="position: relative; left: 485px;top:-10px; width:30%;">
    Voltar
</a>

