<?php
include "Esportivo.php";//link
include "Popular.php";//link

// Criando instâncias
$c1 = new Esportivo("Ferrari", "F8");
$c2 = new Popular("Fiat", "Uno");

$c1->acelerar(); // "Acelerando rápido"
$c2->acelerar(); // "Acelerando devagar"
?>
