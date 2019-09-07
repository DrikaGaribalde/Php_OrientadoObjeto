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
		
		<div id = "webContato">
			
			<div id="formulario_contato">		
				
				<?php
				$empresa = $_POST['empresa'];
				$endereco = $_POST['endereco'];
				$nome_contato = $_POST['nome_contato'];
				$email = $_POST['email'];
				$telefone = $_POST['telefone'];
				$assunto = $_POST['assunto'];
				

				$to = 'adrianagaribalde@gmail.com';
				$subject = 'Contato - Speedy Graph';
				$msg = " Nome da empresa: $empresa  <br />" .
					    " Endereço: $endereco  <br />" .
						"Nome de contato: $nome_contato <br />" .
						"E-mail: $email <br />" .
						"Telefone de contato: $telefone <br />" .
						"Assunto: $assunto <br />";
						echo $msg;
						
				mail($to, $subject, $msg, 'From:' . $email);

				echo $empresa . '<br />';
				echo 'Obrigada pelo contato.<br />';
				echo  '<br />';
				echo "<a href='javascript:window.history.back()'> &laquo;&laquo;Voltar" ;
				?>

			</div>			
			
		</div>			
		
		<div id = "rodape_contato"></div>	
</body>
</html>