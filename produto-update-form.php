<?php 
 include_once("cabecalho.php"); 
 include_once("conecta.php"); 
 include_once("produto-database.php");
 include_once("categoria-banco.php");
 
 $conexao = new BancoDeDados("localhost","root","","loja");
 $produtosDto = new ProdutosDto($conexao);
 $categoriasDto = new CategoriasDto($conexao);

$produto = $produtosDto->buscaProduto($id);
$categoria = $categoriaDto->listaCategoria($conexao->getConexao());

$usado = $produto['usado']?"checked = 'checked'":"";

 ?>


<h1 class="my-4 ">Atualizar</h1>

<form method="get" action="produto-update.php">
 
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Produto ID</label>
      <input name="id" type="text" class="form-control" id="inputEmail4" placeholder="Produto ID">
    </div>
    
    <div class="form-group col-md-4">
      <label for="inputPassword4">Atualizar Nome</label>
      <input name="nome" type="text" class="form-control" id="inputPassword4" placeholder="Nome do Produto">
    </div>
  </div>
  
  <div class="form-row">
	  <div class="form-group col-md-4">
      <label for="inputAddress">Atualizar Preco</label>
      <input name="preco" type="text" class="form-control" id="inputAddress" placeholder="Preço R$">
	  </div>

	  <div class="form-group col-md-4">
      <label for="inputAddress2">Atualizar Descrição</label>
      <input name="descricao" type="text" class="form-control" id="inputAddress2" placeholder="Descriçõ do Produto">
	  </div>  

    <div class="form-group col-md-4">
      <label for="inputAddress2">Usado</label>
      <input name="usado" value="true" type="checkbox" class="form-control" id="inputAddress2" >
      </div>
  </div>
  
  <div class="form-row">
	<div class="form-group col-md-2">
      <label for="inputState">Categoria ID</label>
      <select name="categoria_id" id="inputState" class="form-control">
        
        <?php foreach($categorias as $categoria) : 
          $categoriaSelecionada = $produto['categoria_id'] == $categoria['id'];
          $selecao = $categoriaSelecionada ? "selected='selected'":"";
          ?>           
      
        <option value="<?=$categoria['id']?>" <?=$selecao?> ><?=$categoria["nome"]?></option>
        
        <?php endforeach	  ?>
     
      </select>
    </div>
  </div>
  
    <button type="submit" class="btn btn-primary">Atualizar</button>
   <button type="reset" class="btn btn-danger">Apagar</button>
   
</form>

