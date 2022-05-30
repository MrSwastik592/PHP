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
   <title>Practical 16</title>
</head>

<body>
   <form action="exp16.php" method="POST">
      <input type="text" name="olduname" placeholder="Enter your Old user name"><br>
      <input type="text" name="uname" placeholder="Enter your user name"><br>
      <input type="text" name="pass" placeholder="Enter your password"><br>
      <input type="submit" value="Update">
   </form>
   <?php
   if (isset($_POST['uname']) && isset($_POST['pass']) && isset($_POST['olduname'])) {
      $olduname = $_POST['olduname'];
      $uname = $_POST['uname'];
      $pass = $_POST['pass'];
      if (!empty($uname) && !empty($pass)) {
         $sql = "UPDATE users SET username = '$uname', password = '$pass' WHERE username = '$olduname'";
         if (mysqli_query($conn, $sql)) {
            echo "Record Updated successfully";
         } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
      } else {
         echo "Please fill all the fields";
      }
   }
   ?>
   <br><br>
   <form action="exp16.php" method="POST">
      <input type="text" name="deleteuname" placeholder="Enter username">
      <button name="deleteData">deleteData</button>
   </form>
   <?php
   if (isset($_POST['deleteData']) && isset($_POST['deleteuname'])) {
      $uname = $_POST['deleteuname'];
      $sql = "DELETE FROM users WHERE username = '$uname'";
      $result = mysqli_query($conn, $sql);
      if ($result) {
         echo "Record deleted successfully";
      } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
   }
   ?>
</body>

</html>