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
	$lista->setUrl("index.php?link=2");
?>

<h2>Lista de Clientes</h2>

<table cellpadding="0" cellspacing="0" border="1" >
<thead><!-- cabe�alho-->
	<tr>
		<th>C�digo Cliente</th>
		<th>Nome Cliente</th>
		<th>Editar</th>
		<th>Excluir</th>
	</tr>
</thead>
	<tbody>
		<?php $lista->listaCliente()?><!-- chama o m�todo listaCategoria da classe Lista-->
		<tr>
			<td colspan = "5"> <?php $lista->geraNumeros()?></td>
		</tr>
	</tbody>

</table>