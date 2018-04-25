<?php 
 include_once("cabecalho.php"); 
 include_once("conecta.php"); 
 include_once("produto-database.php"); 
 
 $conexao = new BancoDeDados("localhost","root","","loja");
 $produtosDto = new ProdutosDto($conexao);

 $id=$_POST['id'];
 $produtoDto->removerProduto($id);

 hearder("location:produto-lista.php?removido=true");
 die();
 
 ?>











