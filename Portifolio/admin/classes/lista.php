<?php
	include_once("Paginacao.php");
	class Lista extends Paginacao/*Estou herdando da classe paginação*/
	{
		private $strNumPagina, $strPaginas, $strUrl;
		
		
		public function setNumPagina($valor)
		{
			$this->strNumPagina = $valor;
		}
		
		public function setUrl($valor)
		{
			$this->strUrl = $valor;
		}
		
		public function getPaginas()
		{
			return $this-> strNumPagina;
		}
		/*------------------------Começando a parte de listagem para cliente*/
		public function listaCliente()
		{
			$sql = "SELECT * FROM cliente";
			$this-> setParametro($this->strNumPagina);
			$this-> setFileName($this->strUrl);
			$this-> setInfoMaxPag(4); /*quantos itens por tela depois fazer a paginação*/
			$this-> setMaximoLinks(4);/*quantos links vão aparecer na paginação*/
			$this-> setSQL($sql);
			
			self::iniciaPaginacao(); /*chama o método herdado da classe de paginação*/
			$cont = 0;
			
			
			/*varre o bd e gera para mim o array de informações */
			while($linha = self::results())
			{
				$cont++;
				/*Colocar aspas simples para que funcione*/
				/*retorna para o meu cadastro mostrando a ação&cod_cliente&nome no form*/
				echo "
					<tr>
						<td> $linha[cod_cliente]</td>
						<td> $linha[nome_cliente]</td>
						
						<td> <a href='index.php?link=3&acao=Alterar&cod_cliente=$linha[cod_cliente]'><img src='imagens/alterar.gif' border='0'/> </a></td>
						<td> <a href='index.php?link=3&acao=Excluir&cod_cliente=$linha[cod_cliente]'><img src='imagens/excluir.gif' border='0'/> </a></td>			
					</tr>
				";
				self::setContador($cont);
			}
			
		}
		/*Começando a parte de listagem para categoria*/
		public function listaCategoria()
		{
			$sql = "SELECT * FROM categoria"; /*Mudo a tabela*/
			$this-> setParametro($this->strNumPagina);
			$this-> setFileName($this->strUrl);
			$this-> setInfoMaxPag(4); /*quantos itens por tela depois fazer a paginação*/
			$this-> setMaximoLinks(4);/*quantos links vão aparecer na paginação*/
			$this-> setSQL($sql);
			
			self::iniciaPaginacao(); /*chama o método herdado da classe de paginação*/
			$cont = 0;
			
			
			/*varre o bd e gera para mim o array de informações */
			while($linha = self::results())
			{
				$cont++;
				/*Colocar aspas simples para que funcione*/
				/*retorna para o meu cadastro mostrando a ação&cod_categoria&descrição no form*/
				echo "
					<tr>
						<td> $linha[cod_categoria]</td>
						<td> $linha[desc_categoria]</td>
						
						<td> <a href='index.php?link=5&acao=Alterar&cod_categoria=$linha[cod_categoria]'><img src='imagens/alterar.gif' border='0'/> </a></td>
						<td> <a href='index.php?link=5&acao=Excluir&cod_categoria=$linha[cod_categoria]'><img src='imagens/excluir.gif' border='0'/> </a></td>			
					</tr>
				";
				self::setContador($cont);
			}
		}
		/*------------------------Começando a parte de listagem para serviço*/
		public function listaServico()
		{
			//$sql = "SELECT * FROM servico"; /*Mudo a tabela*/
			/* 		teste deu certo------------------------*/
			$sql = "SELECT cliente.cod_cliente, cliente.nome_cliente, categoria.cod_categoria, categoria.desc_categoria, servico.cod_servico, servico.desc_servico
					FROM cliente INNER JOIN (categoria INNER JOIN servico ON categoria.cod_categoria = servico.cod_categoria) ON cliente.cod_cliente = servico.cod_cliente";
	
			
			$this-> setParametro($this->strNumPagina);
			$this-> setFileName($this->strUrl);
			$this-> setInfoMaxPag(4); /*quantos itens por tela depois fazer a paginação*/
			$this-> setMaximoLinks(4);/*quantos links vão aparecer na paginação*/
			$this-> setSQL($sql);
			
			self::iniciaPaginacao(); /*chama o método herdado da classe de paginação*/
			$cont = 0;
			
			
			/*varre o bd e gera para mim o array de informações */
			while($linha = self::results())
			{
				$cont++;
				/*Colocar aspas simples para que funcione*/
				/*retorna para o meu cadastro mostrando dados no form*/
				
				echo "
					<tr>
						
						<td> $linha[cod_servico]</td>
						<td> $linha[nome_cliente]</td>
						<td> $linha[cod_categoria]</td>
						<td> $linha[desc_categoria]</td>
						<td> $linha[desc_servico]</td>
						
						<td> <a href='index.php?link=7&acao=Alterar&cod_servico=$linha[cod_servico]'><img src='imagens/alterar.gif' border='0'/> </a></td>
						<td> <a href='index.php?link=7&acao=Excluir&cod_servico=$linha[cod_servico]'><img src='imagens/excluir.gif' border='0'/> </a></td>			
					</tr>
				";
				self::setContador($cont);
			}
		}
		
		/*------------------------Começando a parte de listagem para login*/
		public function listaLogin()
		{
			$sql = "SELECT * FROM login";
			$this-> setParametro($this->strNumPagina);
			$this-> setFileName($this->strUrl);
			$this-> setInfoMaxPag(4); /*quantos itens por tela depois fazer a paginação*/
			$this-> setMaximoLinks(4);/*quantos links vão aparecer na paginação*/
			$this-> setSQL($sql);
			
			self::iniciaPaginacao(); /*chama o método herdado da classe de paginação*/
			$cont = 0;
			
			
			/*varre o bd e gera para mim o array de informações */
			while($linha = self::results())
			{
				$cont++;
				/*Colocar aspas simples para que funcione*/
				/*retorna para o meu cadastro mostrando a ação&cod_usuario&nome no form*/
				
				echo "
					<tr>
						<td> $linha[cod_usuario]</td>
						<td> $linha[usuario_admin]</td>
						<td> $linha[senha_admin]</td>
						
						<td> <a href='index.php?link=9&acao=Alterar&cod_usuario=$linha[cod_usuario]'><img src='imagens/alterar.gif' border='0'/> </a></td>
						<td> <a href='index.php?link=9&acao=Excluir&cod_usuario=$linha[cod_usuario]'><img src='imagens/excluir.gif' border='0'/> </a></td>			
					</tr>
				";
				self::setContador($cont);
			}
			
		}
	}
?>