<?php
	include_once("conexaoMySQL.php");
	/*pega os dados do banco*/
	/******************** ----> tabela Cliente*/
	class DadosCliente extends conexaoMySQL{ /*Colocar todos os campos da tabela*/
		private  $cod_cliente, $nome_cliente, $logo;
	
		public function setCodCliente($cod_cliente){/*Modifica o cod_cliente*/
			$this-> cod_cliente = $cod_cliente;
		}
		public function getCodCliente(){/*Retorna o cod_cliente*/
			return $this-> cod_cliente;
		}
		public function getNomeCliente(){/*Retorna o nome_cliente*/
			return $this-> nome_cliente;
		}
		public function getLogo(){/*Retorna logo do cliente*/
			return $this-> logo;
		}
		
		public function mostrarDados(){
		
			$sql= "SELECT * FROM cliente where cod_cliente = '$this->cod_cliente'" ;
			$qry= self:: executarSQL($sql);
			$linha = self::listar($qry);
			
			$this-> cod_cliente    = $linha['cod_cliente'];
			$this-> nome_cliente   = $linha['nome_cliente'];
			$this-> logo           = $linha['logo'];
		}
		
		/*função para listar o codigo do cliente em um combobox
		public function comboCliente($cod_cliente){
			$sql= "SELECT * FROM cliente" ;
			$qry= self:: executarSQL($sql);
			
			while($linha = self::listar($qry)){
				if($cod_cliente==$linha["cod_cliente"]){
					$selecionado= "selected='selected'";
				}else{
					$selecionado="";
				}
				echo"<option value=$linha[cod_cliente] $seleciondado>$linha[nome_cliente]</option>\n";
			}
		}*/
	
	}
	
	/**/
	
		/**/
		/******************** ----> tabela Categoria*/
		
	class DadosCategoria extends conexaoMySQL{ /*Colocar todos os campos da tabela*/
		private  $cod_categoria, $desc_categoria;
	
		public function setCodCategoria($cod_categoria){/*Modifica o cod_categoria*/
			$this-> cod_categoria = $cod_categoria;
		}
		public function getCodCategoria(){/*Retorna o cod_categoria*/
			return $this-> cod_categoria;
		}
		public function getDescCategoria(){/*Retorna a descrição da categoria*/
			return $this-> desc_categoria;
		}
				
		public function mostrarDados(){
		
		$sql= "SELECT * FROM categoria where cod_categoria = '$this->cod_categoria'" ;
		$qry= self:: executarSQL($sql);
		$linha = self::listar($qry);
		
		$this-> cod_categoria    = $linha['cod_categoria'];
		$this-> desc_categoria   = $linha['desc_categoria'];
	}

}
		/**/
		/******************** ----> tabela Serviço*/
	class DadosServico extends conexaoMySQL{ /*Colocar todos os campos da tabela*/
		private  $cod_servico, $cod_categoria, $cod_cliente, $desc_servico, $foto, $nome_cliente, $desc_categoria;
	
		public function setCodServico($cod_servico){/*Modifica o cod_servico*/
			$this-> cod_servico = $cod_servico;
		}
		public function getCodServico(){/*Retorna o cod_serviço*/
			return $this-> cod_servico;
		}
		public function getCodCategoria(){/*Retorna o código categoria*/
			return $this-> cod_categoria;
		}
		public function getCodCliente(){/*Retorna o código_cliente*/
			return $this-> cod_cliente;
		}
		public function getDescServico(){/*Retorna o descrição do serviço*/
			return $this-> desc_servico;
		}
		public function getFoto(){/*Retorna o número da pasta que fica os trabalhos do cliente é igual ao código do cliente*/
			return $this-> foto;
		}
		/*TESTE para ver se pega da consulta*/
		public function getNomeCliente(){/*Retorna o nome_cliente*/
			return $this-> nome_cliente;
		}
		public function getDescCategoria(){/*Retorna o nome_cliente*/
			return $this-> desc_categoria;
		}
				
		public function mostrarDados(){
		
		//$sql= "SELECT * FROM categoria where cod_categoria = '$this->cod_categoria'" ;
		$sql = "SELECT cliente.cod_cliente, cliente.nome_cliente, categoria.cod_categoria, categoria.desc_categoria, servico.cod_servico, servico.desc_servico, servico.foto	
				FROM cliente INNER JOIN (categoria INNER JOIN servico ON categoria.cod_categoria = servico.cod_categoria) ON cliente.cod_cliente = servico.cod_cliente
				where cod_servico = '$this->cod_servico'";
		$qry= self:: executarSQL($sql);
		$linha = self::listar($qry);
		
		$this-> cod_servico    = $linha['cod_servico'];
		$this-> cod_categoria  = $linha['cod_categoria'];
		$this-> desc_categoria = $linha['desc_categoria'];
		$this-> cod_cliente    = $linha['cod_cliente'];
		$this-> nome_cliente   = $linha['nome_cliente'];
		$this-> desc_servico   = $linha['desc_servico'];
		$this-> foto           = $linha['foto'];
	}
	
}

/******************** ----> tabela Login*/
	class DadosLogin extends conexaoMySQL{ /*Colocar todos os campos da tabela*/
		private  $cod_usuario, $usuario_admin, $senha_admin;
	
		public function setCodUsuario($cod_usuario){/*Modifica o cod_usuario*/
			$this-> cod_usuario = $cod_usuario;
		}
		public function getCodUsuario(){/*Retorna o cod_usuario*/
			return $this-> cod_usuario;
		}
				
		public function getUsuarioAdmin(){/*Retorna o nome_usuario*/
			return $this-> usuario_admin;
		}
		public function getSenhaAdmin(){/*Retorna o senha do usuario*/
			return $this-> senha_admin;
		}
		
		public function mostrarDados(){
		
		$sql= "SELECT * FROM login where cod_usuario = '$this->cod_usuario'";
		$qry= self:: executarSQL($sql);
		$linha = self::listar($qry);
		
		$this-> cod_usuario   = $linha['cod_usuario'];
		$this-> usuario_admin = $linha['usuario_admin'];
		$this-> senha_admin   = $linha['senha_admin'];
		}
}
/**/


?>