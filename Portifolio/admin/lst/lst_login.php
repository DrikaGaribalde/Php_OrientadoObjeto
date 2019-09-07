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
	$lista->setUrl("index.php?link=8");
?>

<h2>Lista de Adminstradores</h2>

<table cellpadding="0" cellspacing="0" border="1" >
<thead><!-- cabeçalho-->
	<tr>
		<th>Código</th>
		<th>Usuário</th>
		<th>Senha</th>
		<th>Editar</th>
		<th>Excluir</th>
	</tr>
</thead>
	<tbody>
		<?php $lista->listaLogin()?><!-- chama o método listaCategoria da classe Lista-->
		<tr>
			<td colspan = "5"> <?php $lista->geraNumeros()?></td>
		</tr>
	</tbody>

</table>