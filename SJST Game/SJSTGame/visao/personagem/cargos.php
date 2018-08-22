<?php

?>
<h3 class="titulo3"> Meus Cargos </h3>
<div style="width:95%;height:400px;">
    <!--<a href="?a=5&b=1" class="menuCima"> Família</a>
    <a href="?a=5&b=2" class="menuCima"> Cia Comercial</a>
    <a href="?a=5&b=3" class="menuCima"> Exército</a>
    <a href="?a=5&b=4" class="menuCima"> Governo</a>
    <a href="?a=5&b=5" class="menuCima"> Igreja</a>
    <a href="?a=5&b=6" class="menuCima"> Outros</a>

    <ul class="nav nav-tabs fundo2" style="font-size: 95%;">
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 1) echo "active"; ?>"><a href="?a=5&b=1#p">Família</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 2) echo "active"; ?>"><a href="?a=5&b=2#p">Cia
                Comercial</a></li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 3) echo "active"; ?>"><a
                href="?a=5&b=3#p">Exército</a></li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 4) echo "active"; ?>"><a href="?a=5&b=4#p">Governo</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 5) echo "active"; ?>"><a href="?a=5&b=5#p">Igreja</a>
        </li>
        <li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 6) echo "active"; ?>"><a href="?a=5&b=6#p">Outros</a>
        </li>
    </ul>-->
    <div>
    <?php
    if (isset($_GET['b'])) {
        if ($_GET['b'] == 1) {
            include("cargos/cargos.php");
        }
        if ($_GET['b'] == 2) {
            echo "
					<a href=''> Presidente </a><br>
					<a href=''> Gerente </a><br>
					<a href=''> Cargo </a><br>
					<a href=''> Conselheiro </a><br>
					<br>
				";
        }
        if ($_GET['b'] == 3) {
            echo "
					<a href=''> General do Exército </a><br>
					<a href=''> Coronel de Regimento </a><br>
					<a href=''> Comandante de Batalhão </a><br>
					<a href=''> Tenente de Pelotão </a><br>
					<br>
				";
        }
        if ($_GET['b'] == 4) {
            echo "
					Governo<br>
					<a href=''> 1° Ministro </a><br>
					<a href=''> Secretário de Estado </a><br>
					<a href=''> Vice-Rei </a><br>
					<a href=''> Secretário Regional </a><br>
					<a href=''> Alcaide </a><br>
					<a href=''> Vereador </a><br>
					<a href=''> Assistente Municipal </a><br>
					
					<br>Corte Real
					<br><a href=''> Presidente da Corte Real </a><br>
					<a href=''> Secretário da Corte Real </a><br>
					<a href=''> Deputado </a><br>
					
					<br>Justiça
					<br><a href=''> Chanceler-Mor </a><br>
					<a href=''> Desembargador </a><br>
					<a href=''> Promotor Real de Justiça </a><br>
					<a href=''> Ouvidor-Mor </a><br>
					<a href=''> Ouvidor </a><br>
					<a href=''> Promotor Regional de Justiça </a><br>
					<a href=''> Juiz Municipal </a><br>
					<a href=''> Promotor Municipal de Justiça </a><br>
					
					<br>Cargos Municipais
					<br><a href=''> Diretor da Escola Régia </a><br>
					<a href=''> Diretor da Academia </a><br>
					<a href=''> Chefe da Hospedaria </a><br>
					<a href=''> Capitão do Porto </a><br>
					<a href=''> Capitão da Guarda Municipal </a><br>
					
					<br>Cargos Regionais
					<br><a href=''> Diretor da Universidade </a><br>
					<a href=''> Capitão da Guarda Regional </a><br>
					
					<br>Cargos Reais
					<br><a href=''> Capitão da Guarda Real </a><br>
					<a href=''> Guardião-Mor Torre do Tombo </a><br>
					<a href=''> Guardião Torre do Tombo </a><br>
					<br>
				";
        }
        if ($_GET['b'] == 5) {
            echo "
					<a href=''> Primaz </a><br>
					<a href=''> Arcebispo </a><br>
					<a href=''> Bispo </a><br>
					<a href=''> Pároco </a><br>
					
					<br><a href=''> Diretor do Seminário </a><br>
					<br>
				";
        }
        if ($_GET['b'] == 6) {
            echo "
					Editora Real<br>
					<a href=''> Redator-Chefe da Editora Real </a><br>
					<a href=''> Redator Editora Real </a><br>
					
					<br>
				";
        }
    }
    ?>
    </div>
</div>