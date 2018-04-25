<?php

    class ProdutosDto{

        private $database;
        
        public function __construct($conexa){
            $this->database = $conexao;
        }


        function listaProdutos() {
            $produtos = array();

            $sql= "select p.*, c.nome as cat_nome from produtos as p inner join categorias as c on c.id = p.categoria_id";

            $resultado = mysqli_query($this->database->getConexao(),$sql);

            while ($produto = mysqli_fetch_assoc($resultado)) {
                array_push($produtos, $produto);
            }

            return $produtos;
        }


        function alteraProduto( $id, $nome, $preco, $descricao, $categoria_id) {
            $query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao='{$descricao}', categoria_id={$categoria_id} where id = {$id}";
            return mysqli_query($this->database->getConexao(), $query);
        }



        function buscaProduto($id) {
            $query = "select p.*, 
                        c.nome as categoria_nome 
                        from produtos as p
                        inner join categorias as c
                        on c.id = p.categoria_id
                        where p.id = {$id}";
            $resultado = mysqli_query($this->database->getConexao(), $query);
            return mysqli_fetch_assoc($resultado);
        }




        function removeProduto($id) {
            $query = "delete from produtos where id = {$id}";
            return mysqli_query($this->database->getConexao(), $query);
        }

    }