<?php
	if(isset ($_GET['acao']))	{	
		$acao        = $_GET['acao']; 
		$cod_servico = $_GET['cod_servico'];/*pega o codigo do servi�o*/
		
		/*imprimo na tela para saber qual a a��o e o c�digo que est� sendo modificado*/
		echo "A��O = " . $acao . "   C�DIGO DO SERVI�O = " . $cod_servico . "   <br> " ;
	  
		include_once("./classes/DadosDoBanco.php");
		
		/*instancio e chamo os m�todos da classe;*/
		$dados = new DadosServico();
		$dados->setCodServico($cod_servico);
		$dados->mostrarDados();
		
		/*Para mostrar os dados no form s� estou mostrando o nome do cliente e a descri��o do servi�o*/
		$txt_codCliente    = $dados-> getCodCliente();
		$txt_codCategoria  = $dados-> getCodCategoria();
		$txt_descricao     = $dados-> getDescServico();
		//
		/*teste para que o administrador saiba qual o cliente e qual � a categoria*/
		$txt_nomecliente   = $dados-> getNomeCliente();
		$txt_descdescricao = $dados-> getDescCategoria();
		
		echo "C�digo do Cliente =  " . $txt_codCliente. " <BR> ";
		echo "Nome do Cliente = " . $txt_nomecliente  . " <BR> " ;
		echo  "C�digo da Categoria = "  . $txt_codCategoria . " ----->>Categoria = " . $txt_descdescricao . " <BR> " ;
		
		}
	else{
		
		$txt_codCliente   = "";
		$txt_codCategoria = "";
		$txt_descricao    = "";
		//
	
	}	
?>

<div id="formulario">
	<h2> Cadastro de Servi�o </h2>
	<form action="./op/op_servico.php" method="post" name="frmServico"  onSubmit="return submit_page(this)" enctype="multipart/form-data">
		<!---->
		<div class="dois-campos">
			<label>
				<span class="titulo">C�digo Cliente</span>
				<input  type="number" max="999"  name="txt_codCliente" id="txt_codCliente" required value="<?php echo $txt_codCliente;?>">
			</label>
			
		
			<label>
				<span class="titulo">C�digo Categoria</span>
				<input type="number" max="999" name="txt_codCategoria" id="txt_codCategoria" required value="<?php echo $txt_codCategoria;?>">
			</label>

		</div>
		<label>
			<span class="titulo">Descri��o do Servi�o </span>
			<input type="text" maxlength="100"name="txt_descricao" id="txt_descricao" required value="<?php echo $txt_descricao;?>">
		</label>
		<!---->
		<input type="hidden" name="cod_servico" value="<?php if ($cod_servico) {echo $cod_servico;} ?>" />
		
		<input type="hidden" name="acao" value="<?php if (isset($acao)){ echo $acao;}else{echo "Inserir";} ?>" />
		<input type="submit" value="<?php if (isset($acao)){ echo $acao;}else{echo "Inserir";} ?>" class="botao" />
		
		<!-- isset() verifica se a vari�vel $acao existe e se est� definida-->
	</form>
<!---->
 <script language="JavaScript">
// Verifica se campos obrigat�rios do formulario foram preenchidos
function submit_page(form) {

	// Verifica se campos obrigat�rios foram prenchidos

	/*
	if(isFieldBlank(form.txt_codCliente)) {
		foundError = true;
		alert("Voc� esqueceu de preencher o Nome do Cliente!");
		form.txt_codCliente.focus();
		return false;
	}
	
	//
	if(isFieldBlank(form.txt_codCategoria)) {
		foundError = true;
		alert("Voc� esqueceu de preencher o C�digo da Categoria!");
		form.txt_codCategoria.focus();
		return false;
	}
	//
	if(isFieldBlank(form.txt_descricao)) {
		foundError = true;
		alert("Voc� esqueceu de preencher a Descri��o do Servi�o!");
		form.txt_descricao.focus();
		return false;
	}
	*/
}	
// Checa por campos nao preenchidos
function isFieldBlank(theField) {
	if(theField.value == "" )
		return true;
	else
		return false;
	}

// Coloca foco no primeiro campo do formul�rio
document.frmServico.txt_codCliente.focus();
</script> 
<!---->
</div>