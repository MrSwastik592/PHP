<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
   // header("refresh: 10");
   ?>

   <h2>Type Juggling</h2>
   <?php
   $var1 = 10; // Var1 is Int
   $var2 = '20'; // Var2 is String

   $var3 = $var1 + $var2; // Var3 is Int
   print($var3);
   echo "<br>";

   $var1 = $var1 + 1.3; // Var1 is Float
   print($var1);
   echo "<br>";

   $var1 = 5 * "10 small Birds"; // Var1 is Integer
   print($var1);
   echo "<br>";

   $var1 = 5 + "10 small Puppies"; // Var1 is integer
   print($var1);
   echo "<br>";
   ?>

   <h2>Type Casting</h2>
   <?php
   $var1 = 10; // Var1 is Int
   $var2 = (float)$var1;  // Var2 is Float
   $var3 = (string)$var1;  // Var3 is String
   $var4 = (bool)$var1;    // Var4 is Boolean

   var_dump($var1);
   echo "<br>";
   var_dump($var2);
   echo "<br>";
   var_dump($var3);
   echo "<br>";
   var_dump($var4);
   echo "<br>";

   $var5 = '10';
   echo gettype($var5);
   echo "<br>";
   settype($var5, 'int');
   echo gettype($var5);
   ?>
</body>

</html>