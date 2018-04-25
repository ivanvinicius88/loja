<?php 
    class BancoDeDados{

        private $conn;

        public function __construct($host, $user, $pass, $base){

            $this->conn = mysqli_connect($host, $user, $pass, $base);
        }

        public function getConexao(){

            return $this->conn;
        }


    }