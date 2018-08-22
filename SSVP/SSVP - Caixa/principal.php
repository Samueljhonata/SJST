<?php
include "cabecalho.php";
?>

<nav class="nav">
    <div class="row borda1 fundo3">
    <div class="col-md-4">
        <a href="?a=1" class="btn <?php if($_GET['a']==1){echo'fundoSelecionado'; }else echo'fundoNSelecionado';?> botaoNSelecionado">Lançamento</a>
    </div>

    <div class="col-md-4">
        <a href="?a=2" class="btn <?php if($_GET['a']==2){echo'fundoSelecionado'; }else echo'fundoNSelecionado';?> botaoNSelecionado">Atualização</a>
    </div>

    <div class="col-md-4">
        <a href="?a=3" class="btn botaoNSelecionado <?php if($_GET['a']==3){echo'fundoSelecionado'; }else echo'fundoNSelecionado';?>">Relatórios</a>
    </div>
    </div>
</nav>
<br/>
<div class="row borda1 fundo3">
    <div class="col-md-12">
        <?php
        if (isset($_GET['a'])) {
            switch ($_GET['a']) {
                case 1:
                    include "lancamento.php";
            }
        }else{
            include "inicio.php";
        }

        ?>
    </div>
</div>

</div>

<br/>
<footer>
    <?php include "rodape.php"; ?>
</footer>

</body>