<?php
	include_once("../classes/manipulacaoDeDados.php");
	/*Pega do botão do formulário*/
	$acao = $_POST['acao'];
	$cod_categoria = $_POST['cod_categoria'];
	
	/*Verifico se está passando as variáveis do botão do --> formulário*/
	echo "Código do Categoria = " . $cod_categoria . "Variável Ação =  " .$acao;
	echo "Nome = " .$txt_nome;
	/**/
	$cat = new manipulacaoDeDados();
	$cat -> setTabela("categoria");
	
	//$txt_categoria = $_POST['txt_categoria'];
	$txt_nome      = $_POST['txt_nome'];
	
	if ($acao == "Inserir"){
	/* Já está incluindo com sucesso*/
	$cat->setCampos("desc_categoria");
	$cat->setDados("'$txt_nome'");
	$cat->inserir();
	echo"<script type='text/javascript'> location.href='../index.php?link=4' </script>";
	//echo $cat->getMsg();
	}
	
	if ($acao == "Alterar"){
		/* Já está alterando com sucesso*/
		$cat->setCampos("desc_categoria = '$txt_nome'");
		$cat->setValorNaTabela("cod_categoria"); /**/
		$cat->setValorPesquisa("$cod_categoria"); /**/
		$cat->alterar();
		echo"<script type='text/javascript'> location.href='../index.php?link=4' </script>";
		//echo $cat->getMsg();
	}
	
	if ($acao == "Excluir"){
		/* Já está excluindo com sucesso*/
		$cat->setValorNaTabela("cod_categoria"); /**/
		$cat->setValorPesquisa("$cod_categoria"); /**/
		$cat->excluir();
		echo"<script type='text/javascript'> location.href='../index.php?link=4' </script>";
		//echo $cat->getMsg();
	}
?>