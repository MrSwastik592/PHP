<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Practical 14</title>
</head>

<body>
   <form action="exp14.php" method="post">
      <input type="email" name="email" class="email" placeholder="email" /> <br>
      <input type="text" name="subject" class="subject" placeholder="subject" /><br>
      <input type="text" name="message" class="message" placeholder="message" /><br>
      <input type="submit" name="submit" value="Submit" />
   </form>
   <?php
   if (isset($_POST['submit'])) {
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
      if (!empty($email) && !empty($subject) && !empty($message)) {
         $to = $email;
         $subject = $subject;
         $message = $message;
         $header = "From:swastik9698@gmail.com";
         $header .= "Content-type: text/html\r\n";
         if (mail($to, $subject, $message, $header)) {
            echo "
            Email sent successfully";
         } else {
            echo "
            Email sending failed";
         }
      } else {
         echo "
         Please fill all the fields";
      }
   }
   ?>
</body>

</html>