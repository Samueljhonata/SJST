<?php
include("cabecalho.php");

if (isset($_GET['ex'])) {
    $exer = $_GET['ex'];
} else {
    $exer = 0;
}
?>
    <div align='center'>
        <a href="?ex=1"> SIM </a> <a href="?ex=2"> NÃO </a>

        <h2 class="titulo2">Meu Exército</h2>
        <?php if ($exer == 1) { ?>
            <div class="divPrincipal">
                <div align="left">
                    <a onClick="mostraEsconde(1,'informacoes');mostraEsconde(0,'minha_area');mostraEsconde(0,'com_pelotao');mostraEsconde(0,'com_batalhao');mostraEsconde(0,'com_regimento');mostraEsconde(0,'com_exercito');"
                       class="menuCima"> Informações</a>
                    <a onClick="mostraEsconde(1,'minha_area');mostraEsconde(0,'informacoes');mostraEsconde(0,'com_pelotao');mostraEsconde(0,'com_batalhao');mostraEsconde(0,'com_regimento');mostraEsconde(0,'com_exercito');"
                       class="menuCima"> Minha Área</a>
                    <a onClick="mostraEsconde(1,'com_pelotao');mostraEsconde(0,'minha_area');mostraEsconde(0,'informacoes');mostraEsconde(0,'com_batalhao');mostraEsconde(0,'com_regimento');mostraEsconde(0,'com_exercito');"
                       class="menuCima"> Sala do Com. de Pelotão</a>
                    <a onClick="mostraEsconde(1,'com_batalhao');mostraEsconde(0,'minha_area');mostraEsconde(0,'informacoes');mostraEsconde(0,'com_pelotao');mostraEsconde(0,'com_regimento');mostraEsconde(0,'com_exercito');"
                       class="menuCima"> Sala do Comandante de Batalhão</a>
                    <a onClick="mostraEsconde(1,'com_regimento');mostraEsconde(0,'minha_area');mostraEsconde(0,'informacoes');mostraEsconde(0,'com_pelotao');mostraEsconde(0,'com_batalhao');mostraEsconde(0,'com_exercito');"
                       class="menuCima"> Sala do Comandante de Regimento</a>
                    <a onClick="mostraEsconde(1,'com_exercito');mostraEsconde(0,'minha_area');mostraEsconde(0,'informacoes');mostraEsconde(0,'com_pelotao');mostraEsconde(0,'com_batalhao');mostraEsconde(0,'com_regimento');"
                       class="menuCima"> Sala do General</a>
                </div>

                <div id='informacoes' align="center" class="autoAjusta text-center" style="width:98%;height:95%">
                    <?php include("exercito/informacoes_exercito.php"); ?>
                </div>

                <div id='minha_area' align="center"
                     style="display:none; overflow: auto; border:none;width:100%;height:95%">
                    <?php include("exercito/minha_area.php"); ?>
                </div>

                <div id='com_pelotao' align="center"
                     style="display:none; overflow: auto; border:none;width:100%;height:95%">
                    <?php include("exercito/pelotao/sala_com_pelotao.php"); ?>
                </div>

                <div id='com_batalhao' align="center"
                     style="display:none; overflow: auto; border:none;width:100%;height:95%">
                    <?php include("exercito/batalhao/sala_com_batalhao.php"); ?>
                </div>

                <div id='com_regimento' align="center"
                     style="display:none; overflow: auto; border:none;width:100%;height:95%">
                    <?php //include("exercito/sala_com_regimento.php"); ?>
                </div>

                <div id='com_exercito' align="center"
                     style="display:none; overflow: auto; border:none;width:100%;height:95%">
                    <?php //include("exercito/sala_com_exercito.php"); ?>
                </div>
            </div>
            <?php
        } else {
            if (isset($_GET['b'])) {
                if ($_GET['b'] == 1) {
                    include("exercito/criar_exercito/legal.php");
                }
                if ($_GET['b'] == 2) {
                    include("exercito/criar_exercito/ilegal.php");
                }
            } else {
                ?>
                <div style="width: 1000px;height: 500px;">
                    <h3 class="titulo3"> Você não faz parte de nenhum Exército </h3>
                    Você pode entrar para um exército já existente indo em "Arredores" -> "Área Militar".
                    <br>Ou se preferir, crie o seu próprio exército:<br><br>
                    <a href="?b=1&ex=0"> <input type="submit" value="Criar Exército Legal"/></a>
                    <a href="?b=2&ex=0"> <input type="submit" value="Criar Exército Ilegal"/></a>
                </div>

                <?php
            }
        }
        if (isset($_GET['a'])) {
            if ($_GET['a'] == 1) {
                include("exercito/informacoes_exercito.php");
            }
            if ($_GET['a'] == 2) {
                include("exercito/sala_com_pelotao.php");
            }
        } else {
            //include("exercito/informacoes_exercito.php");
        }
        echo "<br>";

        ?>

        <br>
    </div>
<?php include("rodape.php"); ?>