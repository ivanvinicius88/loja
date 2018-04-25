<?php    
		   
		   include_once("cabecalho.php");
		   include_once("conecta.php");
		   include_once("produto-database.php");
		//incluindo conexão com o banco de dados
	
	
		$conexao = new BancoDeDados("localhost","root","","loja");
		$produtosDto = new ProdutosDto($conexao);
?>
<?php

	$id = $_POST['id'];
	$produto = $produtoDto->buscaProduto($id);




?>
<form action="produto-delete.php" method="post">
	<input type="hidden" name="id" valeu="<?=$produto['id']?>">
	você deseja realmente excluir esse protudo?
	nome:<?=$produto['nome']?>

	<input type="submit" name="confirmar" value="CONFIRMAR">
</form>