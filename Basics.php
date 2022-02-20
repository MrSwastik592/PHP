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
   <h3>Hello PHP</h3>
   <?php
   echo " Echo ";
   echo "<br>";
   echo ("swastik");
   echo "<br>";
   echo "<br>";
   ?>
   <?php
   $var1 = 34;
   $var2 = 46;
   echo $var1;
   echo "<br>";
   echo $var2;
   echo "<br>";
   echo $var1 + $var2;
   echo "<br>";
   echo "<br>";
   ?>

   <?php
   $var1 = 's';
   $$var1 = 5;

   print($var1);
   echo "<br>";
   print($$var1);
   echo "<br>";
   print($s);
   echo "<br>";
   echo "<br>";
   ?>

   Hello, today is <?php echo date('d M Y'); ?>

   <h3>Variable Scope</h3>
   <?php
   $local_Var = 2;
   function print_local()
   {
      global $local_Var;
      print($local_Var);
   }
   print_local();
   ?>

   <h3>Functions </h3>
   <?php
   function sum($num1, $num2)
   {
      $add = $num1 + $num2;
      print($add);
   }
   sum(20, 40);
   echo "<br>";
   echo "<br>";

   // $x = 10;
   // $y = 2;
   // echo $x >= $y;
   // echo "<br>";
   // echo $x and $y;
   // echo "<br>";
   // echo $x or $y;
   // echo "<br>";
   // echo $x ** $y;
   ?>

</body>

</html>