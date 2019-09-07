<?php
/*Classe para manipulação de dados - CRUD - Orientado a Objeto*/
	include_once "conexaoMySQL.php";
	
	/*CONCEITO DE HERANÇA - EXTENDS*/
	class manipulacaoDeDados extends conexaoMySQL{
		protected $sql;
		protected $tabela;
		protected $campos;
		protected $dados; 
		protected $msg;
		protected $valorNaTabela;
		protected $valorPesquisa;
		
		/*função que busca erro nos comanados SQL
		public function getSql()
		{
			return  $this->sql;
		}
		*/
		
		/* Encapsulamento - set - Métodos para modificar os atributos que são protegidos*/
		/**/
		public function setTabela($tbl)
		{
			$this->tabela = $tbl;
		}
		public function setCampos($campo)
		{
			$this->campos = $campo;
		}
		public function setDados($dado)
		{
			$this->dados = $dado;
		}
		public function getMsg()/*Somente retorma a mensagem*/
		{
			return $this->msg;
		}
		/**/
		public function setValorNaTabela($val)
		{
			$this->valorNaTabela = $val;
		}
		public function setValorPesquisa($pesq)
		{
			$this->valorPesquisa = $pesq;
		}
		
		/**/
		/*Criando a 1ª função - Inserir*/
		public function inserir()
		{
			$this->sql = "INSERT INTO $this->tabela ($this->campos) VALUES ($this->dados)";
			
			if (self::executarSQL($this->sql))/*Chama o método da classe herdada*/
				{
					$this->msg = "Registro Cadastrado com Sucesso !";
				}
		}
		
		/*Criando a 2ª função - Excluir*/
		public function excluir()
		{
			$this->sql = "DELETE FROM $this->tabela WHERE $this->valorNaTabela = '$this->valorPesquisa'";
			
			if (self::executarSQL($this->sql))/*Chama o método da classe herdada*/
				{
					$this->msg = "Registro Excluído com Sucesso !";
				}
		}
		
		/*Criando a 3ª função - Alterar*/
		public function alterar()
		{
			$this->sql = "UPDATE $this->tabela SET $this->campos WHERE $this->valorNaTabela = '$this->valorPesquisa'";
			
			if (self::executarSQL($this->sql))/*Chama o método da classe herdada*/
				{
					$this->msg = "Registro Alterado com Sucesso !";
				}
		}
	
	}
?>