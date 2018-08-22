<?php

?>

<h3 class="titulo2"> Gerenciamento </h3>
<div style="width:95%;height:400px;" class="center-block">
    <ul id="menu" class="nav nav-tabs fundo2" style="font-size: 95%;">
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 1) echo "active"; ?>">
            <a href="?a=4&b=1#p">Sala de Reuniões</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 2) echo "active"; ?>">
            <a href="?a=4&b=2#p">Escritório do Conselheiro</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 3) echo "active"; ?>">
            <a href="?a=4&b=3#p">Escritório do Presidente</a>
        </li>

        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 4) echo "active"; ?>">
            <a href="?a=4&b=4#p">Escritório do Proprietario</a>
        </li>

        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 5) echo "active"; ?>">
            <a href="?a=4&b=5#p">Escritório do Cargo</a>
        </li>

        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 6) echo "active"; ?>">
            <a href="?a=4&b=6#p">Histórico</a>
        </li>
    </ul>



<?php
if (isset($_GET['b'])) {
    switch ($_GET['b']){
        case 1:

            break;
        case 2:
            include("empresa/gerenciamento/escritorio_conselheiro.php");
            break;
        case 3:
            include("empresa/gerenciamento/escritorio_presidente.php");
            break;
        case 4:
            include("empresa/gerenciamento/escritorio_proprietario.php");
            break;
        case 5:
            include("empresa/gerenciamento/escritorio_cargo.php");
            break;
        case 6:
            include("empresa/gerenciamento/historico.php");
            break;
    }
}

?>
</div>