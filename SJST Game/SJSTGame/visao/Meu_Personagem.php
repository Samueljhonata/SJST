<?php
include("cabecalho.php");
?>
<h2 class="titulo2">Meu Personagem</h2>
<div class="divPrincipal center-block">
    <div align="left" style="border:none;">
        <a href="?a=1&b=1#p" class="menuCima"> Perfil</a>
        <a href="?a=2&b=1#p" class="menuCima"> Correio</a>
        <a href="?a=3&b=1#p" class="menuCima"> Inventário</a>
        <a href="?a=4#p" class="menuCima"> Propriedades</a>
        <a href="?a=5&b=1#p" class="menuCima"> Cargos</a>
        <a href="?a=6&b=1#p" class="menuCima"> Conquistas</a>
        <a href="?a=7&b=1#p" class="menuCima"> Habilidades</a>
        <a href="?a=8&b=1#p" class="menuCima"> Status Social</a>
        <a href="?a=9&b=1#p" class="menuCima"> Agenda</a>
        <a href="?a=10#p" class="menuCima"> Tutorial </a>
    </div>


    <div align="center" style="border:none;position:relative; top:-10px;">
        <?php
        if (isset($_GET['a'])) {
            switch ($_GET['a']) {
                case 1:
                    include("personagem/perfil_personagem.php");
                    break;
                case 2:
                    include("personagem/correio.php");
                    break;
                case 3:
                    include("personagem/inventario.php");
                    break;
                case 4:
                    include("personagem/propriedades.php");
                    break;
                case 5:
                    include("personagem/cargos.php");
                    break;
                case 6:
                    include("personagem/conquistas.php");
                    break;
                case 7:
                    include("personagem/habilidades.php");
                    break;
                case 8:
                    include("personagem/status_social.php");
                    break;
                case 9:
                    include("personagem/agenda.php");
                    break;
                //case 10: include("personagem/tutorial.php"); break;
            }
        }
        ?>
    </div>
</div>
<br>
<?php include("rodape.php"); ?>
