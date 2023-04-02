<?php 

class Veiculo{
    protected $marca;
    protected $modelo;
    protected $ano;
    protected $preco;

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getInfo() {
        return "Marca: " . $this->marca . "<br>" .
               "Modelo: " . $this->modelo . "<br>" .
               "Ano: " . $this->ano . "<br>" .
               "Preço: R$" . number_format($this->preco, 2, ',', '.');
    }
}

?> 