<?php
include "Carro.php"; // ta linkando, achqi que era o require mas nao lembrava a função

// Classe Esportivo herdando de Carro
class Esportivo extends Carro {
    public function acelerar() {
        echo "Acelerando rápido...\n";
    }
}
?>
