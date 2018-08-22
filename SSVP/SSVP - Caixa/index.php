<?php
include "cabecalho.php";
?>
<div class="row fundo3">
    <div class="col-md-12">
        <h1>Bem Vindo!</h1>
        Faça login para entrar.
    </div>
</div>

<div class="row fundo3">
    <div class="col-md-4 col-md-offset-4 bordaP">
        <fieldset>
            <legend>Login</legend>
            <form method='post' action='entrando.php'>
                <label class="botaoNSelecionado">
                    Nome: <br>
                    <select style='width: 320px;' name='login'>
                    </select>
                </label>

                <label class="botaoNSelecionado">
                    Senha: <br>
                    <input type='password' name='senha' style='width: 230px;'/>
                </label>

                <input type='submit' value='Entrar' class="botaoNSelecionado"/>

            </form>

        </fieldset>
        <br/>
    </div>
</div>

</div>
<br/>
<footer>
    <?php include "rodape.php"; ?>
</footer>

</body>