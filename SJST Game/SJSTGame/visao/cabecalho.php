<!DOCTYPE html>
<?php
require_once("../modelo/Personagem/Personagem.php");
require_once("../modelo/Ambiente/Povoacao.php");
include_once("../persistencia/persistencia.php");
?>

<html>
<head>
    <title>SJST Game</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilos/bootstrap/bootstrap.css"/>
    <link rel="stylesheet" href="estilos/bootstrap/bootstrap-theme.css"/>
    <link rel="stylesheet" href="estilos/bootstrap/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="estilos/estilo.css"/>

    <script type="text/javascript" src="js/funcoes.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/npm.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdown.js"></script>
</head>

<body>
<div class="container-fluid" style="background-color: black; width: 80%">
    <header class="row">
        <div class="row borda3">
            <?php include("cima.php"); ?>
        </div>
        <!--Cabeçalho-->
        <div class="row borda3 fundo2 espacamento10">
            <!-- Foto Personagem -->
            <div class="col-md-2 borda1 espacamento5 padding10 text-center">
                <a href="Meu_Personagem.php?a=1&b=1" title="Meu Personagem">
                    <img src="imagens/foto_perfil.png" height=125px;><br>
                    <a class="sala" style="position: relative; top:-10px;"
                       href="Meu_Personagem.php?a=1&b=1"><strong><?= $personagemPrincipal->getNome(); ?></strong></a>
                </a>
                <br><a href="Meu_Personagem.php?a=7&b=1"
                       class="link"> <?= $personagemPrincipal->getFaseVida()->getFase(); ?> </a>
            </div>
            <!-- Dinheiro -->
            <div class="col-md-2 borda1 espacamento5 padding10">
                <p><a href="" class="link"><b>Dinheiro</b></a></p>
                <p><a href="" class="link">
                        <img src="imagens/moedas_ouro.png" width="25px"/>
                        <strong><?= $personagemPrincipal->getInventario()->getCreditos(); ?></strong> créditos<br>
                    </a>
                </p>

                <p>
                    <a href="Meu_Personagem.php?a=3" class="link">
                        <img src="imagens/moedas_prata.png" width="25px"/>
                        <b><?= $personagemPrincipal->getInventario()->getMoeda(); ?></b> mil-réis</p>
                <p>
                    <img src="imagens/moedas_bronze.png" width="25px"/>
                    <b><?= $personagemPrincipal->getInventario()->getSubmoeda(); ?></b> réis
                </p>
                </a>

            </div>

            <!-- Status Social e Atividade-->
            <div class="col-md-4 espacamento5 fundo2">
                <!-- Status Social -->
                <div class="row borda1 padding10">
                    <div class="col-md-7">
                        <a href="Meu_Personagem.php?a=8" class="link">
                            <b>Status Social</b><br>
                            Nível <?= $personagemPrincipal->getStatusSocial()->getNivel(); ?>
                            <!--<div class="progress borda2" style="width: 80px; height: 10px; display: inline-table">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                </div>
                            </div>-->
                            <a class="link"
                               title="<?= $personagemPrincipal->getStatusSocial()->getPontos() . "/" . $personagemPrincipal->getStatusSocial()->getPontosProxNivel(); ?>">
                                <div class="progress borda2" style="width: 80px; height: 10px;display: inline-table">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                         aria-valuemax="100"
                                         style="width:<?= $personagemPrincipal->getStatusSocial()->getPontosParaProxNivel(); ?>%"></div>
                                </div>
                            </a>
                            <br>
                            <?= $personagemPrincipal->getStatusSocial()->getEstamento(); ?>
                            <br>

                        </a>
                    </div>
                    <div class="col-md-5 text-center">

                        <img src="imagens/barao.png" width="110px" class="img-rounded borda1"/>
                        <b><?= $personagemPrincipal->getStatusSocial()->getTitulos()[0]; ?></b>
                    </div>
                </div>
                <!-- Atividade -->
                <div class="row borda1 padding10">
                    <b title="Atividade" style="position: relative; top:-3px;">Atividade</b><br>
                    Trabalhas por mais 1:00:59 em<br>
                    <b>Mina de Ouro</b> <a href="" class="link" style="position: relative; right:-50px;">
                        <b>Cancelar</b></a>
                </div>
            </div>
            <!-- Situação -->
            <div class="col-md-4 espacamento5 fundo2">
                <!-- Humor -->
                <div class="row borda1 padding10">
                    <a href="Meu_Personagem.php?a=7&b=1" class="link">
                        <b>Situação</b></a><br>
                    <a class="link" title="Humor <?= $personagemPrincipal->getHumor(); ?>%">Humor:<br>
                        <div class="progress borda2">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100"
                                 style="width:<?= $personagemPrincipal->getHumor(); ?>%">
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Saude -->
                <div class="row fundo2">
                    <div class="col-md-3 borda1 padding10">
                        <a class="link" title="Saúde: <?= $personagemPrincipal->getSaude(); ?>%">
                            Saúde:<br>
                            <div class="progress borda2" style="width: 60px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100"
                                     style="width:<?= $personagemPrincipal->getSaude(); ?>%">
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Fome -->
                    <div class="col-md-3 borda1 padding10">
                        <a class="link" title="Fome: <?= $personagemPrincipal->getFome(); ?>%">
                            Fome:<br>
                            <div class="progress borda2" style="width: 60px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100"
                                     style="width:<?= $personagemPrincipal->getFome(); ?>%">
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Energia -->
                    <div class="col-md-3 borda1 padding10">
                        <a class="link" title="Energia: 80%">
                            Energia<br>
                            <div class="progress borda2" style="width: 60px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Diversão -->
                    <div class="col-md-3 borda1 padding10">
                        <a class="link" title="Diversão: 80%">
                            Diversão<br>
                            <div class="progress borda2" style="width: 60px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Família
            <div class="col-md-2 borda1">
                <a href="familia.php?a=1" title="Minha Família"><img src="imagens/escudo.png" width="100px"/><br>
                    <b class="sala" style="position: relative; top:-10px;">Família Silva</a></b>
            </div>-->


            <div class="col-md-12 borda1 padding10 text-center">
                <b><?= $data ?> - <?= $hora; ?></b> -<a
                    href=""><b> <?= $povoacaoAtual->getTipo() . " de " . $povoacaoAtual->getNome(); ?>
                        <?php if ($povoacaoAtual->getNome() != $povoacaoAtual->getMunicipio()) echo ", Município de " . $povoacaoAtual->getMunicipio(); ?></b></a>,
                Província de <b><a href="regioes.php" class="link"><?= $povoacaoAtual->getRegiao(); ?></a></b>. Reino de
                <b><?= $povoacaoAtual->getReino(); ?></b>
            </div>
        </div>
        <div class="row borda1 fundo2 text-center padding10">
            <!-- Personagem -->
            <div class="dropdown col-md-3">
                <button href="pagina_principal.php" class="botao_ouro">
                    Personagem <?php if ($personagemPrincipal->getNotifCarta() || $personagemPrincipal->getNotifEvento()) echo "<b class='eventos'>N</b>"; ?>
                    <span class="caret"></span></button>
                <div class="dropdown-content fundo1 dropdown-menu" style="position: absolute;top:38px; left: 20px">
                    <div>
                        <a href="Meu_Personagem.php?a=2" class="submenu "/>
                        <strong>Correio <?php if ($personagemPrincipal->getNotifCarta()) echo "<b class='eventos'>N</b>"; ?></strong></a>
                    </div>
                    <div>
                        <a href="Meu_Personagem.php?a=4" class="submenu "> <strong>Propriedades</strong></a>
                    </div>
                    <div>
                        <a href="Meu_Personagem.php?a=9&b=1" class="submenu "/>
                        <strong>Eventos <?php if ($personagemPrincipal->getNotifEvento()) echo "<b class='eventos'>N</b>"; ?></strong> </a>
                    </div>
                    <div>
                        <a href="Meu_Personagem.php?a=6" class="submenu "/> <strong> Conquistas </strong> </a>
                    </div>

                </div>
            </div>
            <!-- Povoação -->
            <div class="dropdown col-md-3">
                <a href="pagina_principal.php#p">
                    <button class="botao_ouro"> Povoação <span class="caret"></span></button>
                </a>
                <div class="dropdown-content fundo1 dropdown-menu" style="position: absolute;top:38px; left: 20px">
                    <div onmouseover="mostraEsconde(1,'smenu')" onmouseout="mostraEsconde(0,'smenu')" class="fundo1">
                        <a href="pagina_principal.php#p" class="submenu "/> <strong> Zona Urbana </strong></a>
                        <div class="invisivel" id="smenu" style="position: absolute;top:5px; left: 200px">
                            <div>
                                <a href="pagina_principal.php#p" class="submenu"/> <strong> Centro </strong></a>
                            </div>
                            <div>
                                <a href="pagina_principal.php?a=2#p" class="fundo1 submenu "/> <strong> Bairro
                                    Residencial </strong></a>
                            </div>
                            <div>
                                <a href="pagina_principal.php?a=3#p" class="fundo1 submenu "/> <strong> Bairro
                                    Comercial </strong></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="pagina_principal.php?a=4" class="submenu "/> <strong> Zona Rural </strong> </a>
                    </div>
                    <div>
                        <a href="pagina_principal.php?a=10" class="submenu "/> <strong> Viajar </strong> </a>
                    </div>
                    <div>
                        <a href="" class="submenu "/> <strong> Fórum </strong> </a>
                    </div>
                </div>
            </div>
            <!-- Meus Locais -->
            <div class="dropdown col-md-3">
                <button href="pagina_principal.php" class="botao_ouro">Meus Locais <span class="caret"></span></button>
                <div class="dropdown-content fundo1 dropdown-menu" style="position: absolute;top:38px; left: 20px">
                    <div>
                        <a href="familia.php" class="submenu "/> <strong> Minha Família </strong></a>
                    </div>
                    <div>
                        <a href="meu_exercito.php" class="submenu "/> <strong> Meu Exército</strong> </a>
                    </div>
                    <div>
                        <a href="empresa.php" class="submenu "/> <strong> Empresa</strong> </a>
                    </div>
                    <div>
                        <a href=" " class="submenu "/> <strong> Escravos e Criadagem </strong> </a>
                    </div>
                </div>
            </div>
            <!-- Extras -->
            <div class="dropdown col-md-3">
                <button href="pagina_principal.php" class="botao_ouro"> Extras <span class="caret"></span></button>
                <div class="dropdown-content fundo1 dropdown-menu" style="position: absolute;top:38px; left: 20px">
                    <div>
                        <a href="classificacoes.php" class="submenu "/> <strong> Classificações </strong></a>
                    </div>
                    <div>
                        <a href="extras.php" class="submenu "> <strong> Bônus </strong></a>
                    </div>
                    <div>
                        <a href=" " class="submenu "/> <strong> Minha Conta </strong> </a>
                    </div>
                    <div>
                        <a href=" " class="submenu "/> <strong> Wiki </strong> </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Notícias -->
        <div class="row borda3 fundo2 text-center">
            <a href="editora.php">
                <marquee class="noticia borda1" scrolldelay="250"
                         style="width: 98%;background:-webkit-gradient(linear, left top, left bottom, color-stop(0.01, rgb(90,64,47)), color-stop(.8, rgb(226,203,136)));"
                         direction="">

                    <a class="manchete" href=""> Manchete: Notícia 1</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <a class="manchete" href=""> Manchete: Notícia 2</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <a class="manchete" href=""> Manchete: Notícia 3</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <a class="manchete" href=""> Manchete: Notícia 4</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    &nbsp
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <a class="manchete" href=""> Manchete: Notícia 5</a>
                </marquee>
            </a>
        </div>

    </header>
    <div class="row">
        <div class="row borda3 text-center" id="p">
