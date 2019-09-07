<?php
	if(isset ($_GET['acao']))	{	
		$acao        = $_GET['acao']; 
		$cod_servico = $_GET['cod_servico'];/*pega o codigo do serviço*/
		
		/*imprimo na tela para saber qual a ação e o código que está sendo modificado*/
		echo "AÇÃO = " . $acao . "   CÓDIGO DO SERVIÇO = " . $cod_servico . "   <br> " ;
	  
		include_once("./classes/DadosDoBanco.php");
		
		/*instancio e chamo os métodos da classe;*/
		$dados = new DadosServico();
		$dados->setCodServico($cod_servico);
		$dados->mostrarDados();
		
		/*Para mostrar os dados no form só estou mostrando o nome do cliente e a descrição do serviço*/
		$txt_codCliente    = $dados-> getCodCliente();
		$txt_codCategoria  = $dados-> getCodCategoria();
		$txt_descricao     = $dados-> getDescServico();
		//
		/*teste para que o administrador saiba qual o cliente e qual é a categoria*/
		$txt_nomecliente   = $dados-> getNomeCliente();
		$txt_descdescricao = $dados-> getDescCategoria();
		
		echo "Código do Cliente =  " . $txt_codCliente. " <BR> ";
		echo "Nome do Cliente = " . $txt_nomecliente  . " <BR> " ;
		echo  "Código da Categoria = "  . $txt_codCategoria . " ----->>Categoria = " . $txt_descdescricao . " <BR> " ;
		
		}
	else{
		
		$txt_codCliente   = "";
		$txt_codCategoria = "";
		$txt_descricao    = "";
		//
	
	}	
?>

<div id="formulario">
	<h2> Cadastro de Serviço </h2>
	<form action="./op/op_servico.php" method="post" name="frmServico"  onSubmit="return submit_page(this)" enctype="multipart/form-data">
		<!---->
		<div class="dois-campos">
			<label>
				<span class="titulo">Código Cliente</span>
				<input  type="number" max="999"  name="txt_codCliente" id="txt_codCliente" required value="<?php echo $txt_codCliente;?>">
			</label>
			
		
			<label>
				<span class="titulo">Código Categoria</span>
				<input type="number" max="999" name="txt_codCategoria" id="txt_codCategoria" required value="<?php echo $txt_codCategoria;?>">
			</label>

		</div>
		<label>
			<span class="titulo">Descrição do Serviço </span>
			<input type="text" maxlength="100"name="txt_descricao" id="txt_descricao" required value="<?php echo $txt_descricao;?>">
		</label>
		<!---->
		<input type="hidden" name="cod_servico" value="<?php if ($cod_servico) {echo $cod_servico;} ?>" />
		
		<input type="hidden" name="acao" value="<?php if (isset($acao)){ echo $acao;}else{echo "Inserir";} ?>" />
		<input type="submit" value="<?php if (isset($acao)){ echo $acao;}else{echo "Inserir";} ?>" class="botao" />
		
		<!-- isset() verifica se a variável $acao existe e se está definida-->
	</form>
<!---->
 <script language="JavaScript">
// Verifica se campos obrigatórios do formulario foram preenchidos
function submit_page(form) {

	// Verifica se campos obrigatórios foram prenchidos

	/*
	if(isFieldBlank(form.txt_codCliente)) {
		foundError = true;
		alert("Você esqueceu de preencher o Nome do Cliente!");
		form.txt_codCliente.focus();
		return false;
	}
	
	//
	if(isFieldBlank(form.txt_codCategoria)) {
		foundError = true;
		alert("Você esqueceu de preencher o Código da Categoria!");
		form.txt_codCategoria.focus();
		return false;
	}
	//
	if(isFieldBlank(form.txt_descricao)) {
		foundError = true;
		alert("Você esqueceu de preencher a Descrição do Serviço!");
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

// Coloca foco no primeiro campo do formulário
document.frmServico.txt_codCliente.focus();
</script> 
<!---->
</div>