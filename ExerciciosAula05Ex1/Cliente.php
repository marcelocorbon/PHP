<?php 
    require_once "Cliente.php";
    class Cliente{

        public $nome;
        public $endereco;
        public $email;
        public $carrinho;

        public function __construct($nome, $endereco, $email){
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->email = $email;
            $this->carrinho = new Carrinho();

        }

    }


?>