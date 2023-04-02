<?php 
   require_once "Pedido.php";

   class Loja{
   public $produto;
   public $carrinho;
   public $pedido;
   public $cliente;

    public function __construct(Produto $produto, Carrinho $carrinho, Pedido $pedido, Cliente $cliente){
        $this->produto = $produto;
        $this->carrinho = $carrinho;
        $this->pedido = $pedido;
        $this->cliente = $cliente;
   }



   }
?>