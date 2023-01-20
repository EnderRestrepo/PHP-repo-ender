<?php

// link video: https://www.youtube.com/watch?v=sOssvWcpyCY
class Seller
{
    // This are properties 
    public $nombre;
    public $edad;
    public $pais;

    // this is the construct method for Seller class

public function __construct ($nombre, $edad, $pais)
    {
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->pais = $pais;
    }
}
$vendedor01 = new Seller('Maicol', '25', 'Peru');
$vendedor02 = new Seller('Mike', '22', 'Brasil');

echo $vendedor01->nombre . '</br>';         // this is one way for print into screen
print ($vendedor01->nombre) . '</br>';      // this is another way for print into screen
echo $vendedor02->nombre . '</br>';

echo "Hi $vendedor01->nombre, you have $vendedor01->edad years old and you live in $vendedor01->pais</br>";
echo "Hi $vendedor02->nombre, you have $vendedor02->edad years old and you live in $vendedor02->pais</br>";

// REVISAR PARENT!!!

class BaseClass {
    function __construct() {
        print "En el constructor BaseClass\n";
    }
 }
 
 class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "En el constructor SubClass\n";
    }
 }
 
 class OtherSubClass extends BaseClass {
     // heredando el constructor BaseClass
 }
 
 // En el constructor BaseClass
 $obj = new BaseClass();
 
 // En el constructor BaseClass
 // En el constructor SubClass
 $obj = new SubClass();
 
 // In BaseClass constructor
 $obj = new OtherSubClass();
 

 // operadores combinados
 $a = 3;
$a += 5; // establece $a en 8, como si se hubiera dicho: $a = $a + 5;
$b = "Hola ";
$b .= "ahí!"; // establece $b en "Hola ahí!", al igual que $b = $b . "ahí!";

?>