<?php

?>
<div style="width:95%;height:400px;">
    <h3 class="titulo4"> Meu Inventário </h3>

    <ul id="menu" class="nav nav-tabs fundo2" style="font-size: 95%;">
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 1) echo "active"; ?>"><a
                href="?a=3&b=1#p">Inventário</a></li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 2) echo "active"; ?>"><a href="?a=3&b=2#p">Guarda-Roupa</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 3) echo "active"; ?>"><a
                href="?a=3&b=3#p">Transporte</a></li>
    </ul>
    <div style="border:none; width:99%;height:90%;">
        <?php
        if (isset($_GET['b'])) {
            if ($_GET['b'] == 1) {
                include("inventario.php");
            }

            if ($_GET['b'] == 2) {
                include("personagem/inventario/guarda_roupa.php");
            }

            if ($_GET['b'] == 3) {
                include("personagem/inventario/transporte.php");
            }
        } else {
            include("inventario.php");
        }
        ?>
    </div>
</div>