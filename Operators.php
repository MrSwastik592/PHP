<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>

   <!-- <h2>Operators</h2>
   <h3>Arithmetic Operators</h3>
   <?php
   $x = 10;
   $y = 5;

   echo $x + $y;
   echo "<br>";
   echo $x - $y;
   echo "<br>";
   echo $x * $y;
   echo "<br>";
   echo $x / $y;
   echo "<br>";
   echo $x % $y;
   echo "<br>";
   ?>

   <h3>Assignment Operators</h3>
   <?php
   $x = 10;
   echo "x = $x";
   echo " <br>";

   $x += 10;
   echo "x += 10  = $x";
   echo " <br>";

   $x -= 10;
   echo "x -= 10  = $x";
   echo " <br>";

   $x *= 10;
   echo "x *= 10  = $x";
   echo " <br>";

   $x /= 10;
   echo "x /= 10  = $x";
   echo " <br>";

   $x %= 10;
   echo "x %= 10  = $x";
   echo " <br>";
   ?>

   <h3>Comparison Operators</h3>
   <?php
   $x = 10;
   $y = 20;
   $z = '10';

   echo "var_dump($x == $y) = ";
   var_dump($x == $y);
   echo " <br>";

   echo "var_dump($x != $y) = ";
   var_dump($x != $y);
   echo " <br>";

   echo "var_dump($x <> $y) = ";
   var_dump($x <> $y);
   echo " <br>";

   echo "var_dump($x < $y) = ";
   var_dump($x < $y);
   echo " <br>";

   echo "var_dump($x > $y) = ";
   var_dump($x > $y);
   echo " <br>";

   echo "var_dump($x <= $y) = ";
   var_dump($x <= $y);
   echo " <br>";

   echo "var_dump($x >= $y) = ";
   var_dump($x >= $y);
   echo " <br>";

   echo "var_dump($x === $z) = ";
   var_dump($x === $z);
   echo " <br>";

   echo "var_dump($x !== $z) = ";
   var_dump($x !== $z);
   echo " <br>";
   ?>

   <h3>Incre Decre Operators</h3>
   <?php
   $x = 10;
   echo "x = $x";
   echo "<br>";

   $x = 10;
   echo "++x = First Increments Then Prints ";
   echo "<br>";
   echo "++x = ", ++$x;
   echo " <br>";

   $x = 10;
   echo "x++ = First Prints Then Increments";
   echo "<br>";
   echo "x++ = ", $x++;
   echo " <br>";

   $x = 10;
   echo "--x = First Decrements Then Prints ";
   echo "<br>";
   echo "--x = ", --$x;
   echo " <br>";

   $x = 10;
   echo "x-- = First Prints Then Decrements ";
   echo "<br>";
   echo "x-- = ", $x--;
   echo " <br>";
   ?>

   <h3>Logical Operators</h3>
   <?php

   $x = 10;
   $y = 20;

   if ($x == 10 and $y == 20) {
      echo "True <br>";
   } else echo "False <br>";

   if ($x == 10 and $y == 0) {
      echo "True <br>";
   } else echo "False <br>";

   if ($x == 10 or $y == 0) {
      echo "True <br>";
   } else echo "False <br>";

   if ($x == 0 or $y == 00) {
      echo "True <br>";
   } else echo "False <br>";

   if ($x == 10 xor $y == 20) {
      echo "True <br>";
   } else echo "False <br>";

   if ($x == 0 xor $y == 20) {
      echo "True <br>";
   } else echo "False <br>";

   ?> -->

   <h3>String Operators</h3>
   <?php
   $x = "Hello";
   $y = "World";

   echo $x . $y;
   echo "<br>";
   echo $x .= "PHP";
   ?>

   <h3>Array Operators</h3>
   <?php
   $a1 = array("x1" => "c", "y1" => "c++");
   $a2 = array("x2" => "java", "y2" => "python");

   var_dump($a1 + $a2);
   echo "<br>";
   var_dump($a1 == $a2);
   echo "<br>";
   var_dump($a1 != $a2);
   echo "<br>";
   // Returns true if both has same Key-value pair in the same order and of same type.
   var_dump($a1 === $a2);
   echo "<br>";
   var_dump($a1 <> $a2);
   echo "<br>";
   var_dump($a1 !== $a2);
   echo "<br>";
   ?>
   <h3>Conditional Or Ternary Operators</h3>
   <?php
   $a = 10;
   echo "(Condition) ? If True, Execute this : Else Execute this";
   echo "<br>";
   echo ($a > 5) ? "$a is Greater than 5" : "$a is smaller than 5";
   ?>

   <h3>Bitwise Operator</h3>
   <?php
   echo "AND Operation is a Multiplication of Bits";
   echo "<br>";
   echo "OR Operation is a Addition of Bits";
   echo "<br>";
   echo "XOR Operation is a Same Bits at same pos results [0], Similarly diff bits results [1]";
   echo "<br>";
   echo "NOT Operation is a Reverse Bit. [1]=>[0] and [0]=>[1]";
   echo "<br>";
   echo "<br>";


   echo "Bit Left Shifting";
   echo "<br>";
   $a = 10;
   $b = 1;
   echo "Bit 0 is added [b times] to the End of [a number]";

   echo "<br>";
   echo ("a << b <br>");
   echo ("$a << $b = ");
   echo $a << $b;
   echo "<br>";
   echo "<br>";

   echo "Bit Left Shifting";
   echo "<br>";
   echo "Bit 0 is added [b times] to the Start of [a number] and End Bit is Removed";

   echo "<br>";
   echo ("a >> b <br>");
   echo ("$a >> $b = ");
   echo $a >> $b;
   echo "<br>";
   ?>
</body>

</html>