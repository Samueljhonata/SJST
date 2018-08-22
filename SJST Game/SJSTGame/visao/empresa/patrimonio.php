<?php

?>

<h3 class="titulo2">Patrimônio da Companhia</h3>
<div style="width:95%;height:400px;" class="center-block">
    <ul id="menu" class="nav nav-tabs fundo2" style="font-size: 95%;">
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 1) echo "active"; ?>">
            <a href="?a=2&b=1#p">Inventário</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 2) echo "active"; ?>">
            <a href="?a=2&b=2#p">Propriedades</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 3) echo "active"; ?>">
            <a href="?a=2&b=3#p">Mandatos</a>
        </li>
    </ul>


    <?php
    if (isset($_GET['b'])) {
        if ($_GET['b'] == 1) {
            include("inventario.php");
        }
        if ($_GET['b'] == 2) {
            include("patrimonio/propriedades.php");
        }
        if ($_GET['b'] == 3) {
            include("patrimonio/mandatos.php");
        }
    }

    ?>
</div>