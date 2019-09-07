<?php
	/*Classe de Conex�o com o Banco de Dados - Orientado a Objetos*/
	class conexaoMySQL /*Vai se tornar uma classe abastrata*/
	{
		protected $servidor; /*os atributos ser�o protegidos*/
		protected $usuario;
		protected $senha;
		protected $banco;
		protected $conexao;
		protected $qry;
		protected $dados;
		protected $totalDados;
		
		public function __construct() /*valores passados ao m�todo construtor*/
		{
		$this->servidor = "localhost";/*this � usado quando se trabalha com propriedades*/
		$this->usuario  = "root";
	    $this->senha    = "";
	    $this->banco    = "portifolio";
		self::conectar(); /*chama o m�todo conectar da pr�pria classe (usa-se self quando se trabalha com m�todos)*/
		}
		
		function conectar()	
		{
			$this->conexao = @mysql_connect($this->servidor,$this->usuario,$this->senha)
							or die("N�o foi poss�vel conectar ao servidor de banco de dados".mysql_error());
							
			$this->banco  = @mysql_select_db($this->banco,$this->conexao) 
			or die("N�o foi poss�vel conectar ao banco de dados " .mysql_error());
			/*o par�metro conex�o � opcional pois j� conectou, fun��o que relata os erros - mysql_error()*/
		}
		
		function executarSQL($sql) /*par�metro do comando sql*/
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
			$this->totalDados= mysql_num_rows($qry);/*retorna o n�mero de linhas em um resultado*/
			return $this->totalDados;
		}
	}
	
	
?>