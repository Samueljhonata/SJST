<?php 
include("modal_window.html");
	if (isset($_GET['a'])){
		
		switch($_GET['a']){
			/*case 1: include("lote/governo/universidade/salas_de_aula.php"); break;
			case 2: include("lote/governo/universidade/biblioteca.php"); break;
			case 3: include("lote/governo/universidade/sala_professores.php"); break;
			case 4: include("lote/governo/universidade/sala_reitor.php"); break;
			case 5: include("lote/governo/universidade/minha_area.php"); break;*/
		}
			
	}else{
?>
		<h2 class="titulo2">Hospedaria Municipal de <?php echo $nome_vila; ?></h2>
		<div style="background-image:url(imagens/balcao_hospedaria.png); background-repeat: no-repeat;background-position: center top;" class="divPrincipal center-block text-center">
			
			<div style="position: relative; left: 200px;top:0px; width:30%; border-radius:50px;"> 
				Qual tipo de quarto deseja alugar?
				<br><br>
				<a class="sala" href="#dialog" name="modal"> Descanso rápido</a>
				<a class="sala" href="#dialog1" name="modal"> Quarto para aluguel</a>
				<br><br>
			</div>
			<div style="border:none;position:absolute;top:450px;left:-150px;" id="boxes">
				<div id="dialog" class="window" align="left">
					<a href="#" class="close">Fechar [X]</a><br>
					<b>Descrição:</b> Você poderá usufruir de um belo local para descanso e deixar seus bens protegidos enquanto estiver descansando.
					<br><br>Escolha a qualidade do quarto: 
						<select>
							<option> * </option>
							<option> ** </option>
							<option> *** </option>
							<option> **** </option>
							<option> ***** </option>
						</select>
					Permitilhe descansar <b>X%</b> a <b>Rs 000</b> por hora
					<br>Alugar quarto por <input type="text" style="width: 30px;"/> horas.
					<br>Valor total a pagar: <b>Rs 200</b>
					<br> <input type="submit" value="Alugar para descanso rápido" />
					
				</div>
				<div id="dialog1" class="window" align="left">
					<a href="#" class="close">Fechar [X]</a><br>
					<b>Descrição:</b> Você poderá usufruir de um belo local para descanso e deixar seus bens guardados e protegidos pelo tempo que alugar o quarto.
					<br><br>Escolha a qualidade do quarto: 
						<select>
							<option> * </option>
							<option> ** </option>
							<option> *** </option>
							<option> **** </option>
							<option> ***** </option>
						</select>
					Permitilhe descansar <b>X%</b> e guardar até <b>Y</b> de peso.
					<br>Alugar quarto por <input type="text" style="width: 30px;"/> dias.
					<br>Valor total a pagar: <b>Rs 1:200</b>
					<br> <input type="submit" value="Alugar quarto" />
					
				</div>
			</div>
		</div>
<?php
	}	
?>

