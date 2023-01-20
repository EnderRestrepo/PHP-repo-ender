
<?php

# New Class
Class NewClass {
    // Properties and methods goes here
public $info = "This is some info";
// echo "Writing some words";
}

$object01 = new NewClass;
$object02 = new NewClass;
print ($object01->info);
echo "<br>";
echo "<br>";
print $object01->info;
echo "<br>";
echo "<br>";
echo $object01->info . "<br>";
echo "<br>";
echo "Printing the second object";
echo "<br>";
print $object02->info;
echo "<br>";
echo "<br>";

// var_dump($object01);

// https://www.youtube.com/watch?v=X6xY4Ouydas&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh&index=4

Class Person {
private $first = "Ender"; 
public $last = "Restrepo";
private $age = "28";
protected $first2 = "Enrique";

public function owner() {
    $a = $this->first;
    return $a;
    }
}

$object03 = new Person;
print $object03->last;
echo "<br>";
echo "<br>";

Class Person2 extends Person {
    public function owner () {
        $a = $this->first2;
        return $a;
    }
}

$object04 = new Person2;
print $object04->last;
echo "<br>";
echo "<br>";
echo $object04->owner();
echo "<br>";
echo "<br>";


Class Person3 {
    //PROPERTIES
    public $name; 
    public $EyeColor;
    public $age;

    //METHODS
   public function setName($name) {
       $this->name = $name;
   }  
}
$object05 = new Person3;
$object05->setName('Setting a new name');
print $object05->name;
echo "<br>";
echo "<br>";

Class Pet { 
    public function owner() {
        $b = "HI THERE!";
        return $b;
    }
}

# This is a example for a class vegetables and the construct
class Verdura {
    var $comestible;
    var $color;
     function __construct($comestible, $color){
        $this->comestible = $comestible;
        $this->color = $color;
    }
     public function be_eatable(){
        return $this->comestible;
    }
     function which_color(){
    return $this->color;
    }
}
$object06 = new Verdura('This vegetable is eatable ', 'green');
echo $object06->be_eatable();
echo 'and is the color ' . $object06->which_color() . "<br>";

// An example how can I use the function isset (Ejemplo con variable definida por medio de funcion Isset)
$variable = 'valor';
if (isset($variable)) 
	{
    echo "Variable definida!!! <br>";
	}else
		{
		echo "Variable NO definida!!! <br>";
		}
        $variable = 'valor';

if (isset($variable02)) 
	{
    echo "Variable definida!!! <br>";
	}else
		{
		echo "Variable NO definida!!!  <br>";
		}

echo "Until here I have istanted Class1 <br><br>";
?>