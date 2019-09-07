                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <!DOCTYPE html>
<html>
<head>
<meta charset =utf-8">

<title>SPEEDY GRAPH</title> 
<link href = "css2.css" rel = "stylesheet"/>
</head>
<body>
		<div id = "web1">
		<img src = "./imagens/Cabeçalho960x183.jpg">
		</div>	
			
		<div id = "web2">
			<?php include "menu_principal.php";?>
		</div>	
		
		<div id = "web_cliente">
			<div id="fundo_logomarca">
				<div id="web_descricao2">
					<span>
						CLIENTES
					</span>
				</div>
				<div id="mostrar_logo">
					<?php

					//Arquivo de conexao com o banco de dados
					include "conexao.php";
					//
						
					$_pagi_sql = mysql_query("SELECT *	FROM cliente where cod_cliente <= 27");

					$output="";
					$logo="";
					$a = ".jpg";
					$b ="";
					$b .= $a;

					while($row = mysql_fetch_object($_pagi_sql)){
					//
					//
					    $cod_cliente = ($row->cod_cliente); // Para dividir por cliente, subdiretórios com as imagens.
						$output.="<table border = '0' align= 'left' width= '30%' cellpading ='0' cellspacing='10' >";								
						$output .= "<tr><td align='center'>";
						$output .= "<img src= '../Portifolio/FigurasGrandes/$cod_cliente/$row->logo$b' name='foto_ampliada' id= 'foto_ampliada' alt= 'Veja Mais Detalhes' width='230' height='150'>";
						$output .= "</td></tr>";
						$output .="</table>";									
								}	
						echo $output;
					?>
				</div>
			</div>
		</div>			
							
		<div id = "rodape_cliente">							
		</div>						
</body>
</html>