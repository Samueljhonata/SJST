<h4> Informações </h4>
<table>
    <tr>
        <td class='titulo'>
            <b>Informações Gerais</b>
        </td>
    </tr>

    <tr>
        <td colspan='3'>
            Nome: <b> <a href="perfil_publico.php" target="_blank" class="link"> <?= $personagemPrincipal->getNome(); ?> </a> </b>
        </td>
    </tr>
    <tr>
        <td colspan='1'>
            Idade: <b> <?= $personagemPrincipal->getPerfil()->getIdade(); ?> </b> dias
        </td>

        <td colspan="1">
            Nascimento: <b> <?= $personagemPrincipal->getPerfil()->getDataNascimentoFormatada(); ?> </b>
        </td>

        <td colspan="1">
            Povoação Natal: <b> <?= $personagemPrincipal->getPerfil()->getPovoacaoNatal(); ?> </b>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            Cargos: <b> </b>
        </td>
    </tr>

    <tr>
        <td class='titulo'>
            <b>Localização</b>
        </td>
    </tr>
    <tr>
        <td>
            Vila: <b> <?= $personagemPrincipal->getPerfil()->getLocalizacaoAtual()->getNome(); ?>
                <?php if ($personagemPrincipal->getPerfil()) echo ", Município de " . $personagemPrincipal->getPerfil()->getLocalizacaoAtual()->getMunicipio(); ?> </b>
        </td>

        <td>
            Província: <b> <?= $personagemPrincipal->getPerfil()->getLocalizacaoAtual()->getRegiao(); ?> </b>
        </td>
        <td>
            Reino: <b> <?= $personagemPrincipal->getPerfil()->getLocalizacaoAtual()->getReino(); ?> </b>
        </td>
    </tr>

    <tr>
        <td class='titulo'>
            <b>Família</b>
        </td>
    </tr>
    <tr>
        <td>
            Família: <b> Silva </b>
        </td>
        <td>
            Pai: <b> João </b>
        </td>
        <td>
            Mãe: <b> Maria </b>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            Filhos: <b> Nome </b>
        </td>

    </tr>

</table>