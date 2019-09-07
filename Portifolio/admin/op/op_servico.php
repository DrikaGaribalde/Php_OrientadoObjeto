<?php
	include_once("../classes/manipulacaoDeDados.php");
	/*Pega do botão do formulário*/
	$acao           = $_POST['acao'];
	$cod_servico    = $_POST['cod_servico'];
	$txt_codCliente = $_POST['txt_codCliente'];
	
	/*Verifico se está passando as variáveis do botão do --> formulário*/
	echo "Código do Serviço =  " . $cod_servico . "  Variável Ação =   " .$acao . "  codigo cliente = " . $txt_codCliente. "  <BR> ";
	
	/**/
	$cat = new manipulacaoDeDados();
	$cat -> setTabela("servico");
	/**/
	$txt_codCliente   = $_POST['txt_codCliente'];
	$txt_codCategoria = $_POST['txt_codCategoria'];
	$txt_descricao    = $_POST['txt_descricao'];      //descrição do serviço
	
	
	
	
	if ($acao == "Inserir"){
	/* Já está incluindo com sucesso*/
	$cat->setCampos("cod_cliente, cod_categoria,desc_servico,foto");
	$cat->setDados("'$txt_codCliente','$txt_codCategoria','$txt_descricao','$txt_codCliente'");
	$cat->inserir();
	echo"<script type='text/javascript'> location.href='../index.php?link=6' </script>";
	//echo $cat->getMsg();
	}
	
	if ($acao == "Alterar"){
		/* */
		$cat->setCampos("cod_cliente = '$txt_codCliente',cod_categoria = '$txt_codCategoria',desc_servico = '$txt_descricao'");
		$cat->setValorNaTabela("cod_servico"); /**/
		$cat->setValorPesquisa("$cod_servico"); /**/
		$cat->alterar();
		echo"<script type='text/javascript'> location.href='../index.php?link=6' </script>";
		//echo $cat->getMsg();
	}
	
	if ($acao == "Excluir"){
		/* Já está excluindo com sucesso*/
		$cat->setValorNaTabela("cod_servico"); /**/
		$cat->setValorPesquisa("$cod_servico"); /**/
		$cat->excluir();
		echo"<script type='text/javascript'> location.href='../index.php?link=6' </script>";
		//echo $cat->getMsg();
	}
?>