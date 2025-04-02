<?php
require_once 'Esportivo.php';
require_once 'Popular.php';

$c1 = new Esportivo("Ferrari", "F8");
$c2 = new Popular("Fiat", "Uno");

echo "Carro: " . $c1->getMarca() . " " . $c1->getModelo() . "<br>";
echo "Acelerando rápido...<br>";

echo "Carro: " . $c2->getMarca() . " " . $c2->getModelo() . "<br>";
echo "Acelerando devagar...<br>";

$c1->setMarca("Lamborghini");
$c1->setModelo("Huracán");

echo "Novo carro esportivo: " . $c1->getMarca() . " " . $c1->getModelo() . "<br>";
?>
