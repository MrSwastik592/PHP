<html>

<body>
   <?php
   // if statement
   $x = 5;
   $y = 8;
   if ($x < $y) {
      echo ("<br>The value of x is less than y");
   }

   // if else statement
   $x = 10;
   if ($x < $y) {
      echo ("<br>The value of x is less than y");
   } else {
      echo ("<br>The value of x is not less than y");
   }

   // switch statement
   $favcolor = "red";
   switch ($favcolor) {
      case "red":
         echo "<br>Your favorite color is red!";
         break;
      case "blue":
         echo "<br>Your favorite color is blue!";
         break;
      case "green":
         echo "<br>Your favorite color is green!";
         break;
      default:
         echo "<br>Your favorite color is neither red, blue, nor green!";
   }
   ?>
</body>

</html>