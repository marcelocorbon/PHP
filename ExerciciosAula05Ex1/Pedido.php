<?php
    require_once "Carrinho.php";
    require_once "Cliente.php";
    
    class Pedido{

        public $carrinho;
        public $cliente;

        public function __construct($cliente, $carrinho){
            $this->cliente = $cliente;
            $this->carrinho = $carrinho;
        }   
     }

?>