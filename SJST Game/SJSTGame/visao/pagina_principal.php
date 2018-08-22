<?php
include("cabecalho.php");
?>


<?php
if (isset($_GET['a'])) {
    switch ($_GET['a']){
        case 1:
            include ("centro.php");
            break;
        case 2:
            include ("bairro_residencial.php");
            break;
        case 3:
            include ("bairro_comercial.php");
            break;
        case 4:
            include ("arredores.php");
            break;

    }

}else{
    include ("centro.php");
}
/*
//Aldeia
if ($tipo_vila == 1) {
    if (isset($_GET['a'])) {
        if ($_GET['a'] == 1) {
            //include("Meu_Personagem.php");
        }
        if ($_GET['a'] == 2) {
            include("mercado_municipal.php");
        }
        if ($_GET['a'] == 3) {
            //include("praca_municipal.php");
        }
        if ($_GET['a'] == 4) {
            include("arredores.php");
        }
        if ($_GET['a'] == 5) {
            include("hospedaria.php");
        }
        if ($_GET['a'] == 6) {
            //include("cemiterio_igreja.php");
        }
        if ($_GET['a'] == 7) {
            include("bairro_residencial.php");
        }
        if ($_GET['a'] == 8) {
            include("bairro_comercial.php");
        }
        if ($_GET['a'] == 9) {
            include("tabernas_da_vila.php");
        }
        if ($_GET['a'] == 10) {
            include("viajar.php");
        }
        if ($_GET['a'] == 11) {
            //include("minas_do_governo.php");
        }
        if ($_GET['a'] == 12) {
            //include("floresta.php");
        }
        if ($_GET['a'] == 13) {
            include("acampamentos_militares.php");
        }
        if ($_GET['a'] == 14) {
            include("porto.php");
        }

    } else {
        include("aldeia.php");
    }
}
//Vila
if ($tipo_vila == 2) {
    if (isset($_GET['a'])) {
        if ($_GET['a'] == 1) {
            //include("Meu_Personagem.php");
        }
        if ($_GET['a'] == 2) {
            include("mercado_municipal.php");
        }
        if ($_GET['a'] == 3) {
            //include("praca_municipal.php");
        }
        if ($_GET['a'] == 4) {
            include("arredores.php");
        }
        if ($_GET['a'] == 5) {
            include("hospedaria.php");
        }
        if ($_GET['a'] == 6) {
            //include("cemiterio_igreja.php");
        }
        if ($_GET['a'] == 7) {
            include("bairro_residencial.php");
        }
        if ($_GET['a'] == 8) {
            include("bairro_comercial.php");
        }
        if ($_GET['a'] == 9) {
            include("tabernas_da_vila.php");
        }
        if ($_GET['a'] == 10) {
            include("viajar.php");
        }
        if ($_GET['a'] == 11) {
            //include("minas_do_governo.php");
        }
        if ($_GET['a'] == 12) {
            //include("floresta.php");
        }
        if ($_GET['a'] == 13) {
            include("acampamentos_militares.php");
        }
        if ($_GET['a'] == 14) {
            include("porto.php");
        }

    } else {
        include("vila.php");
    }
}
//Cidade
if ($tipo_vila == 3) {
    if (isset($_GET['a'])) {
        if ($_GET['a'] == 1) {
            //include("Meu_Personagem.php");
        }
        if ($_GET['a'] == 2) {
            //include("mercado_municipal.php");
        }
        if ($_GET['a'] == 3) {
            //include("praca_municipal.php");
        }
        if ($_GET['a'] == 4) {
            include("arredores.php");
        }
        if ($_GET['a'] == 5) {
            //include("hospedaria.php");
        }
        if ($_GET['a'] == 6) {
            //include("cemiterio_igreja.php");
        }
        if ($_GET['a'] == 7) {
            include("bairro_residencial.php");
        }
        if ($_GET['a'] == 8) {
            include("bairro_comercial.php");
        }
        if ($_GET['a'] == 9) {
            include("tabernas_da_vila.php");
        }
        if ($_GET['a'] == 10) {
            include("viajar.php");
        }
        if ($_GET['a'] == 11) {
            //include("minas_do_governo.php");
        }
        if ($_GET['a'] == 12) {
            //include("floresta.php");
        }
        if ($_GET['a'] == 13) {
            include("acampamentos_militares.php");
        }
        if ($_GET['a'] == 14) {
            include("porto.php");
        }

    } else {
        include("cidade.php");
    }
}

//Cidade
if ($tipo_vila == 4) {
    if (isset($_GET['a'])) {
        if ($_GET['a'] == 1) {
            //include("Meu_Personagem.php");
        }
        if ($_GET['a'] == 2) {
            include("mercado_municipal.php");
        }
        if ($_GET['a'] == 3) {
            //include("praca_municipal.php");
        }
        if ($_GET['a'] == 4) {
            include("arredores.php");
        }
        if ($_GET['a'] == 5) {
            include("hospedaria.php");
        }
        if ($_GET['a'] == 6) {
            //include("cemiterio_igreja.php");
        }
        if ($_GET['a'] == 7) {
            include("bairro_residencial.php");
        }
        if ($_GET['a'] == 8) {
            include("bairro_comercial.php");
        }
        if ($_GET['a'] == 9) {
            include("tabernas_da_vila.php");
        }
        if ($_GET['a'] == 10) {
            include("viajar.php");
        }
        if ($_GET['a'] == 11) {
            //include("minas_do_governo.php");
        }
        if ($_GET['a'] == 12) {
            //include("floresta.php");
        }
        if ($_GET['a'] == 13) {
            include("acampamentos_militares.php");
        }
        if ($_GET['a'] == 14) {
            include("porto.php");
        }

    } else {
        include("estrada.php");
    }
}
*/

?>

<?php include("rodape.php"); ?>
