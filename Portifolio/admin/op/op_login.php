<?php
	include_once("../classes/manipulacaoDeDados.php");
	/*Pega do bot�o do formul�rio*/
	$acao        = $_POST['acao'];
	$cod_usuario = $_POST['cod_usuario'];
	
	/*Verifico se est� passando as vari�veis do bot�o do formul�rio*/
	echo "Usu�rio = " . $cod_usuario . "Vari�vel A��o =  " .$acao;
	/**/
	$cat = new manipulacaoDeDados();
	$cat -> setTabela("login");
	
	$txt_usuario = $_POST['txt_usuario'];
	$txt_senha   = $_POST['txt_senha'];
	
	if ($acao == "Inserir"){
	/* J� est� incluindo com sucesso*/
		$cat->setCampos("usuario_admin,senha_admin");
		$cat->setDados("'$txt_usuario','$txt_senha'");
		$cat->inserir();
		echo"<script type='text/javascript'> location.href='../index.php?link=8' </script>";
		//echo $cat->getMsg();
	}
	
	if ($acao == "Alterar"){
		/*J� est� alterando com sucesso */
		$cat->setCampos("usuario_admin = '$txt_usuario',senha_admin = '$txt_senha'");
		$cat->setValorNaTabela("cod_usuario"); /**/
		$cat->setValorPesquisa("$cod_usuario"); /**/
		$cat->alterar();
		echo"<script type='text/javascript'> location.href='../index.php?link=8' </script>";
		//echo $cat->getMsg();
	}
	
	if ($acao == "Excluir"){
		/* J� est� excluindo com sucesso*/
		$cat->setValorNaTabela("cod_usuario"); /**/
		$cat->setValorPesquisa("$cod_usuario"); /**/
		$cat->excluir();
		echo"<script type='text/javascript'> location.href='../index.php?link=8' </script>";
		//echo $cat->getMsg();
	}
?>