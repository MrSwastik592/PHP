<html>

<body>
   <?php
   $string1 = "This is a string 1";
   $len = strlen($string1);
   echo "The length of the string is: $len <br>";

   $string2 = "This is a string 2";
   $word_count = str_word_count($string2);
   echo "The number of words in the string is: $word_count <br>";

   $string3 = "This is a string 3";
   $string3 = strrev($string3);
   echo "The string reversed is: $string3 <br>";

   $string4 = "This is a string 4";
   $string4 = strcmp($string4, $string1);
   echo  "The string 4 is equal to string 1: $string4 <br>";

   $string5 = "This is a string 5";
   $string5 = str_replace("is", "was", $string5);
   echo "The string with the word 'is' replaced with 'was' is: $string5 <br>";

   $string6 = "This is a string 6";
   $string6 = strpos($string6, "is");
   echo "The position of the word 'is' is: $string6 <br>";

   $string7 = "This is a string 7";
   $string7 = ucwords($string7);
   echo "The first letter of the string in uppercase is: $string7 <br>";

   $string8 = "This is a string 8";
   $string8 = strtoupper($string8);
   echo "The string in uppercase is: $string8 <br>";

   $string9 = "This is a string 9";
   $string9 = strtolower($string9);
   echo "The string in lowercase is: $string9 <br>";


   echo
   str_repeat("*", 10);



   ?>
</body>

</html>