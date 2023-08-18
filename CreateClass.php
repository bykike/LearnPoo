<?php

// Ejemplos 1

class Cohete {
    public $color;
    public $potencia;
    public $marca;

    // El método getColor() nos permite devolver el color del objeto instanciado. 
    // La variable $this se puede utilizar en cualquier método, y hace referencia 
    // al objeto que hemos instanciado, en este caso $miCohete. Podemos obtener el mismo 
    // resultado que antes para mostrar el color del coche pero ahora utilizando un método 
    // para mostrar la propiedad color
    public function getColor()
    {
        return $this->color;
    }

}

$miCohete = new Cohete();
$miCohete->color = 'rojo';
$miCohete->potencia = 120;
$miCohete->marca = 'audi';

echo 'Color del Cohete: ' . $miCohete->color;
echo '<br/><br/>';

echo 'Color del Cohete: ' . $miCohete->getColor();
echo '<br/><br/>';


// Ejemplos 2

class Employee
{
  private $first_name;
  private $last_name;
  private $age;
  
  public function __construct($first_name, $last_name, $age)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->age = $age;
  }
 
  public function getFirstName()
  {
    return $this->first_name;
  }
 
  public function getLastName()
  {
    return $this->last_name;
  }
 
  public function getAge()
  {
    return $this->age;
  }
}


$objEmployee = new Employee('Bob', 'Smith', 30);
 
echo $objEmployee->getFirstName(); // print 'Bob'
echo '<br/><br/>';
echo $objEmployee->getLastName(); // prints 'Smith'
echo '<br/><br/>';
echo $objEmployee->getAge(); // prints '30'


?>
