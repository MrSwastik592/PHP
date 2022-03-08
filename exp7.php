<html>

<body>
   <?php
   header("Content-Type: image/png");
   $handle = imagecreate(130, 50);
   $bg_color = imagecolorallocate($handle, 240, 240, 140);
   $txt_color = imagecolorallocate($handle, 0, 0, 0);
   imageString($handle, 5, 5, 18, "MSBTE.org.in", $txt_color);
   imagepng($handle);
   ?>
   <h2>This is Blank Image created on Server</h2>
   <img src="exp7.php" alt="img">
</body>

</html>