<?php
include "Carro.php"; // Inclui a classe Carro antes de usá-la


class Popular extends Carro {// Herda de Carro
    public function acelerar() {//metodo
        echo "Acelerando devagar...\n";
    }
}
?>
