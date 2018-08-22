<?php

?>

                <a href="?b=1" class="sala"> Informações </a>

                <a href="?b=2" class="sala"> Minha Conta </a>
                <a href="?b=3" class="sala"> Leilões </a>


<?php
if (isset($_GET['b'])) {
    if ($_GET['b'] == 1) {
    }
    if ($_GET['b'] == 2) {
        include("lote/governo/banco/agencia/minha_conta.php");
    }
    if ($_GET['b'] == 3) {
        include("");
    }
}

?>