<?php 
    require_once "Produto.php";
    class Carrinho{
        public $valortotal;
        public $produtos = array();

        public function __construct(){
            $this->valortotal = 0;
        }

        public function addproduto($produto){
           array_push($this->produtos, $produto);
        }

        public function removeproduto($produto){
            unset($produtos[$produto]);
        }

        public function calcularvalortotal(){
            foreach ($this->produtos as $produto) {
                $this->valortotal = $this->valortotal + $produto->getpreco();
        }
        }

        public function getvalortotal(){
            return $this->valortotal;
        }

     }
?>