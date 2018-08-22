<?php

    echo"
    <div id='mensagem$i' class='invisivel'>
        <div class='borda2 fundo2'>
        Remetente: ".$personagemPrincipal->getCorreio()->getEntrada()[$i]->getRemetente()."
        Data: ".date_format($personagemPrincipal->getCorreio()->getEntrada()[$i]->getData(),'d/m/Y')."
        </div>
        <div class='borda1' align='left'>
        $texto[$i]
        </div>
        <a class='sala' onClick=mostraEsconde(0,'mensagem$i');mostraEsconde(1,'entrada')>Voltar</a>
    </div>
    <br>
    ";

 ?>

