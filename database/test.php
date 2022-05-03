<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "test";

   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }
   echo "Connected successfully";

   // $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Yash', 'Dabhade', 'yash@gmail.com')";

   // if ($conn->query($sql) === TRUE) {
   //    echo "New record created successfully";
   // } else {
   //    echo "Error: " . $sql . "<br>" . $conn->error;
   // }


   $sql_get = "SELECT * from MyGuests";
   $result = $conn->query($sql_get);

   if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
         echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
      }
   } else {
      echo "0 results";
   }


   $conn->close();




   ?>
</body>

</html>