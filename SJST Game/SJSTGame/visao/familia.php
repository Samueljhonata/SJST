<?php
include("cabecalho.php");
//$nome_familia = "Silva";
?>


    <a href="?a=1"> SIM </a> <a href="?"> NÃO </a><br><br>


<?php

if (isset($_GET['a'])) {
    include("familia/minha_familia.php");
} else {

    if (isset($_GET['criar'])) {
        include("familia/criar_familia.php");
    } else {
        echo "<div class='divPrincipal'> Você não é membro de nenhuma Família.<br>
					Você pode entrar em uma ou criar uma <a href='?criar'> Aqui </a>
				<br><br></div>";
    }
}
?>


<?php include("rodape.php"); ?>