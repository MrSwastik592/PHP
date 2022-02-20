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

   <h2>Scalar Type</h2>
   <?php
   $a = 11;
   $b = 11.11;
   $c = 'Eleven';
   $d = true;

   echo "<h3>Integer</h3>";
   var_dump($a);
   print("<br>");
   echo "<h3>Float</h3>";
   var_dump($b);
   print("<br>");
   echo "<h3>String</h3>";
   var_dump($c);
   print("<br>");
   echo "<h3>Boolean</h3>";
   var_dump($d);
   print("<br>");
   ?>

   <h2>Compound Type</h2>
   <h3>Array</h3>
   <?php
   $intArray = [10, 30, 50];
   print_r($intArray);
   ?>

   <h3>Object</h3>
   <?php
   class std
   {
      function car()
      {
         echo "City Honda";
      }
   }
   $obj1 = new std;
   $obj1->car();
   ?>

   <h2>Special Type</h2>
   <h3>Resource</h3>
   <?php
   $f1 = fopen("abc.txt", "r");
   var_dump($f1);
   echo "<br>";
   echo "<br>";

   $link = mysqli_connect("localhost", "root", "");
   var_dump($link);

   ?>

   <h3>Null</h3>
   <?php
   $x = "Hello";
   $x = null;
   var_dump($x);
   ?>


</body>

</html>