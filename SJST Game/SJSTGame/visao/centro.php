<h2 class="titulo2"><?php echo $povoacaoAtual->getTipo() . " de " . $povoacaoAtual->getNome(); ?></h2>

<a href='?a=2#p' class="sala"> <b>Bairro Residencial</b></a>
<a href='?a=1#p' class="sala"> <b>Centro da Povoação</b></a>
<a href='?a=3#p' class="sala"> <b>Bairro Comercial</b></a>

<div style="background-image: url('imagens/grama.png');" class="divPrincipal autoAjusta center-block">
    <br>
    <?php
    $centroPovoacao = $povoacaoAtual->getZonaUrbana()->getCentro();
    //$centroPovoacao[0] = new Lote();
    //$centroPovoacao[0]->getId();
    $cont = 0;
    for ($i = 0; $i < count($centroPovoacao); $i++) {
        $edificio = $centroPovoacao[$i]->getEdificioConstruido();
        //$edificio = new Banco();
        echo "<div class='row' style='background-image: url(imagens/grama.png);'>";
        echo "<div class='col-md-2 col-lg-2 col-xs-2'style='background-image: url(imagens/grama.png);'><a ";
        if ($centroPovoacao[0]->getEdificioConstruido() != NULL) {
            echo "href='lote.php?id=" . $centroPovoacao[$i]->getId() . "#p' >";

        } else {
            echo ">";
        }
        echo "<img style=' position: relative; top: 5px;' src='imagens/" . $edificio->getImagem() .
            "' title=' " . $edificio->getNome() . "'/></a></div>";
        $cont++;
    }
        echo "</div><div style='height: 20px; background: rgb(90, 64, 47)'></div>";

    ?>
    <table style='background-color: rgb(90,64,47);' cellspacing=0 align="center">
        <tr style='background-color: green;' align="center">
            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=13'><img src='imagens/universidade.png'
                                                                   title='Universidade de Lisboa'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=1&tipo_con=3'><img src='imagens/seminario.png'
                                                                  title='Seminário de <?= $nome_vila; ?>'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=1&tipo_con=2'><img src='imagens/catedral_diocesana.png'
                                                                  title='Catedral Diocesana de <?php echo $nome_vila; ?>'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=1'><img src='imagens/banco.png'
                                                                  title='Banco de Portugal - Agência Lisboa'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=5'><img src='imagens/hospital.png'
                                                                  title='Hospital Municipal de <?php echo $nome_vila; ?>'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=1&tipo_con=1'><img src='imagens/igreja.png'
                                                                  title='Igreja de <?php echo $nome_vila; ?>'/></a>
            </td>
        </tr>

        <tr align="center">
            <td style='border: 0px solid;height: 10px;'></td>
        </tr>

        <tr align="center" style='background-color: green;'>
            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=12'><img src='imagens/tribunal_regional.png'
                                                                   title='Tribunal Regional'/> </a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=8'><img src='imagens/palacio_governador.png'
                                                                  title='Palácio do Governador'/></a>
            </td>

            <td style='border: 0px solid ;' colspan="3">
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=9'><img src='imagens/paco_ribeira.png'
                                                                  title='Praça Real'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=2'><img src='imagens/camara_municipal.png'
                                                                  title='Câmara Municipal'/></a>
            </td>
        </tr>

        <tr>
            <td style='border: 0px solid;height: 10px;'></td>
        </tr>

        <tr align="center" style='background-color: green;'>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=11'><img src='imagens/tribunal_municipal.png'
                                                                   title='Tribunal Municipal'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=3'><img src='imagens/escola.png'
                                                                  title='Escola Municipal'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=6'><img src='imagens/mercado.png' title='Mercado Municipal'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=4'><img src='imagens/hospedaria.png'
                                                                  title='Hospedaria Municipal'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=1&tipo_con=2&nivel=2'><img src='imagens/catedral_metropolitana.png'
                                                                          title='Catedral Metropolitana de <?php echo $nome_vila; ?>'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=10'><img src='imagens/tabernas.png' title='Tabernas da Vila'/></a>
            </td>
        </tr>

        <tr>
            <td style='border: 0px solid;height: 10px;'></td>
        </tr>

        <tr align="center" style='background-color: green;'>
            <td style='border: 0px solid ;'>
                <a><img src='imagens/lote_governo.png' title=''/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a href='lote.php?id=0&tipo_ed=2&tipo_con=7'><img src='imagens/academia.png'
                                                                  title='Orfanato Municipal'/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a><img src='imagens/lote_governo.png' title=''/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a><img src='imagens/lote_governo.png' title=''/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a><img src='imagens/lote_governo.png' title=''/></a>
            </td>

            <td style='border: 0px solid ;'>
                <a><img src='imagens/lote_governo.png' title=''/></a>
            </td>
        </tr>

        <tr>
            <td style='border: 0px solid;height: 10px;'></td>
        </tr>
    </table>
    <!--<a href='minhas_moradias.php' class="texto_imagem"> <b>Minha Moradia</b></a> &nbsp &nbsp
    <a href='edificio_especial_urbano.php' class="texto_imagem"> <b>Meus Edifícios Especiais</b></a> &nbsp &nbsp &nbsp
    <a href='oficinas.php' class="texto_imagem"> <b>Minhas Oficinas</b></a>-->
</div>
<br>