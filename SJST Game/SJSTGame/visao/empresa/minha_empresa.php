<div align="left" style="border: none;">
    <td>
        <a href="?a=1&b=1#p" class="menuCima"> Informações</a>
    </td>

    <td>
        <a href="?a=2&b=1#p" class="menuCima"> Patrimônio</a>
    </td>

    <td>
        <a href="?a=3&b=1#p" class="menuCima"> Sala de Reuniões</a>
    </td>


    <td>
        <a href="?a=4&b=1#p" class="menuCima"> Gerenciamento da Empresa</a>
    </td>
</div>
</table>


<?php
if (isset($_GET['a'])) {
    if ($_GET['a'] == 1) {
        include("empresa/informacoes.php");
    }
    if ($_GET['a'] == 2) {
        include("empresa/patrimonio.php");
    }
    if ($_GET['a'] == 3) {
        include("empresa/sala_de_reunioes.php");
    }
    if ($_GET['a'] == 4) {
        include("empresa/gerenciamento.php");
    }

} else {
    //include("cia_comercial/informacoes_cia.php");
}

?>

</div>
