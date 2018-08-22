<?php

?>

<h3 class="titulo4"> Informações da Família </h3>
<div style="width:95%;height:400px;" class="center-block">
    <ul id="menu" class="nav nav-tabs fundo2" style="font-size: 95%;">
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 1) echo "active"; ?>">
            <a href="?a=1&b=1#p">História</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 2) echo "active"; ?>">
            <a href="?a=1&b=2#p">Árvore Genealógica</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 3) echo "active"; ?>">
            <a href="?a=1&b=3#p">Avisos</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 4) echo "active"; ?>">
            <a href="?a=1&b=4#p">Histórico de Eventos</a>
        </li>
    </ul>


    <?php
    if (isset($_GET['b'])) {
        if ($_GET['b'] == 1) {
            echo "
        <h4 class='titulo4'> História </h4>
        " . $familia->getHistoria();
        }
        if ($_GET['b'] == 2) {
            include("biblioteca/arvore_genealogica.php");
        }
        if ($_GET['b'] == 3) {
            include("biblioteca/avisos.php");
        }
        if ($_GET['b'] == 4) {
            include("biblioteca/eventos.php");
        }
    }

    ?>
</div>
</div>