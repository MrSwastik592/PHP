<!DOCTYPE html>
<html lang="en">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   if (!isset($_POST['gender'])) {
      echo "Please Select Gender <br>";
   } else {
      $gender = $_POST['gender'];
   }

   if (!isset($_POST['vehicle'])) {
      echo "Please Select Vehicle <br>";
   } else {
      $vehicle = $_POST['vehicle'];
   }
}
?>

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

   <title>PR10</title>
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

      <form action="exp10.php" method="POST">
         <label for="">Name : </label>
         <input type="text" name="user" autocomplete="off" required />

         <br>
         <label for="">Gender : </label>
         <input type="radio" id="male" name="gender" value="male">
         <label for="male">Male</label>
         <input type="radio" id="female" name="gender" value="female">
         <label for="female">Female</label>
         <input type="radio" id="other" name="gender" value="other">
         <label for="other">Other</label>

         <br>
         <label for="">Owns :</label><br>
         <input type="checkbox" id="vehicle1" name="vehicle" value="Bike">
         <label for="vehicle1"> I have a bike</label><br>
         <input type="checkbox" id="vehicle2" name="vehicle" value="Car">
         <label for="vehicle2"> I have a car</label><br>
         <input type="checkbox" id="vehicle3" name="vehicle" value="Boat">
         <label for="vehicle3"> I have a boat</label><br>
         <br>
         <input type="submit" value="Submit" />
      </form>
   </div>

</body>

</html>