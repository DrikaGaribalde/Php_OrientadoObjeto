<?php
		
	if(isset ($_GET['acao']))	{	
		$acao        = $_GET['acao']; 
		$cod_usuario = $_GET['cod_usuario'];/*pega o codigo do usuário*/
		/*imprimo na tela para saber qual a ação e o código que está sendo modificado*/
		echo "AÇÃO = " . $acao . "   Código Do Usuário = " . $cod_usuario ."<br>";
		
	  
		include_once("./classes/DadosDoBanco.php");
		/*instancio e chamo os métodos da classe;*/
		$dados = new DadosLogin();
		$dados->setCodUsuario($cod_usuario);
		$dados->mostrarDados();
		
		$txt_usuario  = $dados-> getUsuarioAdmin();
		$txt_senha    = $dados-> getSenhaAdmin();
		echo "txt_usuario = " . $txt_usuario . "   txt_senha = " . $txt_senha;
	}
	else{
		$txt_usuario    = "";
		$txt_senha    = "";
	}	
?>
<div id="formulario">
	<h2> Cadastro Login </h2>
	<form action="./op/op_login.php" method="post" name="frmLogin" onSubmit="return submit_page(this)" enctype="multipart/form-data">
		
		<div class="dois-campos">
			<label>
				<span class="titulo">Usuário</span>
				<input type="text" maxlength="20" name="txt_usuario" id="txt_usuario" value="<?php echo $txt_usuario;?>">
			</label>
			<label>
				<span class="titulo">Senha</span>
				<input type="text" maxlength="8"name="txt_senha" id="txt_senha" value="<?php echo $txt_senha;?>">
			</label>
		</div>
		
		<input type="hidden" name="cod_usuario" value="<?php if (isset($cod_usuario)) {echo $cod_usuario;} ?>" />
		
		<input type="hidden" name="acao" value="<?php if (isset($acao)){ echo $acao;}else{echo "Inserir";} ?>" />
		<input type="submit" value="<?php if (isset($acao)){ echo $acao;}else{echo "Inserir";} ?>" class="botao" />
		
		<!-- isset() verifica se a variável $acao existe e se está definida-->
	</form>
	<!---->
 <script language="JavaScript">
// Verifica se campos obrigatórios do formulario foram preenchidos
function submit_page(form) {

	// Verifica se campos obrigatórios foram prenchidos

	if(isFieldBlank(form.txt_usuario)) {
		foundError = true;
		alert("Você esqueceu de preencher o Nome do Usuário!");
		form.txt_usuario.focus();
		return false;
	}
	//
	if(isFieldBlank(form.txt_senha)) {
		foundError = true;
		alert("Você esqueceu de preencher a Senha!");
		form.txt_senha.focus();
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

// Coloca foco no primeiro campo do formulário
document.frmLogin.txt_usuario.focus();
</script> 
</div>