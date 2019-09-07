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
		
		<div id = "web_vejaMais">
			
			<div id="fundo_logomarcaVejamais">
			
				<div id="web_descricaoVejamais">
					<span>
						Detalhes do serviço
					</span>
				</div>
				
				<div id="mostrar_logoVejamais">
					<?php
						//conexao ao banco de dados
						$conn = mysql_connect("localhost","root","") or die (mysql_error());
						mysql_select_db("portifolio",$conn) or die (mysql_error());
						//	
												
						$output="";
						$a = ".jpg";
						$b ="";
						$b .= $a;
						
						//Pego as variáveis mandadas pela URL;
						$fotoatual=  $_REQUEST['fotoatual'];
						$cod_categoria= $_REQUEST['cod_categoria'];
						$cod_servico = $_REQUEST['cod_servico'];
						$foto= $_REQUEST['foto'];
						
						
						//echo $fotoatual ."  " .$cod_categoria ."  " .$cod_servico ."  " .$foto;
						
						
				
						//
						
						
						// inicio teste para tabela
						
						//
						$output .= "<table border ='0' align='left' cellpading='2' cellspacing='1' width='50%'>";
						$output .= "<tr>";
						$output .= "<td >";
						
						$output .= "<img src= '../Portifolio/FigurasGrandes/$fotoatual/$cod_categoria/$cod_servico /$foto' name='foto_ampliada' id= 'foto_ampliada' width='340' height='255'>";
						$output .= "</td></tr>";
						//
						$output .= "<tr><td align='left' valign='botton'><font size ='3'>";
						$output .= "</br>";
						$output .="<a href='javascript:window.history.back()'> &laquo;&laquo;Voltar" ;
						$output .= "</a></font></td></tr>";						
						// final teste para tabela
						
						$_pagi_sql = mysql_query("SELECT cliente.cod_cliente, cliente.nome_cliente, categoria.cod_categoria, categoria.desc_categoria, servico.cod_servico, servico.desc_servico
						FROM cliente INNER JOIN (categoria INNER JOIN servico ON categoria.cod_categoria = servico.cod_categoria) ON cliente.cod_cliente = servico.cod_cliente
						WHERE cliente.cod_cliente=$fotoatual and categoria.cod_categoria=$cod_categoria");

	
						
								while($row = mysql_fetch_object($_pagi_sql)){
								//
								//
								$output .= "<tr><td align='right' valign='bottom'><font size ='2'>";
								$output .= "Cliente - ";
								$output .= "<b>$row->nome_cliente </b></br> </br>";
								//
								$output .= "Categoria - ";
								//
								$output .= "<b>$row->desc_categoria </b><br>";
								$output .= "<hr></font></td></tr>";
								break;
								}
							    $output .= "</table>";
							
//
// 2ª tabela ----------------------
$output .= "<table border='0 align='left' cellpading='2' cellspacing='10' >";
$output .= "<tr>";
$output .= "<td align='right' valign='top'>";
$output .= "<a href='javascript:void(0)'>";
$output .= "<img src= '../Portifolio/FigurasGrandes/$fotoatual/$cod_categoria/$cod_servico/$foto' alt='Clique para Ampliar' width='110' height='85' border='0' onClick='foto_ampliada.src = this.src'>";	

//	
	for($i =2;$i<=3;$i++){
		$output .= "<td><div align='right' valign='bottom'>";
		$output .= "<a href='javascript:void(0)'>";
		$output .= "<img src= '../Portifolio/FigurasGrandes/$fotoatual/$cod_categoria/$cod_servico/$i$b'alt='Clique para Ampliar' width='110' height='85' border='0' onClick='foto_ampliada.src = this.src'>";
		//$output .= "echo $i$b";	
	}
		$output .= "</a></div></td>";
		$output .= "</tr>";
		$output .= "<tr>";
	for($i =4;$i<=6;$i++){
		$output .= "<td><div align='right' valign='bottom'>";
		$output .= "<a href='javascript:void(0)'>";
		$output .= "<img src= '../Portifolio/FigurasGrandes/$fotoatual/$cod_categoria/$cod_servico/$i$b'alt='Clique para Ampliar' width='110' height='85' border='0' onClick='foto_ampliada.src = this.src'>";
	    //$output .= "echo $i$b";
	}
	//------TESTE 
	$output .= "</tr>";
	$output .= "<tr>";
	// 
	for($i =7;$i<=9;$i++){
	//$verifica = $fotoatual .$i.$b; //Mostra o arquivo a ser carregado//
			$output .= "<td><div align='right' valign='bottom'>";
			$output .= "<a href='javascript:void(0)'>";
			$output .= "<img src= '../Portifolio/FigurasGrandes/$fotoatual/$cod_categoria/$cod_servico/$i$b'alt='Clique para Ampliar' width='110' height='85' border='0' onClick='foto_ampliada.src = this.src'>";
			//$output .= "echo $i$b";	
	//----------TESTE
	}	
	$output .= "</a></div></td>";
	$output .= "</tr>";
	//
	$output .= "</table>";
	echo $output;
//	*/	
?>
				</div>
			</div>
		</div>			
							
		<div id = "rodape2">							
		</div>	
						
</body>
</html>