                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <!DOCTYPE html>
<html>
<head>
<meta charset =utf-8">

<title>SPEEDY GRAPH</title> 
<link href = "css2.css" rel = "stylesheet"/>

<script type="text/javascript">
 // Verifica se campos obrigatórios do formulario foram preenchidos
function submit_page(form) {

	// Verifica se campos obrigatórios foram prenchidos

	if(isFieldBlank(form.empresa)) {
		foundError = true;
		alert("Você esqueceu de preencher a empresa!");
		form.empresa.focus();
		return false;
	}
	//
	if(isFieldBlank(form.endereco)) {
		foundError = true;
		alert("Você esqueceu de preencher o endereço!");
		form.endereco.focus();
		return false;
	}
	//
	if(isFieldBlank(form.nome_contato)) {
		foundError = true;
		alert("Você esqueceu de preencher o nome para contato!");
		form.nome_contato.focus();
		return false;
	}
	//
	if(isFieldBlank(form.email)) {
		foundError = true;
		alert("Você esqueceu de preencher o e-mail!");
		form.email.focus();
		return false;
	}
	//
	if(isFieldBlank(form.telefone)) {
		foundError = true;
		alert("Você esqueceu de preencher o telefone!");
		form.telefone.focus();
		return false;
	}
	//
	if(isFieldBlank(form.assunto)) {
		foundError = true;
		alert("Você esqueceu de preencher o assunto!");
		form.assunto.focus();
		return false;
	}
	//-------------------- teste
function validaTelefone(){
          d = document.frmContato;//cadastro e o nome do form. troque a seu gosto
//validar telefone(verificacao se contem apenas numeros)
        if (isNaN(d.telefone.value)){
                  alert ("O campo " + d.telefone.name + " deve conter apenas numeros!");
                   d.telefone.focus();
                  return false;
        }
}		
}
// Checa por campos nao preenchidos
function isFieldBlank(theField) {
	if(theField.value == "" )
		return true;
	else
		return false;
	}
// Checa validade de endereco de e-mail
function isValidEmail(theField) {
	if(theField.value.indexOf('@', 0) == -1)
		return false;
	else
		return true;
}

</script>

</script> 	

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
				<form action= "contato_ok.php" method="POST" name="frmContato" onSubmit="return submit_page(this)"enctype="multipart/form-data">
					<div class="dois-campos">
						<label>
							<span class="titulo">Empresa</span>
							<input type= "text" maxlength="50" name="empresa" id="empresa">
						</label>
						<script language="JavaScript">
						<!--
							// Coloca foco no primeiro campo do formulário
							document.frmContato.empresa.focus();
						// -->
						</script>
					</div>
					<div class="dois-campos">
						<label>
							<span class="titulo">Endereço</span>
							<input type= "text" maxlength="50" name="endereco" id="endereco">
						</label>
					</div>
					<div class="dois-campos">
						<label>
							<span class="titulo">Nome para Contato</span>
							<input type= "text"  maxlength="20" name="nome_contato" id="nome_contato">
						</label>
					</div>
					<div class="dois-campos">
						<label>
							<span class="titulo">E-mail</span>
							<input type= "text"  maxlength="50" name="email" id="email">
						</label>
					</div>
					<div class="dois-campos">
						<label>
							<span class="titulo">Telefone</span>
							<input type="number" max="9999999999" maxlength="10" name="telefone" id="telefone"  >
							<!---->
							
							
						</label>
					</div>
					<div class="dois-campos">
						<label>
							<span class="titulo">Digite sua Mensagem</span>
							<textarea name="assunto"  maxlength="250" id="assunto" cols=49 rows=6 maxlength="50" ></textarea>
						</label>
					</div>
					<input type= "submit" value="Enviar" class="botao">
				</form>	
			</div>			
			
		</div>			
		
		<div id = "rodape_contato">
				
		</div>	
	
	


</body>
</html>