<?php

class UserName{ 
 // Defining features
   public $name;

 // Defining construct
  function __construct($name)
    {
 $this->name = $name;
    }

 // Printing owner function
  function printName()
    {
      echo "<br>";
      echo "<br>";
      print ($this->name); 
      echo "<br>";
      echo "<br>";

    }
 }

 class Userseudo extends UserName{
    // Defining features
    private $email;

    function __construct($name, $email)
    {
      parent::__construct($name); // Using key word or method Called parent, for take attribute from the first class called username
      $this->email = $email;
    }

    // Printing owner function
  function printNameandEmail()
  {
   echo "<br>";
   echo "<br>";
   print ($this->name); 
   echo "<br>";
   echo "<br>";
   print ($this->email);
   echo "<br>";
   echo "<br>";
  }
}

 // instantiating object
 $nameObject = new UserName("TONNY");

 // Print1
  $nameObject->printName(); // out: TONNY
  var_dump($nameObject);
  echo "<br>";
  echo "var_dump => provides information about the size and data type of the variable and, in the case of arrays and objects, of the elements that compose it.";
  //var_dump provides information about the size and data type of the variable and, 
  //in the case of arrays and objects, of the elements that compose it.
  echo "<br>";

  // instantiating object for second time
 $nameObject2 = new UserName("HULK");
 
 // Print2
  $nameObject2->printName(); 
  var_dump($nameObject2);
  echo "<br>";

  // instantiating object from son Class
 $nameObject3 = new Userseudo("CAP", "try@msm.com");

 // Print3
  $nameObject3->printNameandEmail(); 
  var_dump($nameObject3);
  echo "<br>";

  
?>