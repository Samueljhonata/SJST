<?php
include("cabecalho.php");
?>
<?php

?>
    <div align='center'>
        <a href="?a=1"> SIM </a> <a href="?"> NÃO </a>

        <h2 class="titulo2">Empresa</h2>
        <div class="divPrincipal">


            <?php

            if (isset($_GET['a'])) {
                include("empresa/minha_empresa.php");
            } else {

                if (isset($_GET['criar'])) {
                    include("empresa/criar_empresa.php");
                } else {
                    echo "Você não é membro de nenhuma Empresa.<br>
					Você pode abrir uma <a href='?criar' class='link'> Aqui </a>
				<br><br>";
                }
            }
            ?>
        </div>
        <br>
    </div>

<?php include("rodape.php"); ?>