<?php

?>

<h3 class="titulo4">Administração do Banco de Portugal </h3>
<table>

    <tr align="center">
        <td>
            <a href="?a=1&b=1" class="sala"> Cofre Agência</a>
        </td>

        <td>
            <a href="?a=1&b=2" class="sala"> Sala do Gerente </a>
        </td>

        <td>
            <a href="?a=1&b=3" class="sala"> Sala do Presidente </a>
        </td>
    </tr>
</table>


<?php
if (isset($_GET['b'])) {
    if ($_GET['b'] == 1) {
        include("banco/administracao/cofre_agencia.php");
    }
    if ($_GET['b'] == 2) {
        include("");
    }
    if ($_GET['b'] == 3) {
        include("");
    }
}

?>
