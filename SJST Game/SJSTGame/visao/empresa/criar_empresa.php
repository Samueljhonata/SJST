<?php

?>
<h3 class="titulo2">Criando uma Empresa</h3>
<div style="overflow: auto;width:95%;height:400px;">

    <p>Preencha o formulário abaixo e depois envie-o para a Corte Real para que possam aprovar o seu pedido</p>

    <form>
        <table>
            <tr>
                <td>Nome da Empresa: <input></td>
            </tr>
            <tr>
                <td>
                    Sede:
                    <select>
                        <option> Lisboa</option>
                        <option> Santarém</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Tipo:
                    <select>
                        <option> Fechado</option>
                        <option> Aberto</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><b>Acionistas:</b> <br>
                    Quantidade de Acionistas:
                    <select>
                        <?php for ($i = 1; $i <= 10; $i++) echo "<option> $i </option>"; ?>
                    </select>
                    <br>
                    <?php for ($i = 1; $i <= 10; $i++) echo "Acionista: <input type=''> Valor: <input type=''><br>"; ?>
                    Valor total do Capital Social: <b>$5:000$00 réis </b>
                </td>
            </tr>

            <tr>
                <td>Escudo da Cia: <input type=""></td>
            </tr>

            <tr>
                <td>Taxa para abertura: <b>$5:000$00 réis </b></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar para a Corte Real"></td>
            </tr>

        </table>
    </form>
</div>
		