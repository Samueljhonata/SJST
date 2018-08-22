<?php $biblioteca = "Universidade"; ?>

<h2 class="titulo2">Universidade de <?php echo $nome_vila; ?></h2>
<div class="divPrincipal autoAjusta center-block" id="principal" style="background-image:url(imagens/portas.png); background-repeat: no-repeat;background-position: center top;">
    <a style="position: relative; top:270px; left:-130px;">

        <a class="sala"
           onclick="mostraEsconde(0, 'principal');mostraEsconde(1,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(0,'sair');"
           style="position: relative; left: -195px;top:100px; width:30%;">
            Salas de Aula
        </a>
        <a class="sala"
           onclick="mostraEsconde(0, 'principal');mostraEsconde(0,'salasAula');mostraEsconde(1,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(0,'sair');"
           style="position: relative; left: -160px;top:50px; width:30%;">
            Biblioteca
        </a>
        <a class="sala"
           onclick="mostraEsconde(0, 'principal');mostraEsconde(0,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(1,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(0,'sair');"
           style="position: relative; left: -60px;top:10px; width:30%;">
            Sala dos Professores
        </a>
        <a class="sala"
           onclick="mostraEsconde(0, 'principal');mostraEsconde(0,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(1,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(0,'sair');"
           style="position: relative; left: 0px;top:10px; width:30%;">
            Sala do Reitor
        </a>
        <a class="sala"
           onclick="mostraEsconde(0, 'principal');mostraEsconde(0,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(1,'minhaArea');mostraEsconde(0,'sair');"
           style="position: relative; left: 100px;top:50px; width:30%;">
            Minha Área
        </a>
        <a class="sala"
           onclick="mostraEsconde(0, 'principal');mostraEsconde(0,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(0,'sair');"
           style="position: relative; left: 150px;top:100px; width:30%;">
            Sair
        </a>
</div>

<div class="divPrincipal autoAjusta center-block invisivel text-center" id="salasAula">
    <?php include("lote/governo/universidade/salas_de_aula.php"); ?>
</div>

<div class="divPrincipal autoAjusta center-block invisivel text-center" id="biblioteca">
    <?php include("lote/governo/universidade/biblioteca.php"); ?>
</div>

<div class="divPrincipal autoAjusta center-block invisivel text-center" id="salaProf">
    <?php include("lote/governo/universidade/sala_professores.php"); ?>
</div>

<div class="divPrincipal autoAjusta center-block invisivel text-center" id="salaReitor">
    <?php include("lote/governo/universidade/sala_reitor.php"); ?>
</div>

<div class="divPrincipal autoAjusta center-block invisivel text-center" id="minhaArea">
    <?php include("lote/governo/universidade/minha_area.php"); ?>
</div>

<div class="divPrincipal autoAjusta center-block invisivel" id="sair">
    <?php include("lote/governo/universidade/minha_area.php"); ?>
</div>

<a class="sala" onClick="mostraEsconde(1,'principal');mostraEsconde(0,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(0,'sair')" style="position: relative; left: 485px;top:-10px; width:30%;">
    Voltar
</a>

