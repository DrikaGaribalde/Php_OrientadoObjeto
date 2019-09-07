<?php
	//$acao        = $_GET['acao']; /*Botão*/
	//$cod_cliente = $_GET['cod_cliente'];/*pega o codigo do cliente*/
	
	//echo "acao = " . $acao . " cod_cliente = " . $cod_cliente;
	
	  if(isset ($_GET['acao']))	{	
		$acao        = $_GET['acao']; 
		$cod_categoria = $_GET['cod_categoria'];/*pega o codigo do categoria*/
		/*imprimo na tela para saber qual a ação e o código que está sendo modificado*/
		echo "AÇÃO = " . $acao . "   CÓDIGO DA CATEGORIA = " . $cod_categoria;
	  
		include_once("./classes/DadosDoBanco.php");
		/*instancio e chamo os métodos da classe;*/
		$dados = new DadosCategoria();
		$dados->setCodCategoria($cod_categoria);
		$dados->mostrarDados();
		
		/*Para mostrar os dados no form só estou mostrando o nome da categoria*/
		$txt_nome  = $dados-> getDescCategoria();
		
		}
	else{
		$txt_nome   = "";
	}	
?>
<div id="formulario">
	<h2> Cadastro de Categoria </h2>
	<form action="./op/op_categoria.php" method="post" name="frmCategoria" onSubmit="return submit_page(this)" enctype="multipart/form-data">
		<!--
		<label>
			<span class="titulo">Código Categoria </span>
			<input type="text" name="txt_categoria" id="txt_categoria" value="<?php echo $txt_categoria;?>">
		</label>
		-->
		<div class="dois-campos">
			<label>
				<span class="titulo">Nome da Categoria</span>
				<input type="text" maxlength="30"name="txt_nome" id="txt_nome" value="<?php echo $txt_nome;?>">
			</label>
			
		</div>
		
		<input type="hidden" name="cod_categoria" value="<?php if (isset($cod_categoria)) {echo $cod_categoria;} ?>" />
		
		<input type="hidden" name="acao" value="<?php if (isset($acao)){ echo $acao;}else{echo "Inserir";} ?>" />
		<input type="submit" value="<?php if (isset($acao)){ echo $acao;}else{echo "Inserir";} ?>" class="botao" />
		
		<!-- isset() verifica se a variável $acao existe e se está definida-->
	</form>
	
 <script language="JavaScript">
// Verifica se campos obrigatórios do formulario foram preenchidos
function submit_page(form) {

	// Verifica se campos obrigatórios foram prenchidos

	if(isFieldBlank(form.txt_nome)) {
		foundError = true;
		alert("Você esqueceu de preencher o Nome da Categoria!");
		form.txt_nome.focus();
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
document.frmCategoria.txt_nome.focus();
</script> 
</div>