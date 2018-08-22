<h4> Meus Amigos </h4>

<table>
    <?php
    if (count($personagemPrincipal->getAmigos()) > 0) {
        for ($i = 0; $i < count($personagemPrincipal->getAmigos()); $i++) {
            //olhar se existe personagem
            echo "
                <tr>
                    <td>
                        <input type='checkbox'><a href=''> " . $personagemPrincipal->getAmigos()[$i] . " </a>
                    </td>
                </tr>
            ";
        }
        echo "<tr><td>
        <input type=submit value='Excluir Marcados'/>
    </td>
    </tr>";
    } else echo "
        <tr align='center'>
            <td>Nenhum amigo</td>
        </tr>
        ";
    ?>


    <td>
        <input type="text"/> <input type=submit value="Adicionar"/>
    </td>
    </tr>
</table>
<br>
<?php
if (isset($_GET['b'])) {
    if ($_GET['b'] == 1) {
        include("informacoes_personagem.php");
    }
}
?>