<?php 
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("produto-database.php");

    $conexao = new BancoDeDados("localhost","root","","loja");
    $produtosDto = new ProdutosDto($conexao);
    $produtos = $produtosDto->listaCategorias($conexao);

?>

    <table class="table table-striped table-bordered">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Preço</td>
            <td>Descrição</td>
            <td>Categoria</td>
            <td>Usado</td>
            <td>Ações</td>
        </tr>
        <?php
            $produtos = $ProdutosDto->listaProdutos();
            foreach ($produtos as $produto) :
        ?>

                <tr>
                    <td><?=$produto["id"]?></td>
                    <td><?=$produto["nome"]?></td>
                    <td><?=$produto["preco"]?></td>
                    <td><?=$produto["descricao"]?></td>
                    <td><?=$produto["cat_nome"]?></td>
                    <td><?=$produto["usado"]?></td>
                    <td>
                        <a class="btn btn-danger" href="produto-update-form.php">Update</a>
                        
                        <form action="produto-delete-confirma.php" method="post">
                            <input type="hidden" name="id" value="<?=$produto['id']?>">
                            <button class="btn btn-danger">Deletar</button>
                        
                        </form>
                        
                    </td>
                </tr>
        <?php
            endforeach
        ?>
    </table>

