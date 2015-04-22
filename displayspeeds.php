<?php
  // logs into SQL locally
  // when connected online, will need to be matched to correct host server, username, and password
  $username = "root";
  $password = "";
  $hostname = "localhost";
  $dbc = mysql_connect($hostname, $username, $password)
    or die('Connection Error: ' . mysql_error());
  echo "Connected to MySQL<br>";

  mysql_select_db('createdb', $dbc) or die('DB Selection Error' .mysql_error());
  
  // Find Wifi Speeds Already Found Inside of Database and their building
  $data = "(
    SELECT * Wifi_speed AND GPS_location 
    FROM Instance
  )";

  // if result is false, it will throw an error showing it did not work 
  $result = mysql_query($data, $dbc)
      or die('Query Error: ' . mysql_error());

?>