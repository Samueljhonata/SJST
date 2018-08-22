<?php
		$dsn = 'mysql:host=localhost;dbname=ssvp';
		$username = 'Samuel';
		$password = 'samuel';
		$db = new PDO($dsn, $username, $password);
	
	
	if ($_POST['tipo_cadastro'] == "cp"){
		$nome = $_POST['nome'];
		$cod = $_POST['cod'];
		$dia_fundacao = $_POST['dia_fundacao'];
		$mes_fundacao = $_POST['mes_fundacao'];
		$ano_fundacao = $_POST['ano_fundacao'];
		$local_reuniao = $_POST['local_reuniao'];
		$dia_reuniao = $_POST['dia_reuniao'];
		$horario_reuniao = $_POST['horario_reuniao'];
		$id_presidente = $_POST['id_presidente'];
		$fundacao = "$dia_fundacao/$mes_fundacao/$ano_fundacao";
		
		$result = $db->query("INSERT INTO `ssvp`.`conselho_particular` (`id`, `cod`, `nome`, `fundacao`, `local`, `dia_reuniao`, `horario`, `presidente`, `vice_presidente`, `p_secretario`, `p_tesoureiro`, `s_secretario`, `s_tesoureiro`) VALUES (NULL, '$cod', '$nome', '$fundacao', '$local_reuniao', '$dia_reuniao', '$horario_reuniao', '$id_presidente', '', '', '', '', '');", PDO::FETCH_ASSOC);
		
		if($result){
			echo "Salvo com sucesso!!!";
		}else{
			echo "Nao foi salvo";
			
		}
	}
	
	if ($_POST['tipo_cadastro'] == "membro"){
		$nome = $_POST['nome'];
		$cod = $_POST['cod'];
		$dia_fundacao = $_POST['dia_fundacao'];
		$mes_fundacao = $_POST['mes_fundacao'];
		$ano_fundacao = $_POST['ano_fundacao'];
		$local_reuniao = $_POST['local_reuniao'];
		$dia_reuniao = $_POST['dia_reuniao'];
		$horario_reuniao = $_POST['horario_reuniao'];
		$id_presidente = $_POST['id_presidente'];
		$fundacao = "$dia_fundacao/$mes_fundacao/$ano_fundacao";
		
		$result = $db->query("INSERT INTO `ssvp`.`membro` (`ID`, `nome`, `nascimento`, `cpf`, `rg`, `telefone`, `profissao`, `endereco`, `proclamacao`, `conferencia`) VALUES (NULL, 'Jose', '', '000.000.000-00', '', '', '', '', '', '');", PDO::FETCH_ASSOC);
		
		if($result){
			echo "Salvo com sucesso!!!";
		}else{
			echo "Nao foi salvo";
			
		}
	}
?>
