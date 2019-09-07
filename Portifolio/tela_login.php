<!DOCTYPE html>
<html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!DOCTYPE html>
<head>
<meta charset =utf-8">

<title>SPEEDY GRAPH </title> 
<link href = "css2.css" rel = "stylesheet"/>
<!---->
 <script type="text/javascript">
 // Coloca foco no primeiro campo do formulário
 document.frmLogin.usuario.focus();

 // Verifica se campos obrigatórios do formulario foram preenchidos
function submit_page(form) {

	// Verifica se campos obrigatórios foram prenchidos

	if(isFieldBlank(form.usuario)) {
		foundError = true;
		alert("Você esqueceu de preencher o usuário!");
		form.usuario.focus();
		return false;
	}
	//
	if(isFieldBlank(form.senha)) {
		foundError = true;
		alert("Você esqueceu de preencher a senha!");
		form.senha.focus();
		return false;
	}

}
// Checa por campos nao preenchidos
function isFieldBlank(theField) {
	if(theField.value == "" )
		return true;
	else
		return false;
	}
	
function clearFields() {
	document.getElementById("usuario").value = "";
	document.getElementById("senha").value = "";
}

</script> 	
</head>

<body onload="clearFields()">
		<div id = "web1">
			<img src = "./imagens/Cabeçalho960x183.jpg">
		</div>	
			
		<div id = "web2">
			<?php include "menu_principal.php";?>
		</div>	
		
		<div id = "web_fundo">
			
			<div id="web_login">
				<span>Bem vindo esta é uma área reservada a manutenção. <br>
				Somente para pessoas autorizadas. <br>
				</span>
			</div>
			
			<div id="formulario">		
				<form action= "resultado.php" method="POST" name="frmLogin" onSubmit="return submit_page(this)" enctype="multipart/form-data">
					<div class="dois-campos">
						<label>
							<span class="titulo">USUÁRIO</span>
							<input type= "text" maxlength="20" name="usuario" id="usuario">
						</label>
						<script language="JavaScript">
						<!--
							// Coloca foco no primeiro campo do formulário
							document.frmLogin.usuario.focus();
						// -->
						</script>
					</div>
					<div class="dois-campos">
						<label>
							<span class="titulo">SENHA</span>
							<input type= "password" maxlength="8" name="senha" id="senha">
								
						</label>
					</div>
					<input type= "submit" value="Enviar" class="botao">
				</form>	
			</div>			
		</div>	
<div id = "rodape_login">			
</div>	
</body>


</html>