<?php 
	include("cabecalho.php");

	if(isset($_GET['id'])){
	    $lotes = $povoacaoAtual->getZonaUrbana()->getCentro();
        //$lotes = new LotePublico();

        for($i=0; $i< count($lotes); $i++){
        $edificio = $lotes[$i]->getEdificioConstruido();
                if ($lotes[$i]->getId()  == $_GET['id']){
                    $tipo_ed = $lotes[$i]->getTipoLote();
                    $tipo = $edificio->getTipoEdificio();
                    echo $edificio->getNome();
                    break;
                }

        }
        //echo $tipo_ed;
		//$id = $_GET['id'];
		//$tipo_ed = $_GET['tipo_ed'];//pega no DB
		$venda = 1;//pega no DB
		
		switch($tipo_ed){
			case 0: include("lote/lote_vazio.php"); break;
			case 1: include("lote/igreja.php"); break;
			case 2: include("lote/governo.php"); break;
			case 3: include("lote/moradia.php"); break;
			case 4: include("lote/oficina.php"); break;
			case 5: include("lote/edificio_especial.php"); break;
			case 6: include("lote/quartel.php"); break;
			case 7: include("lote/cia_comercial.php"); break;
		}
	}
	echo"<br>";
	include("rodape.php");
?>