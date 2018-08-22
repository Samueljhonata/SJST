<h4 class="titulo4"> Caixa de Entrada </h4>
<table align="center" id="entrada">
    <tr class="titulo">
        <td>
            <b> Remetente </b>
        </td>

        <td>
            <b> Assunto </b>
        </td>

        <td>
            <b> Data </b>
        </td>

        <td>
            <b> Excluir </b>
        </td>

    </tr>
    <?php
    for($i=0; $i < count($personagemPrincipal->getCorreio()->getEntrada()); $i++){
        $texto[$i] = $personagemPrincipal->getCorreio()->getEntrada()[$i]->getTexto();
        echo"
        <tr>
        <td>
            <input type='checkbox'/> <a href=''>".$personagemPrincipal->getCorreio()->getEntrada()[$i]->getRemetente()." </a>
            
        </td>

        <td>
            <a  onClick=mostraEsconde(1,'mensagem$i');mostraEsconde(0,'entrada')> ".$personagemPrincipal->getCorreio()->getEntrada()[$i]->getAssunto()."</a>
        </td>

        <td>
            <b> ".date_format($personagemPrincipal->getCorreio()->getEntrada()[$i]->getData(),'d/m/Y')." </b>
        </td>

        <td>
            <input type='submit' value='Excluir'/>
        </td>
    </tr>
        ";
     include ("abrir.php");
    }
    ?>


    <tr>
        <td colspan="4">
            <input type="submit" value="Excluir Marcados"/>
        </td>
    </tr>
</table>
<br><br>
