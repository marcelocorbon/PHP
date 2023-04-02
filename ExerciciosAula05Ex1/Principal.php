<?php 

    require_once "Pedido.php";

    $Sephora = new Loja();
    
    $Marcelo = new Cliente("Marcelo Corbon", "Rua Antonio Caporali", "marcelocorbon.-@hotmail.com");
   
    $iphone = new Produto("Iphone 12", "Celular da marca Iphone do modelo 12", 5000, 40);
    $blush = new Produto("Blush Rare Beauty", "Blush Cremoso da Selena Gomez", 160, 30);

    $carrinho1 = new Carrinho();

    $carrinho1->addproduto($iphone);
    $carrinho1->addproduto($blush);

    $carrinho1->calcularvalortotal();

    $pedido1 = new Pedido($Marcelo, $carrinho1);

    echo $pedido1->carrinho->getvalortotal;

    
   
?>



