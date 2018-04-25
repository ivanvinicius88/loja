
<?php 
    include_once("cabecalho.php"); 
    include_once("conecta.php"); 
    include_once("produto-database.php"); 

    $conexao = new BancoDeDados("localhost","root","","loja");
    $categoriaDto = new CategoriasDto($conexao);
    $categorias = $categoriasDto->listaCategorias($conexao);

?>


<h1 class="my-4 ">Cadastrar</h1>

<form method="get" action="produto-add.php">
 
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Produto ID</label>
      <input name="id" type="text" class="form-control" id="inputEmail4" placeholder="ID">
    </div>
    
    <div class="form-group col-md-4">
      <label for="inputPassword4">Nome Do Produto</label>
      <input name="nome" type="text" class="form-control" id="inputPassword4" placeholder="Nome">
    </div>
  </div>
  
  <div class="form-row">
	  <div class="form-group col-md-4">
		<label for="inputAddress">Preço R$</label>
		<input name="preco" type="text" class="form-control" id="inputAddress" placeholder="R$">
	  </div>

	  <div class="form-group col-md-4">
		<label for="inputAddress2">Descrição Do Produto</label>
		<input name="descricao" type="text" class="form-control" id="inputAddress2" placeholder="Descrição">
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
        
        <?php foreach($categorias as $categoria) : ?>           
      
        <option value="<?=$categoria['id']?>" ><?=$categoria["nome"]?></option>
        
        <?php endforeach	  ?>
     
      </select>
    </div>
  </div>
  
   <button type="submit" class="btn btn-primary">Cadastrar</button>
   <button type="reset" class="btn btn-danger">Apagar</button>
   
</form>




