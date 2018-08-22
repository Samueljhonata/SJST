<?php
    /*$loteGoverno = new LoteGoverno(1);
    $loteGoverno->setTipoGoverno(2);*/
	if(isset($_GET['tipo_con'])){
	    $tipo_governo = $_GET['tipo_con'];
    } else{
        $tipo_governo = $tipo;
    }

	
	switch($tipo_governo){
		case 1: include("lote/governo/banco.php"); break;
		case 2: include("lote/governo/camara_municipal.php"); break;
		case 3: include("lote/governo/escola.php"); break;
		case 4: include("lote/governo/hospedaria.php"); break;
		case 5: include("lote/governo/hospital.php"); break;
		case 6: include("lote/governo/mercado_municipal.php"); break;
		case 7: include("lote/governo/orfanato.php"); break;
		case 8: include("lote/governo/palacio_governador.php"); break;
		case 9: include("lote/governo/praca_real.php"); break;
		case 10: include("lote/governo/tabernas.php"); break;
		case 11: include("lote/governo/tribunal_municipal.php"); break;
		case 12: include("lote/governo/tribunal_regional.php"); break;
		case 13: include("lote/governo/universidade.php"); break;
	}
?>