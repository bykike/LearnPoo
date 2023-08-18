<?php

// Definimos la clase
class Coche {
        // Atributos
        public $modelo;
        public $color;
        public $velocidad;

    // Constructor
    public function __construct($modelo, $color, $velocidad = 0)
    {
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
    }

    //Métodos
    public function getColor(){
    // Devolvemos un atributo
        return $this->color;
    }

    public function setColor($color){
    //Le damos un valor a un atributo
        $this->color = $color;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    public function mostrarInfo(){

        // Llamamos a otros métodos
        $info = "<h1>Información del coche:</h1>";
        $info.= "Modelo: ".$this->modelo;
        $info.= "<br/> Color: ".$this->getColor();
        $info.= "<br/> Velocidad: ".$this->getVelocidad();

        return $info;
    }
}

?>

<!DOCTYPE HTML>

<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>El constructor</title>
    </head>
    <body>

    <?php
        // Creamos el objeto / Instanciamos la clase y le pasamos los parámetros del constructor
        $coche = new Coche("BMW VICTOR", "ROJO", 100);


        // Mostramos la información del primer coche
        echo $coche->mostrarInfo();

        $coche2 = new Coche("SEAT 500", "VERDE");

        // Mostramos la información del segundo coche
        echo $coche2->mostrarInfo();
        var_dump($coche2);
    ?>

    </body>
</html>
