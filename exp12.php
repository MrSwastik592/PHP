<!DOCTYPE html>
<html lang="en">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $pattern = '/\b[\w.-]+@[\w.-]+\.[A-Z a-z]{2,6}\b/';
   $email = $_POST['email'];
   if (preg_match($pattern, $email)) {
      echo "Valid Email";
   } else {
      echo "Invalid Email";
   }
}
?>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <title>PR12</title>
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

      <form action="exp12.php" method="POST">
         <label for="">Email : </label>

         <input type="text" id="email" name="email" />

         <br>
         <br>
         <center>
            <input type="submit" value="Submit" />
         </center>
      </form>
   </div>

</body>

</html>