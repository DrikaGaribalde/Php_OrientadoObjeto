<?php
$usuario = $_REQUEST['usuario'];
$senha   = $_REQUEST['senha'];
//echo $usuario . "      ". $senha;

include "conexao.php";
$_pagi_sql = mysql_query("SELECT * from login WHERE usuario_admin = '$usuario' AND senha_admin='$senha'");		

	while($row = mysql_fetch_object($_pagi_sql))
	{
		$usuario_admin=($row->usuario_admin);
		$senha_admin  =($row->senha_admin);	

		echo $usuario_admin . "      ". $senha_admin;

		if ($usuario_admin=$usuario_admin && $senha_admin=$senha_admin)
		{
			echo"<script type='text/javascript'> location.href='admin/index.php' </script>";
		}	
	}

//echo"<script type='text/javascript'> location.href='tela_login.php'; alert('Usuário ou senha inválidos');</script>";

//echo"<script type='text/javascript'> location.href='tela_login.php'; alert('Usuário ou senha inválidos');</script>";
?>
<!DOCTYPE html>
<html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!DOCTYPE html>
<head>
<meta charset =utf-8">

<title>SPEEDY GRAPH </title> 
<link href = "css2.css" rel = "stylesheet"/>
<!---->

</head>

<body>
		<div id = "web1">
			<img src = "./imagens/Cabeçalho960x183.jpg">
		</div>	
			
		<div id = "web2">
			<?php include "menu_principal.php";?>
		</div>	
		
		<div id = "web_fundo_2">
			
			<div id="web_login_2">
				<span>Desculpe mas a SENHA ou o USUÁRIO SÃO INVÁLIDAS <br>
				Por favor tente novamente! <br>
				</span>
			</div>
			
			<div id="formulario_2">		
				<input type="button" onclick="history.back();" value="<< Voltar" class="botao">
			</div>			
		</div>	
<div id = "rodape_login">			
</div>	
</body>


</html>
<!--
<html>
	<head>
		<title>Erro</title>
	</head>
	<body>
		<h1>Usuário ou senha inválidos</h1>
		<input type="button" onclick="history.back();" value="Voltar">
	</body>
</html>
-->

