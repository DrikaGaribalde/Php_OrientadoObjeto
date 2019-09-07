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
		
		<div id = "web_adesivacao">
			<div id="fundo_adesivacao">
				<div id ="adesivacao">Adesivação</div>
					<div id="web_descricaoAdesivacao">
						
						<span>
							
							A Speedy Graph utiliza em suas adesivações, vinil de alta performance (vinil recomendado para superfícies não planas), impressos em alta resolução com aplicação de verniz protetor UV.
Isso garante uma adesivação com cores mais vibrantes por mais tempo, sem o risco do vinil voltar ou rasgar.
						</span>
					</div>
					<div id="mostrar_logo_adesivacao">
						<?php

							//Arquivo de conexao com o banco de dados
							include "conexao.php";
							//
							$_pagi_sql ="SELECT  servico.cod_servico, servico.cod_categoria, servico.foto FROM servico WHERE (((servico.cod_categoria=1)))order by servico.foto";
							//
							$_pagi_cuantos = 6; //número de registros a serem mostrados em cada página

							$_pagi_nav_num_enlaces = "5"; //numero de paginas que irão aparecer na paginação

							$_pagi_mostrar_errores = false; //desabilitando a apresentação de códigos de erro

							$_pagi_conteo_alternativo = false; //desabilitado o tipo de contatdor (padrão)

							$_pagi_propagar = array("idnoticia"); //variável a ser propagada pelas páginas

							$_pagi_nav_estilo = ""; //nenhum estilo CSS aplicado via arquivo .css

							$_pagi_nav_anterior = "<"; //ícone para ir para a página anterior

							$_pagi_nav_siguiente = ">"; //ícone para ir para a página seguinte

							include("paginator.inc.php"); //incluindo o script de paginação PAGINATOR
							
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
										
										$cod_categoria = ($row->cod_categoria); // Para dividir por cliente, subdiretórios com as imagens.
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
											echo "cod_servico = ".$cod_servico . "  "; // codigo do serviço
											//echo $i ." jpg <br>"; // como faço para pegar todas as fotos da categoria?
											*/
											$output .= "</td>";
										//}
										$output .= "</td></tr>";

										$output .="</table>";
									}
									
							echo $output;
							//		
							 /*escreve as informações da paginação */							
							?>
							
					</div>
													
			</div>
			
		</div>
    		<div id="paginacao"><p><?php echo $_pagi_info . " <BR>" .$_pagi_navegacion; ?></p></div>
	<div id = "rodape_sinalizacao">	</div>	
</body>
</html>