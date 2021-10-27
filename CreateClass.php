<?php

class Cohete {
    public $color;
    public $potencia;
    public $marca;
}

$miCohete = new Cohete();
$miCohete->color = 'rojo';
$miCohete->potencia = 120;
$miCohete->marca = 'audi';

echo 'Color del Cohete: ' . $miCohete->color;

?>
