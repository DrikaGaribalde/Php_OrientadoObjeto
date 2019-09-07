<?php
	/*Classe de Conexão com o Banco de Dados - Orientado a Objetos*/
	class conexaoMySQL /*Vai se tornar uma classe abastrata*/
	{
		protected $servidor; /*os atributos serão protegidos*/
		protected $usuario;
		protected $senha;
		protected $banco;
		protected $conexao;
		protected $qry;
		protected $dados;
		protected $totalDados;
		
		public function __construct() /*valores passados ao método construtor*/
		{
		$this->servidor = "localhost";/*this é usado quando se trabalha com propriedades*/
		$this->usuario  = "root";
	    $this->senha    = "";
	    $this->banco    = "portifolio";
		self::conectar(); /*chama o método conectar da própria classe (usa-se self quando se trabalha com métodos)*/
		}
		
		function conectar()	
		{
			$this->conexao = @mysql_connect($this->servidor,$this->usuario,$this->senha)
							or die("Não foi possível conectar ao servidor de banco de dados".mysql_error());
							
			$this->banco  = @mysql_select_db($this->banco,$this->conexao) 
			or die("Não foi possível conectar ao banco de dados " .mysql_error());
			/*o parâmetro conexão é opcional pois já conectou, função que relata os erros - mysql_error()*/
		}
		
		function executarSQL($sql) /*parâmetro do comando sql*/
		{
			$this-> qry = @mysql_query($sql) or die ("Erro ao executar o comando SQL : $sql <br>" . mysql_error());
			return $this->qry;
		}
		
		function listar($qr)
		{
			$this->dados = @mysql_fetch_assoc($qr);/*lista*/
			return $this->dados;
		
		}
		
		/*Retorna a quantidade de dados que foram encontrados na consulta-query*/
		function contaDados($qry)
		{
			$this->totalDados= mysql_num_rows($qry);/*retorna o número de linhas em um resultado*/
			return $this->totalDados;
		}
	}
	
	
?>