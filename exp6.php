<html>

<body>
   <?php
   function simple()
   {
      echo "This is a simple function";
   }
   echo ('function simple()
   { <br>
      echo "This is a simple function"; <br>
   }' . '<br>');
   echo  "simple();" . "<br>";
   simple();

   echo "<br>";
   echo "<br>";


   function parameter($name)
   {
      echo "This is a Parameter function";
      echo "<br>";
      echo "The name is  $name";
      echo "<br>";
   }
   echo ('function parameter(name)
      { <br>
         echo "This is a Parameter function"; <br>
         echo "The name is " $name; <br>
      }' . '<br>');

   echo  "parameter('Swastik');" . "<br>";
   parameter("Swastik");

   ?>
</body>

</html>