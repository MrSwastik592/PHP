<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "news");

$link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if (!$link) {
   die("Connection failed: " . mysqli_connect_error());
}
