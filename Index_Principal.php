<?php
include '/Applications/MAMP/htdocs/Ender_learning_php/Classes/Class1.php';
?>

<?php
$test = "THIS IS A TEST FOR SOME COMMANDS ";
$name_1 = "LORD ENDER,";
$space = ("&nbsp"."&nbsp"."&nbsp"."&nbsp");
$titulo = "PRACTICING PHP WITH LUCAS MOY ";
define ("pi", 3.1416);

// KINDS OF ARRAY https://www.youtube.com/watch?v=-yI9t47_PzI
$varibleindexada = array (1,2, 7, "hola", $titulo);
$arrayAsociativo = array ('nombre'=>'Marines', 'Color'=>'Morado');

//EXAMPLE FOR STDCLASS
$TestingstdClass = new stdClass();
$TestingstdClass-> name1 = "<br> ENDER IS TESTING STC <br>";
$TestingstdClass-> name2 = "ENDER KEEP TESTING STC <br>";
$TestingstdClass-> AGE = "THE AGE IS " . 36 ."<br>";
echo $TestingstdClass -> name1;
echo $TestingstdClass -> name2;
echo $TestingstdClass -> AGE;
echo '\'Hello DEVELOPER!\' <br><br>'; // masking quotation marks or quotes (Enmascarando comillas)

// Printing arrays and doing some tests;
$user = [];
$user['first_name'] = "Pedro";
$user['last_name'] = "Stark";
$user['email'] = "pedro.stark@msm.com";
$user['password'] = "empty";
echo 'The person name is: ' . $user['first_name'] . ' ' . $user['last_name'] . '<br>';
// var_dump($user);

if (isset($user['password'])){
    $user['password'] = 111;
}
else {
    $user['password'] = null;
}

echo $user['first_name'] . ' / ';
echo $user['last_name']. ' / ';
echo $user['password']. ' / ';

$author1 = "John Doe";
$author2 = "Max Musterman";
echo "<h1>Hello DEVELOPER02!==></h1> </p>This dynamic web page was created by $author1 and $author2.</p>";

// Concatenate to extend a variable
$example = 'Nice to ';
$example .= 'meet you.<br>';
echo $example;

// Instantiating some classes
$person01 = new Person2 ();
echo $person01 -> owner () . " / ";

$person02 = new Person ();
echo $person02->owner()  . " / ";

$person03 = new Person3();
$person03->setName ("Marcelo ");
echo $person03->name  . " / ";

$person04 = new Person3();
$person04->setName ("Carlos");
echo $person04->name  . "<br> <br>";
?>

<HTML>
<HEAD>
    <?php
    # Esto es una prueba
    # Comando echo para imprimir en pantalla
    echo $test .  "<br>";
    #  echo "<br>" para salto de linea. 
    echo "<br>";
    echo "MY NAME IS: " . $name_1 . " THE BEST PHP DEVELOPER";
    echo "<br>";
    # "&nbsp" sirve para dar espacio
    // tanto # como // sirve para comentar, /*  */ se usa para comentar parte del codigo
    // \n avance de línea
    echo "&nbsp"."&nbsp"."\n\n\n\n";
    echo pi . "<br>";
    echo pi / 2 . "<br>";
    echo pi / pi . "<br>";
    echo "<br>";
    echo "" . "\n";
    echo $space;
    echo $space;
    echo " 6 + 4 = " . (6+4); "<br>";
    echo "<br>";
    $edad = 20;
    echo $edad;
    echo "<br>";
    echo "<br>";
    if ($edad>10)
    {echo "MI EDAD ES MAYOR A 10";}
    else
    {echo "MI EDAD ES MENOR A 10";}
    echo "<br>";
    $edad = ($edad+10);
    if ($edad>31)
    {echo "MI EDAD ES MAYOR A 10";}
    else
    {echo "MI EDAD ES MENOR A 31";}
    for ($edad; $edad < 50 ; $edad+1)
    {echo ($edad+1);
        $edad = ($edad+1);
        echo "<br>";}
    echo "<br>";
    echo $edad;
    $edad++; // suma 1 a edad
    echo "<br>";
    echo $edad;
    echo "<br>";


//La función PHP preg_replace() sustituye caracteres y cadenas en una cadena de texto tras una búsqueda realizada mediante expresiones regulares.
//Es muy últil a la hora de quitar o eliminar espacios en blanco, acentos, caracteres especiales, saltos de línea y para crear URLs amigables.
// Creo una cadena con varias palabras.
// Muestro por pantalla con la función echo la misma cadena pero sustituyendo las palabras que sean numéricas y con 2 caracteres de longitud.
$cadena = 'uno dos 34 tres cuatro cinco seis siete ocho 89 nueve diez';
echo  preg_replace('/[0-9]{2}/', 'SUSTITUIDO', $cadena);

// funcion trim
$str = " Hello World! ";
echo "Without trim: " . $str;
echo "<br>";
echo "With trim: " . trim($str);


// probar
   $data = array(
      "user" => array(
         "name" => "Bob Smith",
         "age"  => 47,
         "sex"  => "M",
         "dob"  => "5/12/1956"
      ),
      "pastimes" => array("golf", "opera", "poker", "rap"),
      "children" => array(
         "bobby" => array("age"=>12, "sex"=>"M"),
         "sally" => array("age"=>8, "sex"=>"F")
      ),
      "CEO"
   );
   echo http_build_query($data, "flags_");


     // \r	retorno de carro, \t tabulador horizontal, \v tabulador vertical
     // \\	para imprimir barra invertida, para imprimir signo de dolar, \"	para imprimir comillas dobles
     /**
      * hola 
      */
    echo $titulo . "SI ESTOY" . "\r\r\r\r" . "\t". $titulo;
    $autorizado = true;
    if ($autorizado == true) {
        print "<p>Usted esta autorizado.</p>\n";
    }
    $autorizado = false;
        if ($autorizado == false) {
        print "<p>Usted no esta autorizado.</p>\n";
    }
    echo "<br>";
    echo $varibleindexada [4];
    echo $arrayAsociativo ['nombre'];
    echo "<br>";
    echo "\\\v\$\"\v";
    echo "\v";
    ?>
    <br/>
   <?php
   echo "<br>";
   echo "\v";
   echo "\t\t" . $titulo; 

   ?>
    <br/>
</HEAD>
<title><?php echo $titulo; ?><title>
<title><?=$titulo?><title> <!-- estoy usando comentario html 5, esta linea dentro de php muestrsa una 
                                forma mas facil de imprimir, quito php y el ; y pongo el = -->

<br/>
<BODY>
<br/>
Instrucciones HTML
<br/>
<br/>
</BODY>
</HTML>

