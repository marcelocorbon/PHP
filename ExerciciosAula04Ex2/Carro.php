<?php 
    require_once 'Veiculo.php';

    class Carro extends Veiculo{

        public function __construct($marca, $modelo, $ano, $preco)
        {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->preco = $preco;
        }
    }

?>