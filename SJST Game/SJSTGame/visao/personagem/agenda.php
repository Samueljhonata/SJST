<?php

?>

<h3 class="titulo3"> Minha Agenda </h3>
<!--<table>
    <tr align='center'>
        <td>
            <a href="?a=9&b=1" class="sala"> Histórico de Eventos </a>
        </td>

        <td>
            <a href="?a=9&b=2" class="sala"> Notas </a>
        </td>

        <td>
            <a href="?a=9&b=3" class="sala"> Agendar Ação </a>
        </td>
</tr>
</table>-->
<div align="center" style="height:400px; width: 95%;position:relative; top:0px;">
    <ul class="nav nav-tabs fundo2" style="font-size: 95%;">
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 1) echo "active"; ?>"><a href="?a=9&b=1#p">Histórico de Eventos</a></li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 2) echo "active"; ?>"><a href="?a=9&b=2#p">Notas</a></li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 3) echo "active"; ?>"><a href="?a=9&b=3#p">Agendar Ação</a></li>
    </ul>
    <br>
    <?php
    if (isset($_GET['b'])) {
        if ($_GET['b'] == 1) {
            include("agenda/historico.php");
        }
        if ($_GET['b'] == 2) {
            include("agenda/notas.php");
        }
    }
    ?>
</div>
