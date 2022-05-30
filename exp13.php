<!DOCTYPE html>
<html lang="en">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $value = $_POST['name'];
   $name = "Name";
   setcookie($name, $value, time() + (86400 * 30), "/");
}
?>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <title>PR13</title>
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

   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (!isset($_COOKIE[$name])) {
         echo "Cookie named '" . $name . "' is not set!";
      } else {
         echo "Cookie '" . $name . "' is set! <br>";
         echo "Value is: " . $_COOKIE[$name];
      }
   }

   ?>
   <div class="container">
      <form action="exp13.php" method="POST">
         <center>
            <strong>Set Cookie</strong>
         </center>
         <br>
         <label for="">Name : </label>
         <input type="text" id="name" name="name" />
         <br>

         <br>
         <center>
            <input type="submit" value="Submit" />
         </center>

         <center>
            <input type="button" value="Delete" name="delete" />
         </center>
      </form>
   </div>

</body>

</html>