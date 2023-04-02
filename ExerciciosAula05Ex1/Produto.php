<?php 
    class Produto{
        public $nome;
        public $descr;
        public $preco;
        public $qtd;

        public function __construct($nome, $descr, $preco, $qtd){
            $this->nome = $nome;
            $this->descr = $descr;
            $this->preco = $preco;
            $this->qtd = $qtd;
        }

        public function getnome(){
            return $this->nome;
        }

        public function getdescr(){
            return $this->descr;
        }

        public function getpreco(){
            return $this->preco;
        }

        public function getqtd(){
            return $this->qtd;
        }

        public function getinfo(){
            return "Nome: " + $this->nome + "<br>" + "Descrição: " + $this->descr + "<br>" + "Preço: "
            + $this->preco + "<br>" + "Quantidade: " + $this->qtd;
        }
    }
    
   




?>