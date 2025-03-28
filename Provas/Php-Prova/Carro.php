<?php
// Classe base Carro 
class Carro {
    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function acelerar() {
        echo "Acelerando...\n";
    }
}
?>
