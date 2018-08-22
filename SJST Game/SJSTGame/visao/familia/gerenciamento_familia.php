<?php

?>
<div style="width:95%;height:400px;" class="center-block">
<h3 class="titulo4"> Gerenciamento da Família </h3>

<ul id="menu" class="nav nav-tabs fundo2" style="font-size: 95%;">
    <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 1) echo "active"; ?>"><a href="?a=4&b=1#p">Sala de Reuniões</a></li>
    <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 2) echo "active"; ?>"><a href="?a=4&b=2#p">Escritório do Ancião</a></li>
    <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 3) echo "active"; ?>"><a href="?a=4&b=3#p">Escritório do Patriarca</a></li>
    <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 4) echo "active"; ?>"><a href="?a=4&b=4#p">Histórico</a></li>
</ul>


<?php
if (isset($_GET['b'])) {
    if ($_GET['b'] == 1) {
        include("familia/gerenciamento/sala_reunioes.php");
    }
    if ($_GET['b'] == 2) {
        include("familia/gerenciamento/escritorio_anciao.php");
    }
    if ($_GET['b'] == 3) {
        include("familia/gerenciamento/escritorio_patriarca.php");
    }
    if ($_GET['b'] == 4) {
        include("familia/gerenciamento/historico.php");
    }
}

?>
</div>
</div>