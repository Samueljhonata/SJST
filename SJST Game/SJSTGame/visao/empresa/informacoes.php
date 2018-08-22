<?php

?>

<h3 class="titulo2">Informações da <?= $empresa->getNome(); ?></h3>
<div style="width:95%;height:400px;" class="center-block">

    <ul id="menu" class="nav nav-tabs fundo2" style="font-size: 95%;">
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 1) echo "active"; ?>">
            <a href="?a=1&b=1#p">História</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 2) echo "active"; ?>">
            <a href="?a=1&b=2#p">Membros</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 3) echo "active"; ?>">
            <a href="?a=1&b=3#p">Avisos</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 4) echo "active"; ?>">
            <a href="?a=1&b=4#p">Eventos</a>
        </li>
    </ul>


    <?php
    if (isset($_GET['b'])) {
        if ($_GET['b'] == 1) {
            echo "
        <h4 class='titulo4'> História </h4>
        " . $empresa->getHistoria();
        }
        if ($_GET['b'] == 2) {
            include("informacoes/membros.php");
        }
        if ($_GET['b'] == 3) {
            include("informacoes/avisos.php");
        }
        if ($_GET['b'] == 4) {
            include("informacoes/eventos.php");
        }
    }

    ?>
</div>
	