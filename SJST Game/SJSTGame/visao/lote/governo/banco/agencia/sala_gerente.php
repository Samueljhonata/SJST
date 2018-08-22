<div style="width:100%; height:100%;background-image:url(imagens/sala_banco.png); background-repeat: no-repeat;background-position: center top;" class="center-block text-center">
    <a style="position: relative; top:270px; left:-130px;">
        <b>Minha Conta</b><br>
        Saldo:<br>
        Rs <?= $conta->getSaldo()[0] . "$" . $conta->getSaldo()[1]; ?>
    </a>

    <div style="position: relative; left: 150px;top:-50px; width:30%; border-radius:50px;" class="borda1">
        O que deseja?
        <br><br>
        <a class="sala" href="#dialog" name="modal"> Gerir a Conta</a>
        <a class="sala" href="#dialog1" name="modal"> Conseguir Crédito</a>
        <br><br>
    </div>

    <div style="position: relative; left: 70%;top:-10%; width:30%; border-radius:10px;" class="borda3">
        <h3 class="titulo2"> Chat com o Gerente</h3>
        <br><br>
        <a class="sala"> Pedir para conversar com o Gerente</a>

        <br><br>
    </div>
    <div style="border:none;position:absolute;top:450px;left:-150px;" id="boxes">
        <div id="dialog" class="window">
            <a href="#" class="close">Fechar [X]</a><br>
            <?php include("lote/governo/banco/agencia/gerir_conta.php"); ?>
        </div>
        <div id="dialog1" class="window">
            <a href="#" class="close">Fechar [X]</a><br>
            <?php include("lote/governo/banco/agencia/pedir_credito.php"); ?>
        </div>
    </div>
</div>