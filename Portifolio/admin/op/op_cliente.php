<?php
	include_once("../classes/manipulacaoDeDados.php");
	/*Pega do bot�o do formul�rio*/
	$acao = $_POST['acao'];
	$cod_cliente = $_POST['cod_cliente'];
	
	/*Verifico se est� passando as vari�veis do bot�o do formul�rio*/
	echo "C�digo do Cliente = " . $cod_cliente . "Vari�vel A��o =  " .$acao;
	/**/
	$cat = new manipulacaoDeDados();
	$cat -> setTabela("cliente");
	
	$txt_cliente = $_POST['txt_cliente'];
	
	if ($acao == "Inserir"){
	/* J� est� incluindo com sucesso*/
	$cat->setCampos("nome_cliente,logo");
	$cat->setDados("'$txt_cliente','0'");
	$cat->inserir();
	echo"<script type='text/javascript'> location.href='../index.php?link=2' </script>";
	//echo $cat->getMsg();
	}
	
	if ($acao == "Alterar"){
		/* J� est� alterando com sucesso*/
		$cat->setCampos("nome_cliente = '$txt_cliente'");
		$cat->setValorNaTabela("cod_cliente"); /**/
		$cat->setValorPesquisa("$cod_cliente"); /**/
		$cat->alterar();
		echo"<script type='text/javascript'> location.href='../index.php?link=2' </script>";
		//echo $cat->getMsg();
	}
	
	if ($acao == "Excluir"){
		/* J� est� excluindo com sucesso*/
		$cat->setValorNaTabela("cod_cliente"); /**/
		$cat->setValorPesquisa("$cod_cliente"); /**/
		$cat->excluir();
		echo"<script type='text/javascript'> location.href='../index.php?link=2' </script>";
		//echo $cat->getMsg();
	}
?>