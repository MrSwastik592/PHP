<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME',  'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'users');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn === false) {
   die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Practical 15</title>
</head>

<body>

   <form action="exp15.php" method="POST">
      <input type="text" name="uname" placeholder="Enter your user name"><br>
      <input type="text" name="pass" placeholder="Enter your password"><br>
      <input type="submit" value="Submit">
   </form>

   <?php
   if (isset($_POST['uname']) && isset($_POST['pass'])) {
      $uname = $_POST['uname'];
      $pass = $_POST['pass'];
      if (!empty($uname) && !empty($pass)) {
         $sql = "INSERT INTO users (username, password) VALUES ('$uname', '$pass')";
         if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
         } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
      } else {
         echo "Please fill all the fields";
      }
   }
   ?>

   <form action="exp15.php" method="POST">
      <button name="getdata">GetData</button>
   </form>

   <?php
   if (isset($_POST['getdata'])) {
      $sql = "SELECT * FROM users";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
         while ($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"] . " - Name: " . $row["username"] . " " . $row["password"] . "<br>";
         }
      } else {
         echo "0 results";
      }
   }
   ?>


</body>

</html>