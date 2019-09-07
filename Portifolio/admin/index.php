<!DOCTYPE html>
<html>
<head>
<meta charset =utf-8">

<title>Portifólio SpeedyGraph</title> 
<link href = "css/css.css" rel = "stylesheet"/>

</head>
<body>
	<div id = "principal">
		<div id = "cabecalho">
			<?php include_once ("cabecalho.php"); ?>
		</div> <!--fim cabecalho-->
		<div id = "fundo">
			<div id = "corpo">
				<nav id= "esquerdo">
					<?php include_once("menu.php");?>
				</nav>
				<div id = "direito">
				
				<!--início da verificação se o arquivo existe-->
				<?php
					if(isset ($_GET["link"]))
					{
						$link = $_GET["link"];
					}else{
						$link = 1;
					}
					
					$pag[1] = "home.php";
					$pag[2] = "lst/lst_cliente.php";
					$pag[3] = "frm/frm_cliente.php";
					$pag[4] = "lst/lst_categoria.php";
					$pag[5] = "frm/frm_categoria.php";
					$pag[6] = "lst/lst_servico.php";
					$pag[7] = "frm/frm_servico.php";
					$pag[8] = "lst/lst_login.php";
					$pag[9] = "frm/frm_login.php";
					
				if(!empty($link)) 
				/*se a variável não estiver vazia é porque ela está recebendo um valor*/
				{
					if(file_exists($pag[$link]))/*se o arquivo existe*/
					{
						include $pag[$link];
					}
					else
					{
						include "home.php";
					}
				}
				else
				{
					include "home.php";				
				}
				?>
					
				</div>
			</div>
		</div>	
	</div>	
	<div id = "rodape3">		
		<span>Speedy Graph - Todos os direitos reservados</span>
	</div>	
</body>
</html>