<?php
	include_once("../classes/manipulacaoDeDados.php");
	/*Pega do bot�o do formul�rio*/
	$acao = $_POST['acao'];
	$cod_categoria = $_POST['cod_categoria'];
	
	/*Verifico se est� passando as vari�veis do bot�o do --> formul�rio*/
	echo "C�digo do Categoria = " . $cod_categoria . "Vari�vel A��o =  " .$acao;
	echo "Nome = " .$txt_nome;
	/**/
	$cat = new manipulacaoDeDados();
	$cat -> setTabela("categoria");
	
	//$txt_categoria = $_POST['txt_categoria'];
	$txt_nome      = $_POST['txt_nome'];
	
	if ($acao == "Inserir"){
	/* J� est� incluindo com sucesso*/
	$cat->setCampos("desc_categoria");
	$cat->setDados("'$txt_nome'");
	$cat->inserir();
	echo"<script type='text/javascript'> location.href='../index.php?link=4' </script>";
	//echo $cat->getMsg();
	}
	
	if ($acao == "Alterar"){
		/* J� est� alterando com sucesso*/
		$cat->setCampos("desc_categoria = '$txt_nome'");
		$cat->setValorNaTabela("cod_categoria"); /**/
		$cat->setValorPesquisa("$cod_categoria"); /**/
		$cat->alterar();
		echo"<script type='text/javascript'> location.href='../index.php?link=4' </script>";
		//echo $cat->getMsg();
	}
	
	if ($acao == "Excluir"){
		/* J� est� excluindo com sucesso*/
		$cat->setValorNaTabela("cod_categoria"); /**/
		$cat->setValorPesquisa("$cod_categoria"); /**/
		$cat->excluir();
		echo"<script type='text/javascript'> location.href='../index.php?link=4' </script>";
		//echo $cat->getMsg();
	}
?>