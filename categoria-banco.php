<?php


    class CategoriaDto{

        private $database;

    }

    function __construct($conexao){
        $this->database = $conexao;
    
    }

    function listaCategorias(){
        $categoria = array();
        $query="SELECT * FROM categorias";
        $resultado = mysqli_query($this->database->getConexao(),$query);
        while($categoria = mysqli_fetch_assoc($resultado);){
            array_push($categorias,$categoria);

        }
        return $categorias;

    }

?>