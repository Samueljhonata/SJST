<?php
$combatente = new Combatente(1);
$patente = new Patente();
$patente->setNome("Coronel");
$patente->setImg("coronel.png");
$patente->setData(date_create('1750-5-6'));
$combatente->setPatente($patente);
$combatente->setNome($personagemPrincipal->getNome());
$combatente->setUnidadePertence()
?>
<h3 class="titulo2">Minha Área</h3>
<table>
    <tr class="titulo" align="center">
        <td colspan="3">
            Ficha
        </td>
    </tr>

    <tr align="center">
        <td rowspan="4">
            <img src="imagens/patentes/<?=$combatente->getPatente()->getImg();?>" style="width:150px;"/>
            <br><b><?=$combatente->getPatente()->getNome()." ".$combatente->getNome();?></b>
        </td>


    </tr>

    <tr>
        <td>
            <b>Patente Recebida em:</b>
        </td>

        <td>
            <b><?=date_format($combatente->getPatente()->getData(),'d/m/Y');?></b>
        </td>
    </tr>

    <tr>
        <td>
            <b>Unidade integrante:</b>
        </td>

        <td>

        </td>

    </tr>
    <tr>
        <td>
            <b>Comandante:</b>
        </td>

        <td>
            <b><a href="" class="link"> "Patente" "Nome"</a></b>
        </td>

    </tr>
</table>

<table>
    <tr class="titulo" align="center">
        <td colspan="3">
            Ações
        </td>
    </tr>

    <tr>
        <td>
            <b>Seguir Ordens do Comandante</b>
        </td>
    </tr>
    <tr>
        <td>
            Seguindo as ordens do Comandante você irá fazer o que ele mandar. Poderá treinar um exercício específico,
            viajar ou até mesmo entrar numa batalha. <a href=""> Seguir </a>
        </td>
    </tr>
</table>
<input type="submit" value="Seguir ordens do Comandante"/>
<br><br><input type="submit" value="Pedir Afastamento"/>
<input type="submit" value="Pedir Reforma"/>
<input style="color: red;" type="submit" value="Sair do Exército"/>