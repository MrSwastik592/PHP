<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Temperature and Weather app</title>

   <!--External css-->
   <link rel="stylesheet" href="style.css">

</head>

<body>

   <div class="right-side">
      <div class="container">
         <div class="menu">
            <div class="menu-item wa active" name="weather" onclick="changeMenu(this)">Weather App</div>
            <div class="menu-item wa" name="temperature" onclick="changeMenu(this)">Temperature</div>
         </div>
         <div class="weatherForm">
            <form method="POST">
               <div class="input-grp wa-cityn">
                  <input type="text" name="city" id="city1" placeholder="Enter City Name">
               </div>

               <div class="btn-wrapper wa-submitb">
                  <button class="btn" name="weatherSubmit">Submit</button>
               </div>
            </form>
         </div>
         <div class="tempForm hide">
            <form method="POST">
               <div class="input-grp wa-cityn">
                  <input type="text" name="temp" id="temp" placeholder="Enter Temperature">
               </div>

               <div class="btn-wrapper wa-submitb">
                  <button class="btn" name="tempSubmit">Submit</button>
               </div>
            </form>
         </div>
         <p>
            <?php
            if (isset($_POST['weatherSubmit'])) {
               $city = $_POST['city'];
               $apikey = 'YOUR_API_KEY';
               if ($city == "") {
                  echo "<h2>Please enter a city name</h2>";
               } else {
                  $url = "https://api.openweathermap.org/data/2.5/weather?q=" . $city . "&appid=" . $apikey;
                  $json = file_get_contents($url);
                  $data = json_decode($json, true);
                  $temp = $data['main']['temp'] - 273;
                  $temp = round($temp, 2);
                  $weather = "<h3> Weather in " . $data['name'] . ", " . $data['sys']['country'] . "</h3>" . date("F j, Y") . "<br><br><h2>" . intval($temp) . "&deg;C</h2><br>";
                  $weather .= "" . $data['weather']['0']['description'] . "</br><br><br>";
                  $weather .= "<b>Humidity : </b>" . $data['main']['humidity'] . "% <br>";
                  $weather .= "<b>Wind : </b>" . $data['wind']['speed'] . "Km/h <br> ";
               }
            }
            ?>

            <?php
            if (isset($weather)) {
               echo '<div class="alert alert-success" role="alert">
            ' . $weather . '
            </div>';
            }
            ?>

            <?php
            if (isset($_POST['tempSubmit'])) {
               $temp = $_POST['temp'];
               if ($temp == "") {
                  echo "<h2>Please enter a temperature</h2>";
               } else {
                  $tempFahr = $temp * 1.8 + 32;
                  $tempFahr = round($tempFahr, 2);
                  $tempKel = $temp + 273;
                  echo "<h3>" . date("F j, Y") . "</h3>";
                  echo "Temperature in Fahrenheit <br><br><h2>" . $tempFahr . "&deg;F</h2><br>";
                  echo "Temperature in Kelvin <br><br><h2>" . $tempKel . "&deg;K</h2><br>";
               }
            }

            ?>

         </p>
      </div>
   </div>

   <script>
      const container = document.querySelector('.container');


      function changeMenu(e) {
         var menu = document.querySelectorAll('.menu-item');
         var form = document.querySelectorAll('.weatherForm');
         var tempForm = document.querySelectorAll('.tempForm');
         for (var i = 0; i < menu.length; i++) {
            menu[i].classList.remove('active');
         }
         for (var i = 0; i < form.length; i++) {
            form[i].style.display = 'none';
         }
         e.classList.add('active');
         var name = e.getAttribute('name');
         if (name == 'weather') {
            tempForm[0].style.display = 'none';
            form[0].style.display = 'block';
         } else {
            tempForm[0].style.display = 'block';
         }
      }
   </script>
</body>

</html>
