<html>

<body>
   <?php
   echo "<br>create and manipulate indexed array<br>";
   $cars = array("Volvo", "BMW", "Toyota");
   echo count($cars);
   echo "<br>";
   echo $cars[0];
   echo "<br>";

   echo "<br>loop through indexed array<br>";
   $arrlength = count($cars);
   for ($x = 0; $x < $arrlength; $x++) {
      echo $cars[$x];
      echo "<br>";
   }

   // create and manipulate associative array
   echo "<br>create and manipulate associative array<br>";
   $total = array("Ram" => "58", "Sham" => "61", "Sanjay" => "46");
   foreach ($total as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
   }

   echo "<br>create and manipulate multidimensional array<br>";
   $student = array(
      array("XYZ", 3401, 86.45),
      array("ABC", 3402, 87.42),
      array("PQR", 3403, 85.43),
   );
   echo "Student Name:" . $student[0][0] . ": Roll No: " . $student[0][1] . ", Percentage:
  " . $student[0][2] . ".<br>";
   echo "Student Name:" . $student[1][0] . ": Roll No: " . $student[1][1] . ", Percentage:
  " . $student[1][2] . ".<br>";
   echo "Student Name:" . $student[2][0] . ": Roll No: " . $student[2][1] . ", Percentage:
  " . $student[2][2] . ".<br>";

   for ($row = 0; $row < 3; $row++) {
      echo "<p><b>Row number $row</b></p>";
      echo "<ul>";
      for ($col = 0; $col < 3; $col++) {
         echo "<li>" . $student[$row][$col] . "</li>";
      }
      echo "</ul>";
   }

   ?>
</body>

</html>