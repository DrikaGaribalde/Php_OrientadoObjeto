                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <!DOCTYPE html>
<html>
<head>
<meta charset =utf-8">

<title>SPEEDY GRAPH</title> 
<link href = "css2.css" rel = "stylesheet"/>

</head>
<body>

	<div id = "web1">
		<img src = "./imagens/Cabe�alho960x183.jpg">
	</div>	
			
		<div id = "web2">
			<?php include "menu_principal.php";?>
		</div>	
		
		<div id = "web_adesivacao">
			<div id="fundo_adesivacao">
				<div id ="adesivacao">Adesiva��o</div>
					<div id="web_descricaoAdesivacao">
						
						<span>
							
							A Speedy Graph utiliza em suas adesiva��es, vinil de alta performance (vinil recomendado para superf�cies n�o planas), impressos em alta resolu��o com aplica��o de verniz protetor UV.
Isso garante uma adesiva��o com cores mais vibrantes por mais tempo, sem o risco do vinil voltar ou rasgar.
						</span>
					</div>
					<div id="mostrar_logo_adesivacao">
						<?php

							//Arquivo de conexao com o banco de dados
							include "conexao.php";
							//
							$_pagi_sql ="SELECT  servico.cod_servico, servico.cod_categoria, servico.foto FROM servico WHERE (((servico.cod_categoria=1)))order by servico.foto";
							//
							$_pagi_cuantos = 6; //n�mero de registros a serem mostrados em cada p�gina

							$_pagi_nav_num_enlaces = "5"; //numero de paginas que ir�o aparecer na pagina��o

							$_pagi_mostrar_errores = false; //desabilitando a apresenta��o de c�digos de erro

							$_pagi_conteo_alternativo = false; //desabilitado o tipo de contatdor (padr�o)

							$_pagi_propagar = array("idnoticia"); //vari�vel a ser propagada pelas p�ginas

							$_pagi_nav_estilo = ""; //nenhum estilo CSS aplicado via arquivo .css

							$_pagi_nav_anterior = "<"; //�cone para ir para a p�gina anterior

							$_pagi_nav_siguiente = ">"; //�cone para ir para a p�gina seguinte

							include("paginator.inc.php"); //incluindo o script de pagina��o PAGINATOR
							
							//
							
							//
							
							

							$output="";
							$foto="";
							$i = 1;
							$a = ".jpg";
							$b ="";
							$b .= $a;

									while($row = mysql_fetch_object($_pagi_result)){
									//
									//
										$fotoatual  = ($row->foto);
										
										$cod_categoria = ($row->cod_categoria); // Para dividir por cliente, subdiret�rios com as imagens.
										$cod_servico   = ($row->cod_servico);
										
										$output.="<table border = '0' align= 'left'  cellpading ='0' cellspacing='10' >";
										$output .= "<tr><td align='center'>";				
										
										//for ($i = 1; $i<=3;$i++){				
										
											$output .= "<td align='center'>";
											
											$output .= "<a href= veja_mais_ok.php?fotoatual=$row->foto&cod_categoria=$row->cod_categoria&cod_servico=$row->cod_servico&foto=$i$b>";
											$output .= "<img src= '../Portifolio/FigurasGrandes/$fotoatual/$cod_categoria/$cod_servico/1$b' name='foto_ampliada' id= 'foto_ampliada' alt= 'Veja Mais Detalhes' width='185' height='140'>";
											/*
											echo "fotoatual = ".$fotoatual; // codigo do cliente
											echo "cod_categoria = ".$cod_categoria . "  "; // codigo da categoria =2
											echo "cod_servico = ".$cod_servico . "  "; // codigo do servi�o
											//echo $i ." jpg <br>"; // como fa�o para pegar todas as fotos da categoria?
											*/
											$output .= "</td>";
										//}
										$output .= "</td></tr>";

										$output .="</table>";
									}
									
							echo $output;
							//		
							 /*escreve as informa��es da pagina��o */							
							?>
							
					</div>
													
			</div>
			
		</div>
    		<div id="paginacao"><p><?php echo $_pagi_info . " <BR>" .$_pagi_navegacion; ?></p></div>
	<div id = "rodape_sinalizacao">	</div>	
</body>
</html>