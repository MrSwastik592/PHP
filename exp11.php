<!DOCTYPE html>
<html lang="en">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if ($_POST['food'] == -1) {
      echo "Please Select FoodType <br>";
   } else {
      $food = $_POST['food'];
      echo "You have selected $food <br>";
   }
}
?>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <title>PR11</title>
   <style>
      .container {
         width: 100vw;
         height: 100vh;
         display: flex;
         align-items: center;
         justify-content: center;
      }

      form {
         background-color: #f2f2f2;
         padding: 20px;
         box-shadow: 4px 17px 8rem 3px grey;
         border-radius: 10px;
      }
   </style>
</head>

<body>
   <div class="container">

      <form action="exp11.php" method="POST">
         <label for="">Food Preference : </label>

         <select name="food" id="food">
            <option value="-1">Select Food</option>
            <option value="veg">Veg</option>
            <option value="non-veg">Non-Veg</option>
         </select>

         <br>
         <input type="hidden" name="hiddenField" id="hiddenField" value="" />
         <br>
         <input type="submit" value="Submit" />
      </form>
   </div>

</body>

</html>