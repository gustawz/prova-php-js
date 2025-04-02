<?php
class Carro {
    private $marca;
    private $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($novaMarca) {
        $this->marca = $novaMarca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($novoModelo) {
        $this->modelo = $novoModelo;
    }

    public function acelerar() {
        echo "Acelerando...<br>";
    }
}
?>

