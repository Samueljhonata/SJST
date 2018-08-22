<?php

?>

<h4 class="titulo4"> Inventário </h4>
<div align="center" style="overflow: auto;height:320px;">

    <table class="text-center">
    <tr>
            <td>
                <img src="" />
            </td>

            <td>
                <b> Dinheiro </b>
            </td>

            <td>
                <b> <?= $personagemPrincipal->getInventario()->getMoeda(); ?>
                    $<?= $personagemPrincipal->getInventario()->getSubmoeda(); ?> </b>
            </td>

            <td>
                <select>
                    <?php for ($i = 0; $i <= $personagemPrincipal->getInventario()->getMoeda(); $i++) echo "<option>$i</option>"; ?>
                </select>
                $
                <select>
                    <?php for ($i = 0; $i <= 999; $i++) echo "<option>$i</option>"; ?>
                </select>

                <select>
                    <option> Casa 01</option>
                    <option> Terreno</option>
                </select>
                <input type="submit" value="Transferir"/>
            </td>

        </tr>
        </table>
    <table align="center"class="text-center">

        <tr class="titulo">
            <td rowspan=2>
                <b> Img </b>
            </td>

            <td rowspan=2>
                <b> Descrição </b>
            </td>

            <td rowspan=2>
                <b> Estado </b>
            </td>

            <td rowspan=2>
                <b> Qtd. </b>
            </td>

            <td rowspan=2>
                <b> Peso </b>
            </td>

            <td colspan="3">
                <b> Ação </b>
            </td>

        </tr>

        <tr class="titulo">
            <td>Qtd.</td>
            <td>Preço</td>
            <td>
                Permissão de Compra:
                <select>
                    <option> Todos</option>
                    <option> Família</option>
                    <option> Nome</option>
                    <option> Empresa</option>
                </select>
                <input type="text" style="width: 200px;"/>
            </td>
        </tr>

        <!--<tr>
            <td>
                <b> </b>
            </td>

            <td>
                <b> Dinheiro </b>
            </td>

            <td>

            </td>

            <td colspan="2">
                <b> <?= $personagemPrincipal->getInventario()->getMoeda(); ?>
                    $<?= $personagemPrincipal->getInventario()->getSubmoeda(); ?> </b>
            </td>

            <td colspan="2">
                <select>
                    <?php for ($i = 0; $i <= $personagemPrincipal->getInventario()->getMoeda(); $i++) echo "<option>$i</option>"; ?>
                </select>
                $
                <select>
                    <?php for ($i = 0; $i <= 999; $i++) echo "<option>$i</option>"; ?>
                </select>
            </td>
            <td>
                <select>
                    <option> Casa 01</option>
                    <option> Terreno</option>
                </select>
                <input type="submit" value="Transferir"/>
            </td>

        </tr>-->
        <?php
        for($j=0; $j< count($personagemPrincipal->getInventario()->getProdutos()); $j++){?>
            <tr>
                <td>

                </td>

                <td>
                    <?=$personagemPrincipal->getInventario()->getProdutos()[$j]->getNome(); ?>
                </td>

                <td>
                    <?=$personagemPrincipal->getInventario()->getProdutos()[$j]->getEstado(); ?>%
                </td>

                <td>
                    <?=$personagemPrincipal->getInventario()->getProdutos()[$j]->getPeso(); ?>
                </td>

                <td>
                    <?=$personagemPrincipal->getInventario()->getProdutos()[$j]->getQtd(); ?>
                </td>

                <td>
                    <select>
                        <?php for ($i = 1; $i <= $personagemPrincipal->getInventario()->getProdutos()[$j]->getQtd(); $i++) echo "<option>$i</option>"; ?>
                    </select>
                </td>

                <td>
                    <select>
                        <?php for ($i = 0; $i <= 1000; $i++) echo "<option>$i</option>"; ?>
                    </select>
                    $
                    <select>
                        <?php for ($i = 0; $i <= 999; $i++) echo "<option>$i</option>"; ?>
                    </select>
                </td>


                <td>
                    <div id="acoes">
                        <input type="submit" value="Vender"/>
                        <input type="submit" value="Comer"/>
                        <input type="submit" value="Jogar Fora"/>
                        <input type="submit" value="Transferir"
                               onclick="mostraEsconde(1,'transferir');mostraEsconde(0,'acoes')"/>
                    </div>
                    <div id="transferir" class="invisivel">
                        <select>
                            <option> Casa 01</option>
                            <option> Terreno</option>
                        </select>
                        <input type="submit" value="Cancelar"
                               onclick="mostraEsconde(0,'transferir');mostraEsconde(1,'acoes')"/>
                        <input type="submit" value="Enviar"/>
                    </div>
                </td>
            </tr>
        <?php } ?>


    </table>
    <br><br>
    <?php for ($i = 0; $i < 100; $i++) echo ".<br>"; ?>
</div>