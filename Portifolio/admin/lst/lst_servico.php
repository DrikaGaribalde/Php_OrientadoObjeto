<?php
	include_once("./classes/lista.php");
	
	$lista = new Lista();
	if (isset ($_GET["pg"]))
	{
		$lista->setNumPagina($_GET["pg"]);
	}
	else{
		$pg =1;
	}
	$lista->setUrl("index.php?link=6");
?>

<h2>Lista de Serviços</h2>

<table cellpadding="0" cellspacing="0" border="1" >
<thead><!-- cabeçalho-->
	<tr>
		<th>Cód. Serviço</th>
		<th>Nome Cliente</th>
		<th>Cod</th>
		<th>Categoria</th>
		<th>Serviço</th>
		
		<th>Editar</th>
		<th>Excluir</th>
	</tr>
</thead>
	<tbody>
		<?php $lista->listaServico()?><!-- chama o método listaCategoria da classe Lista-->
		<tr>
			<td colspan = "7"> 
			<?php $lista->geraNumeros()?></td>
		</tr>
	</tbody>

</table>