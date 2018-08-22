<head>
    <title>SSVP - Lançamento</title>
</head>

<h1 class="text-center alert-info">Lançamento</h1>
<div class="container-fluid">
    <div class="row borda1 fundobranco">
        <div class="col-md-3 bg-info">
            <h4>Caixa</h4>
        </div>
        <div class="col-md-2 col-md-offset-1 text-center">
            <label class="btn btn-default botaoNSelecionado">
                <input type="radio" name="tipoCaixa" class=""/> Dinheiro
            </label>
        </div>
        <div class="col-md-2 text-center">
            <label class="btn btn-default botaoNSelecionado">
                <input type="radio" name="tipoCaixa" class=""/> CREDESP
            </label>
        </div>
        <div class="col-md-2 text-center">
            <label class="btn btn-default botaoNSelecionado">
                <input type="radio" name="tipoCaixa" class=""/> CREDIBOM
            </label>
        </div>
    </div>

    <br/>

    <div class="row borda1 fundobranco">
        <div class="col-md-3 bg-info">
            <h4>Tipo de Movimento</h4>
        </div>

        <div class="col-md-3 col-md-offset-1 text-center">
            <label class="btn btn-success botaoNSelecionado">
                <input type="radio" name="tipoMovimento" class=""/> Entrada
            </label>
        </div>
        <div class="col-md-3 text-center">
            <label class="btn btn-danger botaoNSelecionado">
                <input type="radio" name="tipoMovimento" class=""/> Saída
            </label>
        </div>
    </div>

    <br/>

    <div class="row borda1 fundobranco">
        <div class="col-md-3 bg-info">
            <h4>Data</h4>
        </div>

        <div class="col-md-2 col-md-offset-1 text-center">
            <select class="botaoNSelecionado">
                <?php for($i=1;$i<=31;$i++) echo "<option> $i </option>"; ?>
            </select>
        </div>

        <div class="col-md-2 text-center">
            <select class="botaoNSelecionado">
                <?php for($i=1;$i<=12;$i++) echo "<option> $i </option>"; ?>
            </select>
        </div>

        <div class="col-md-2 text-center">
            <select class="botaoNSelecionado">
                <?php for($i=2016;$i<=2020;$i++) echo "<option> $i </option>"; ?>
            </select>
        </div>
    </div>

    <br/>

    <div class="row borda1 fundobranco">
        <div class="col-md-3 bg-info">
            <h4>Valor</h4>
        </div>

        <div class="col-md-1 col-md-offset-2 text-center">
            <h4>R$</h4>
        </div>

        <div class="col-md-2 text-center">
            <input class="botaoNSelecionado"/>
        </div>
    </div>

    <br/>

    <div class="row borda1 fundobranco">
        <div class="col-md-3 bg-info">
            <h4>Descrição</h4>
        </div>

        <div class="col-md-6 col-md-offset-1 text-center">
            <textarea class="botaoNSelecionado"></textarea>
        </div>
    </div>

    <br/>

    <div class="row borda1 fundobranco" name="entrada">
        <div class="col-md-3 bg-info">
            <h4>Tipo de Entrada</h4>
        </div>

        <div class="col-md-6 col-md-offset-1">
            <select class="botaoNSelecionado">
                <option> Coleta</option>
                <option> Décimas recebidas</option>
                <option> Doações recebidas</option>
                <option> Recebimento 2,5%</option>
                <option> Outras receitas sujeitas a décima</option>
                <option> Repasse</option>
                <option> Eventos</option>
                <option> Revenda Material Vicentino</option>
                <option> Subvenções</option>
                <option> União Fraternal</option>
            </select>
        </div>
    </div>

    <br/>

    <div class="row borda1 fundobranco">
        <div class="col-md-3 col-md-offset-3">
            <input type="submit" class="botaoNSelecionado btn-info"/>
        </div>

        <div class="col-md-3 col-md-offset-0">
            <input type="reset" class="botaoNSelecionado btn-danger"/>
        </div>

    </div>

</div>