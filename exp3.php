<html>

<body>
   <?php
   // While loop
   $x = 1;
   while ($x <= 5) {
      echo "<br>The number is: $x";
      $x++;
   }
   echo "<br>";
   echo "<br>";
   // do while loop
   $x = 1;
   do {
      echo "<br>The number is: $x";
      $x++;
   } while ($x <= 5);
   echo "<br>";
   echo "<br>";
   // for loop
   for ($x = 0; $x <= 10; $x++) {
      echo "<br>The number is: $x";
   }
   echo "<br>";
   echo "<br>";
   // foreach loop
   $colors = array("red", "green", "blue", "yellow");
   foreach ($colors as $value) {
      echo "<br>$value";
   }
   ?>
</body>

</html>