<?php
	include("cabecalho.php");
?>
<?php
	echo"<h2 align='center'>";
	if (isset($_GET['cadastrar'])){
		if ($_GET['cadastrar']==1){
			echo "<form id='cabeca' align='center' style='background-color: blue;'>Cadastrar Conselho Particular  </form>";
			include ("cadastro_cp.php");
		}
		if ($_GET['cadastrar']==2){
			echo "<form id='cabeca' align='center' style='background-color: blue;'>Cadastrar Conferencia  </form>";
			include ("cadastro_conferencia.php");
		}
		if ($_GET['cadastrar']==3){
			echo "<form id='cabeca' align='center' style='background-color: blue;'>Cadastrar Membro  </form>";
			include ("cadastro_membro.php");
		}
		if ($_GET['cadastrar']==4){
			echo "<form id='cabeca' align='center' style='background-color: blue;'>Cadastrar Assistido  </form>";
			include ("cadastro_assistido.php");
		}
	}
	
	
	
	
	echo"</h2>";
?>



<?php
	include("rodape.php");
?>