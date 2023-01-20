<?php

// probando funcion reflection
// https://programador-php.net/reflection-en-php-7/
class User{
public $name = 'John';
protected $ssn = 'AAA-GG-SSSS';
private $salary = 4200.00;
}
$user = new User();
echo $user->name = 'Marc'; // Marc
//echo $user->ssn = 'BBB-GG-SSSS';
// Uncaught Error: Cannot access protected property User::$ssn
//echo $user->salary = 5600.00;
// Uncaught Error: Cannot access private property User::$salary
var_dump($user);
//object(User)[1]
// public 'name' => string 'Marc' (length=4)
// protected 'ssn' => string 'AAA-GG-SSSS' (length=11)
// private 'salary' => float 4200

$user = new User();
$reflector = new ReflectionClass('User');
foreach ($reflector->getProperties() as $prop) {
$prop->setAccessible(true);
if ($prop->getName() == 'name') $prop->setValue($user, 'Alice');
if ($prop->getName() == 'ssn') $prop->setValue($user, 'CCC-GG-SSSS');
if ($prop->getName() == 'salary') $prop->setValue($user, 2600.00);
}
var_dump($user);
//object(User)[1]
// public 'name' => string 'Alice' (length=5)
// protected 'ssn' => string 'CCC-GG-SSSS' (length=11)
// private 'salary' => float 2600


class Calc
{
/**
* @param $x The number x
* @param $y The number y
* @return mixed The number z
*/
public function sum($x, $y)
{
return $x + $y;
}
}
$calc = new Calc();
$reflector = new ReflectionClass('Calc');
$comment = $reflector->getMethod('sum')->getDocComment();
echo $comment;


// testing function strcspn - You can also use the function strcspn() for checking a file name whether it contains any invalid characters.
$postcode = 'CF34 9LH';
$postprefix = substr($postcode, 0, strcspn($postcode, '0123456789'));
echo "The prefix is " . $postprefix; // in this case the prefix is CF

//Both strcspn() and strspn() are case-sensitive. 
$postcode2 = strcspn('12345aAbBcCdD', 'ABCD');
echo "The length is " . $postcode2; // in this case the length is 9 because strcspn() is case-sensitive. 

// testing function strspn -  is called to get the length of the substring that contains numbers in the given mask 0123456789.
$p = strspn('12345abcde', '0123456789');
echo "The length is " . $p; // In this case the length is 4

?>