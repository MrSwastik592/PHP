<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data Fetch</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>

   <div class="Header">
      <div>
         <h1 class="title">PHP News</h1>
      </div>
   </div>

   <?php
   $sql = "SELECT newtitle,Upload_Image,Description,create_date FROM tbladdnews";
   $result = mysqli_query($link, $sql);
   if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<div class='container'>";
   ?>
         <img src="https://cdn.britannica.com/63/211663-050-A674D74C/Jonny-Bairstow-batting-semifinal-match-England-Australia-2019.jpg" class="image" alt='image'>
   <?php
         echo "<div class='news'>";
         echo "<div class= 'news-title'>";
         echo "<h2>" . $row["newtitle"] . "</h2>";
         echo "</div>";
         echo "<div class='news-description'>";
         echo "<p> <b>" . $row["create_date"] . "</b></p>";
         echo "<p class='description'>" . $row["Description"] . "</p>";
         echo "</div>";
         echo "</div>";
         echo "</div>";
      }
   } else {
      echo "0 results";
   }
   ?>
</body>

</html>