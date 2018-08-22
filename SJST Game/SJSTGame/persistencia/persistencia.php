<?php
require_once("../modelo/Evento.php");
require_once("../modelo/Aviso.php");
require_once ("../modelo/CInventario.php");
require_once ("../modelo/Ambiente/Povoacao.php");
require_once ("../modelo/Ambiente/Lote.php");
require_once ("../modelo/Ambiente/Edificio.php");
require_once("../modelo/Ambiente/EdificioPrivado.php");
require_once("../modelo/Ambiente/EdificioPublico.php");
require_once("../modelo/Ambiente/Edificios/Hospital.php");
require_once ("../modelo/Ambiente/ZonaUrbana.php");
require_once ("../modelo/Familia/Familia.php");
require_once ("../modelo/Familia/Membro.php");
require_once ("../modelo/Familia/ConselhoAnciaos.php");
require_once ("../modelo/Empresa/Empresa.php");
require_once ("../modelo/Exercito/Exercito.php");
require_once ("../modelo/Exercito/UnidadeMilitar.php");
require_once ("../modelo/Exercito/Combatente.php");
//edificios
require_once ("../modelo/Ambiente/Edificios/Banco.php");
require_once ("../modelo/Ambiente/Edificios/Banco/ContaBancaria.php");
require_once ("../modelo/Ambiente/Edificios/CamaraMunicipal.php");

//personagem
$personagemPrincipal = new Personagem(1);
$personagemPrincipal->setNome("João da Silva");
$personagemPrincipal->setNotifCarta(false);
$personagemPrincipal->setNotifEvento(false);
$personagemPrincipal->setSituacao("Ativo");
//inventario
$inventario = new CInventario();
$inventario->setCreditos(100);
$inventario->setMoeda(1000);
$inventario->setSubmoeda(200);
$produto = new Produto();
$produto->setCod(1);
$produto->setEstado(100);
$produto->setNome("Pão");
$produto->setPeso(2);
$produto->setTipo("Comida");
$produto->setQtd(5);

$produto2 = new Produto();
$produto2->setCod(1);
$produto2->setEstado(80);
$produto2->setNome("Carne");
$produto2->setPeso(4);
$produto2->setTipo("Comida");
$produto2->setQtd(10);
$inventario->setProdutos(array($produto, $produto2));
$personagemPrincipal->setInventario($inventario);
//fase da vida
$faseVida = new FaseVida();
$faseVida->setFase(5);
$faseVida->setFatorAgilidade(7);
$faseVida->setFatorCarisma(7);
$faseVida->setFatorForca(10);
$faseVida->setFatorInteligencia(5);
$personagemPrincipal->setFaseVida($faseVida);
$personagemPrincipal->getPerfil()->setDataNascimento(date_create('1749-10-10'));
$personagemPrincipal->getPerfil()->setPovoacaoNatal("Lisboa");
$personagemPrincipal->setEnergia(80);
$personagemPrincipal->setFome(70);
$personagemPrincipal->setSaude(100);
$personagemPrincipal->setDiversao(30);
$amigos = array();
$personagemPrincipal->setAmigos($amigos);
//religiao
$religiao = new MinhaReligiao();
$religiao->setPontosdeFe(80);
$religiao->setPtsFeProxNivel(300);
$religiao->setNiveldeFe(4);
$evento = new Evento();
$evento2 = new Evento();
$evento->setData(date_create('1750-10-1'));
$evento->setTexto("É batizado na Matriz de Lisboa pelo pároco <a href=''>Nome</a>");
$historicoIgreja = array($evento);
$evento2->setData(date_create('1750-10-10'));
$evento2->setTexto("Assiste a primeira Missa na Matriz de Lisboa, celebrada pelo pároco Nome");
$historicoIgreja[] = $evento2;
$religiao->setHistorico($historicoIgreja);
$personagemPrincipal->getPerfil()->setMinhaReligiao($religiao);
//correio
$correio = new Correio();
$carta = new Carta();
$carta->setData(date_create('1750-5-6'));
$carta->setAssunto("Assunto");
$carta->setRemetente("José");
$carta->setTexto("AAAAA AA oasnjf oasf askof nal");
$entradas = array($carta);
$saidas = array($carta);
$correio->setEntrada($entradas);
//$correio->setSaida($saidas);
$personagemPrincipal->setCorreio($correio);
//cargos
$cargoF = new CargoFamilia();
$cargoF->setInicioMandato(date_create('1749-02-07'));
$cargoF->setFimMandato(date_create('1749-12-10'));
$cargoF->setTitulo("Vereador");
$cargoF->setTipo("Eleito");
$personagemPrincipal->setMeusCargos(array($cargoF));
//habilidades
$habilidade = new MinhasHabilidades();
$habilidade->setAgilidade(40);
$habilidade->setCarisma(30);
$habilidade->setForca(50);

$habOficio = new Habilidade();
$habOficio->setNivel(3);
$habOficio->setNomeHab("Padeiro");
$habOficio->setPorcentagem(20);

$habOficio2 = new Habilidade();
$habOficio2->setNivel(1);
$habOficio2->setNomeHab("Ferreiro");
$habOficio2->setPorcentagem(80);
$habilidade->setHabOficio(array($habOficio,$habOficio2));
$habilidade->setInteligencia(70);
$personagemPrincipal->setHabilidades($habilidade);

$hestudos = new Habilidade();
$hestudos->setNomeHab("Direito Civil");
$hestudos->setPorcentagem(20);
$habilidade->setEstudo(array($hestudos));
//status social
$status = new StatusSocial();
$status->setNivel(5);
$status->setClasse("Aristocrata");
$status->setEstamento("Segundo Estado (Nobreza)");
$status->setPontos(599);
$status->setDescricaoClasse("Leis, impostos. processos, instituições, justiça, PODER!! Você realmente respira isso!");
$bonusC = array("A", "B");
$status->setBonusDeClasse($bonusC);
$status->setTitulos(array("Barão de Terras Distantes"));
$penalidade = new FatoresSS();
$penalidade->setDescricao("Camisa");
$penalidade->setValor(-10);
$status->setPenalidades(array($penalidade));
$bonus = new FatoresSS();
$bonus->setDescricao("Sapatos");
$bonus->setValor(+1);
$status->setBonus(array($bonus));
$personagemPrincipal->setStatusSocial($status);
//agenda
$evento5 = new Evento();
$evento5->setData(date_create('1750-10-10'));
$evento5->setTexto("Terminaste de colher na sua propriedade em Lisboa.");
$agenda = new Agenda();
$agenda->setEventos(array($evento5));
$personagemPrincipal->setAgenda($agenda);

//familia
$conselhoAnciaos = new ConselhoAnciaos();
$conselhoAnciaos->setPatriarca($personagemPrincipal);
$personagem1 = new Personagem(2);
$personagem1->setNome("José da Siva");
$personagem1->setSituacao("Inativo");
$conselhoAnciaos->setHerdeiro($personagem1);

$familia = new Familia();
$familia->setNome("Silva");
$familia->setHistoria("Aqui será afixada a história da família, que será contada pelo Patriarca.");
$familia->setConselhoAnciaos($conselhoAnciaos);

$membros[0] = new Membro();
$membros[0]->setPersonagem($personagemPrincipal);
$membros[0]->setSituacao("Ativo");
$membros[0]->setEntrada(date_create('1750-5-3'));
$familia->setMembros($membros);

$aviso = new Aviso();
$aviso->setData(date_create('1750-1-5 10:33'));
$aviso->setConteudo("Conteúdo do Aviso 02");
$aviso->setEscritoPor($personagemPrincipal);
$aviso->setAssunto("Aviso 02");
$aviso1 = new Aviso();
$aviso1->setData(date_create('1750-1-4 12:50'));
$aviso1->setConteudo("Conteúdo do Aviso 01");
$aviso1->setEscritoPor($personagemPrincipal);
$aviso1->setAssunto("Aviso 01");
$familia->setAvisos(array($aviso, $aviso1));

//empresa
$empresa = new Empresa();
$empresa->setNome("Companhia Comercial Henriques");
$empresa->setHistoria("Aqui será afixada a história da companhia que pode ser editada pelo Presidente.");
$empresa->setAvisos(array($aviso));
$empresa->setEventos(array($evento5));


//exercito
$exercito = new Exercito();
$exercito->setNome("Desbravadores");
$exercito->setGeneral($personagemPrincipal);
$exercito->setFundacao(date_create('1750-2-3 12:53'));
$batalhao = new UnidadeMilitar();
$batalhao->setNome("");
$batalhao->setTipo("Batalhão");

//-----------------------------------------------------------------------------------------------------------------------------
$tipo_vila = 3;
$nome_vila = "Lisboa";
session_start();
if (isset($_SESSION['tipo_vila'])) {
    $tipo_vila = $_SESSION['tipo_vila'];
    $municipio = $_SESSION['municipio'];
}

$banco = 0;
$universidade = 0;
if ($tipo_vila == 1) {
    $nome_aldeia = "Aldeia de Montemor, Município de ";
    $nome_vila = "Santarém";
} else {
    $nome_aldeia = "";
}
if ($tipo_vila == 2) {
    $nome_vila = "Santarém";
}
if ($tipo_vila == 3) {
    $nome_vila = "Lisboa, Capital do Reino";
}
if ($tipo_vila == 4) {
    $nome_vila = "Estrada, Município de $municipio";
}
$nome_privincia = "Estremadura";
$catedral_metropolitana = 0;
$catedral_diocesana = 0;
$seminario = 0;

$tudo = false;
if ($tudo) {
    $tipo_vila = 3;
    $banco = 1;
    $universidade = 1;
    $catedral_metropolitana = 1;
    $catedral_diocesana = 1;
    $seminario = 1;
}
//povoação
$povoacaoAtual = new Povoacao();
$povoacaoAtual->setNome("Lisboa");
$povoacaoAtual->setMunicipio("Lisboa");
$povoacaoAtual->setRegiao("Estremadura");
$povoacaoAtual->setReino("Portugal");
$povoacaoAtual->setTipo(3);
$personagemPrincipal->getPerfil()->setLocalizacaoAtual($povoacaoAtual);

date_default_timezone_set('America/Sao_Paulo');
$ano = date('Y') - 267;
$data = date('d/m')."/".$ano;
$hora = date('H:i:s');
$evento = 1;
$correio = 0;

//centro
$cont = 0;
for ($i=0; $i<4; $i++){
    for ($j=0; $j<6; $j++) {
        $lotesCentro[$cont] = new Lote($cont);
        $lotesCentro[$cont]->setLocalizacaoX($i);
        $lotesCentro[$cont]->setLocalizacaoY($j);
        $lotesCentro[$cont]->setEdificioConstruido(NULL);
        $lotesCentro[$cont]->setPovoacao(1);
        $lotesCentro[$cont]->setProprietario(3);
        $lotesCentro[$cont]->setTipoLote(2);
        $cont++;
    }
}
$ed[0] = new Banco();
$ed[0]->setNome("Banco");
$ed[0]->setAberto(true);
$ed[0]->setDataConstrucao(date_create('1750-3-2'));
$ed[0]->setTipoEdificio(1);
$ed[0]->setDescricao("B");
$ed[0]->setImagem("banco.png");
$ed[0]->setTipoAgencia(1);
$ed[0]->setNumAgencia(1);
$lotesCentro[0]->setEdificioConstruido($ed[0]);
$conta = new ContaBancaria();
$conta->setDono($personagemPrincipal);
$conta->setDataCriacao(date_create('1750-5-5'));
$conta->setSaldo(150,300);

$ed[1] = new CamaraMunicipal();
$ed[1]->setNome("Câmara Municipal");
$ed[1]->setAberto(true);
$ed[1]->setDataConstrucao(date_create('1750-3-2'));
$ed[1]->setTipoEdificio(2);
$ed[1]->setDescricao("B");
$ed[1]->setImagem("camara_municipal.png");
$lotesCentro[1]->setEdificioConstruido($ed[1]);

$zonaUrbana = new ZonaUrbana();
$zonaUrbana->setCentro($lotesCentro);
$povoacaoAtual->setZonaUrbana($zonaUrbana);
/*
$lotesCentro[0][0]->setIsConstruido(true);
$lotesCentro[0][0]->setProprietario("Municipio de ".$povoacaoAtual->getMunicipio());
$lotesCentro[0][0]->setIsAberto(true);
$lotesCentro[0][0]->setDescricao("Universidade de ".$povoacaoAtual->getMunicipio());
$lotesCentro[0][0]->setImagem("universidade.png");
$lotesCentro[0][0]->setTipo(13);

$lotesCentro[0][1]->setIsConstruido(true);
$lotesCentro[0][1]->setProprietario("Municipio de ".$povoacaoAtual->getMunicipio());
$lotesCentro[0][1]->setIsAberto(true);
$lotesCentro[0][1]->setDescricao("Seminario de ".$povoacaoAtual->getNome());
$lotesCentro[0][1]->setImagem("seminario.png");
$lotesCentro[0][1]->setTipoEdificio(1);
$lotesCentro[0][1]->setTipo(3);

$lotesCentro[0][2]->setIsConstruido(true);
$lotesCentro[0][2]->setProprietario("Igreja");
$lotesCentro[0][2]->setIsAberto(true);
$lotesCentro[0][2]->setDescricao("Catedral Diocesana de ".$povoacaoAtual->getNome());
$lotesCentro[0][2]->setImagem("catedral_diocesana.png");
$lotesCentro[0][2]->setTipoEdificio(1);
$lotesCentro[0][2]->setTipo(2);

$lotesCentro[0][3]->setIsConstruido(true);
$lotesCentro[0][3]->setProprietario("Municipio de ".$povoacaoAtual->getMunicipio());
$lotesCentro[0][3]->setIsAberto(true);
$lotesCentro[0][3]->setDescricao("Banco de ".$povoacaoAtual->getReino()." - " .$povoacaoAtual->getNome());
$lotesCentro[0][3]->setImagem("banco.png");

$lotesCentro[0][4]->setIsConstruido(true);
$lotesCentro[0][4]->setProprietario("Municipio de ".$povoacaoAtual->getMunicipio());
$lotesCentro[0][4]->setIsAberto(true);
$lotesCentro[0][4]->setDescricao("Hospital Municipal de ".$povoacaoAtual->getNome());
$lotesCentro[0][4]->setImagem("hospital.png");

$lotesCentro[0][5]->setIsConstruido(true);
$lotesCentro[0][5]->setProprietario("Igreja");
$lotesCentro[0][5]->setIsAberto(true);
$lotesCentro[0][5]->setDescricao("Igreja - Paróquia de ".$povoacaoAtual->getNome());
$lotesCentro[0][5]->setImagem("igreja.png");
$lotesCentro[0][5]->setTipo(1);

$lotesCentro[1][0]->setIsConstruido(true);
$lotesCentro[1][0]->setProprietario("Região de ".$povoacaoAtual->getRegiao());
$lotesCentro[1][0]->setIsAberto(true);
$lotesCentro[1][0]->setDescricao("Tribunal Regional de ".$povoacaoAtual->getRegiao());
$lotesCentro[1][0]->setImagem("tribunal_regional.png");

$lotesCentro[1][1]->setIsConstruido(true);
$lotesCentro[1][1]->setProprietario("Região de ".$povoacaoAtual->getRegiao());
$lotesCentro[1][1]->setIsAberto(true);
$lotesCentro[1][1]->setDescricao("Palácio do Governador de ".$povoacaoAtual->getRegiao());
$lotesCentro[1][1]->setImagem("palacio_governador.png");

$lotesCentro[1][2]->setIsConstruido(true);
$lotesCentro[1][2]->setProprietario("Região de ".$povoacaoAtual->getRegiao());
$lotesCentro[1][2]->setIsAberto(true);
$lotesCentro[1][2]->setDescricao("Praça Real de ".$povoacaoAtual->getReino());
$lotesCentro[1][2]->setImagem("paco_ribeira.png");

$lotesCentro[1][3]->setIsConstruido(true);
$lotesCentro[1][3]->setProprietario("Municipio de ".$povoacaoAtual->getMunicipio());
$lotesCentro[1][3]->setIsAberto(true);
$lotesCentro[1][3]->setDescricao("Câmara Municipal de ".$povoacaoAtual->getMunicipio());
$lotesCentro[1][3]->setImagem("camara_municipal.png");

$lotesCentro[1][4]->setIsConstruido(true);
$lotesCentro[1][4]->setProprietario("Municipio de ".$povoacaoAtual->getMunicipio());
$lotesCentro[1][4]->setIsAberto(true);
$lotesCentro[1][4]->setDescricao("Tribunal Municipal de ".$povoacaoAtual->getMunicipio());
$lotesCentro[1][4]->setImagem("tribunal_municipal.png");

$lotesCentro[1][4]->setIsConstruido(true);
$lotesCentro[1][4]->setProprietario("Municipio de ".$povoacaoAtual->getMunicipio());
$lotesCentro[1][4]->setIsAberto(true);
$lotesCentro[1][4]->setDescricao("Tribunal Municipal de ".$povoacaoAtual->getMunicipio());
$lotesCentro[1][4]->setImagem("tribunal_municipal.png");

$lotesCentro[1][5]->setIsConstruido(true);
$lotesCentro[1][5]->setProprietario("Municipio de ".$povoacaoAtual->getMunicipio());
$lotesCentro[1][5]->setIsAberto(true);
$lotesCentro[1][5]->setDescricao("Escola Municipal de ".$povoacaoAtual->getMunicipio());
$lotesCentro[1][5]->setImagem("escola.png");

$lotesCentro[2][0]->setIsConstruido(true);
$lotesCentro[2][0]->setProprietario("Municipio de ".$povoacaoAtual->getMunicipio());
$lotesCentro[2][0]->setIsAberto(true);
$lotesCentro[2][0]->setDescricao("Mercado Municipal de ".$povoacaoAtual->getMunicipio());
$lotesCentro[2][0]->setImagem("mercado.png");

$lotesCentro[2][1]->setIsConstruido(true);
$lotesCentro[2][1]->setProprietario("Municipio de ".$povoacaoAtual->getMunicipio());
$lotesCentro[2][1]->setIsAberto(true);
$lotesCentro[2][1]->setDescricao("Hospedaria Municipal de ".$povoacaoAtual->getMunicipio());
$lotesCentro[2][1]->setImagem("hospedaria.png");

$lotesCentro[2][2]->setIsConstruido(true);
$lotesCentro[2][2]->setProprietario("Igreja");
$lotesCentro[2][2]->setIsAberto(true);
$lotesCentro[2][2]->setDescricao("Catedral Metropolitana de ".$povoacaoAtual->getNome());
$lotesCentro[2][2]->setImagem("catedral_metropolitana.png");

$lotesCentro[2][3]->setIsConstruido(true);
$lotesCentro[2][3]->setProprietario("Municipio de ".$povoacaoAtual->getMunicipio());
$lotesCentro[2][3]->setIsAberto(true);
$lotesCentro[2][3]->setDescricao("Orfanato Municipal de ".$povoacaoAtual->getMunicipio());
$lotesCentro[2][3]->setImagem("academia.png");

$zonaUrbana = new ZonaUrbana();
$zonaUrbana->setCentro($lotesCentro);
$povoacaoAtual->setZonaUrbana($zonaUrbana);*/
//edificios
$hospital = new Hospital(1);

//$hospital->setIsAberto(true);





//echo $zonaUrbana->getCentro()[0][0]->getProprietario()."<br>".$centro[1][0]."<br>";
//echo count($centro[1]);

//$povoacaoAtual->setZonaUrbana($zonaUrbana);
