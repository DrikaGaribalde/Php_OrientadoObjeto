<?php
	include_once("../classes/manipulacaoDeDados.php");
	/*Pega do botão do formulário*/
	$acao = $_POST['acao'];
	$cod_cliente = $_POST['cod_cliente'];
	
	/*Verifico se está passando as variáveis do botão do formulário*/
	echo "Código do Cliente = " . $cod_cliente . "Variável Ação =  " .$acao;
	/**/
	$cat = new manipulacaoDeDados();
	$cat -> setTabela("cliente");
	
	$txt_cliente = $_POST['txt_cliente'];
	
	if ($acao == "Inserir"){
	/* Já está incluindo com sucesso*/
	$cat->setCampos("nome_cliente,logo");
	$cat->setDados("'$txt_cliente','0'");
	$cat->inserir();
	echo"<script type='text/javascript'> location.href='../index.php?link=2' </script>";
	//echo $cat->getMsg();
	}
	
	if ($acao == "Alterar"){
		/* Já está alterando com sucesso*/
		$cat->setCampos("nome_cliente = '$txt_cliente'");
		$cat->setValorNaTabela("cod_cliente"); /**/
		$cat->setValorPesquisa("$cod_cliente"); /**/
		$cat->alterar();
		echo"<script type='text/javascript'> location.href='../index.php?link=2' </script>";
		//echo $cat->getMsg();
	}
	
	if ($acao == "Excluir"){
		/* Já está excluindo com sucesso*/
		$cat->setValorNaTabela("cod_cliente"); /**/
		$cat->setValorPesquisa("$cod_cliente"); /**/
		$cat->excluir();
		echo"<script type='text/javascript'> location.href='../index.php?link=2' </script>";
		//echo $cat->getMsg();
	}
?>