<?php
	//$acao        = $_GET['acao']; /*Botão*/
	//$cod_cliente = $_GET['cod_cliente'];/*pega o codigo do cliente*/
	
	//echo "acao = " . $acao . " cod_cliente = " . $cod_cliente;
	
	  if(isset ($_GET['acao']))	{	
		$acao        = $_GET['acao']; 
		$cod_cliente = $_GET['cod_cliente'];/*pega o codigo do cliente*/
		/*imprimo na tela para saber qual a ação e o código que está sendo modificado*/
		echo "AÇÃO = " . $acao . "   CÓDIGO DO CLIENTE = " . $cod_cliente;
	  
		include_once("./classes/DadosDoBanco.php");
		/*instancio e chamo os métodos da classe;*/
		$dados = new DadosCliente();
		$dados->setCodCliente($cod_cliente);
		$dados->mostrarDados();
		
		$txt_cliente    = $dados-> getNomeCliente();
		/*coloca essa variável $txt_cliente no formunlário para ficar melhor;*/
	}
	else{
		$txt_cliente    = "";
	}	
?>



<div id="formulario">
	<h2> Cadastro de Clientes </h2>
	<form action="./op/op_cliente.php" method="post" name="frmCliente" onSubmit="return submit_page(this)" enctype="multipart/form-data">
		<label>
			<span class="titulo">Nome Cliente </span>
			<input type="text" maxlength="50"name="txt_cliente" id="txt_cliente" value="<?php echo $txt_cliente;?>">
		</label>
		
		
		<input type="hidden" name="cod_cliente" value="<?php if (isset($cod_cliente)) {echo $cod_cliente;} ?>" />
		
		<input type="hidden" name="acao" value="<?php if (isset($acao)){ echo $acao;}else{echo "Inserir";} ?>" />
		<input type="submit" value="<?php if (isset($acao)){ echo $acao;}else{echo "Inserir";} ?>" class="botao" />
		
		<!-- isset() verifica se a variável $acao existe e se está definida-->
	</form>
<!---->
 <script language="JavaScript">
// Verifica se campos obrigatórios do formulario foram preenchidos
function submit_page(form) {

	// Verifica se campos obrigatórios foram prenchidos

	if(isFieldBlank(form.txt_cliente)) {
		foundError = true;
		alert("Você esqueceu de preencher o Nome do Cliente!");
		form.txt_cliente.focus();
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
document.frmCliente.txt_cliente.focus();
</script> 

</div>