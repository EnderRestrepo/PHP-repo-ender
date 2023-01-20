<?php
$nombre = "ENDER";
echo "mi nombre es " . $nombre . '<br>';

echo date("d.m.Y H:i:s") . '// ' . time() . " => en este caso la fecha está correcta pero la hora no <br> <br>";


//usando esta funcion puedo mostrar la hora actualizada
date_default_timezone_set('America/Bogota');
$DateAndTime = date('d-m-Y h:i:s a', time());  
echo "The current date and time are $DateAndTime." .  " => gracias a la funcion: date_default_timezone_set('America/Bogota') puedo 
en este caso ver la fecha y hora correctas <br> <br>";

// Operadores basicos matematicos
$numero1 = 6;
$numero2 = 2;
$numero3 = 6.5; // los numeros flotantes se escriben con el (.)
$numero4 = 2.3; 

echo "la suma de $numero1 + $numero2 es: " . ($numero1 + $numero2) . '<br>';
echo "la resta de $numero1 - $numero2 es: " . ($numero1 - $numero2) . '<br>';
echo "la division de $numero1 / $numero2 es: " . ($numero1 / $numero2) . '<br>';
echo "la multiplicacion de $numero1 x $numero2 es: " . ($numero1 * $numero2) . '<br>';
echo "la Exponenciación de $numero1 a la $numero2 es: " . ($numero1 ** $numero2) . '<br>';
echo "la raiz cuadrada de 9 es: " . sqrt(9) . '<br>';
echo "la suma de $numero3 + $numero4, los cuales son flotantes seria: " . ($numero3 + $numero4) . '<br><br>';

// operadores para ++Preincremento, --Predecremento y Postincremento++	
$numero = 0;
$numero1 = 0;
$resultado = ++$numero;
echo "Resultado: " . $resultado . '<br>';
echo "la variable quedo en: " . $numero  . ' -> Esto es ++Preincremento' . '<br>';
$resultado2 = --$numero;
echo "Resultado: " . $resultado2 . '<br>';
echo "la variable quedo en: " . $numero  . ' -> Esto es --Predecremento' . '<br>';
$resultado3 = $numero1++;
echo "Resultado: " . $resultado3 . '<br>';
echo "la variable quedo en: " . $numero1 . ' -> Esto es Postincremento++' . '<br>';

// suoerglobales _GET Y _POST, USANDO EL ENLACE: http://localhost:8888/Enderphp/Prueba3.php?forename=John&surname=Doe
$variable1 = $_GET['forename'];
$variable2 = $_GET['surname'];
echo "Hello " . $variable1 . " " . $variable2 . "!";

?>