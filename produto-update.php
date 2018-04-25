<?php 
	   include_once("cabecalho.php");
	   include_once("conecta.php");
	   include_once("produto-database.php");
	//incluindo conexão com o banco de dados


	$conexao = new BancoDeDados("localhost","root","","loja");
  	$produtosDto = new ProdutosDto($conexao);
?>


<?php

//setando os valores recebidos do fomulário($_GET)
$proId =$_GET['id'];
$proNome =$_GET['nome'];
$proPreco =$_GET['preco'];
$proDescricao =$_GET['descricao'];
$proCategoria =$_GET['categoria_id'];

if(array_key_exists('usado', $_POST)){
	$usado="true";
}
else{
	$usado="false";
}

if($produtosDto->alteraProduto($proId,$proNome,$proPreco,$proDescricao,$proCategoria,$usado)){
	?>
			<p class="text-success">O protudo foi alterado com sucesso</p>

	<?php

}


?>