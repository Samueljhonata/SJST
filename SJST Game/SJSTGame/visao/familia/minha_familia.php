<?php

$nome_familia = "Silva";
?>
<?php

?>

<h2 class="titulo2 center-block">Família <?= $familia->getNome(); ?></h2>
<div class="divPrincipal center-block">
    <div align="left" style="border:none;">
        <a href="?a=1&b=1#p" class="menuCima"> Biblioteca</a>
        <a href="?a=2&b=1#p" class="menuCima"> Patrimônio</a>
        <a href="?a=3#p" class="menuCima"> Sala de Estar</a>
        <a href="?a=4&b=1#p" class="menuCima"> Gerenciamento da Família</a>
    </div>

    <?php
    if (isset($_GET['a'])) {
        if ($_GET['a'] == 1) {
            include("familia/informacoes_familia.php");
        }
        if ($_GET['a'] == 2) {
            include("familia/patrimonio_familia.php");
        }
        if ($_GET['a'] == 3) {
            include("familia/sala_de_estar_familia.php");
        }
        if ($_GET['a'] == 4) {
            include("familia/gerenciamento_familia.php");
        }
    }
    ?>
    <br>
