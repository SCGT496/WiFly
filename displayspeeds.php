//NOT USING THIS-- MIGRATED THE PHP OVER TO THE HTML PAGE VERSION OF THIS


<?php
  // logs into SQL locally
  // when connected online, will need to be matched to correct host server, username, and password
  $username = "root";
  $password = "";
  $hostname = "localhost";
  $dbc = mysql_connect($hostname, $username, $password)
    or die('Connection Error: ' . mysql_error());
  echo "Connected to MySQL<br>";

  mysql_select_db('createinsertdb', $dbc) or die('DB Selection Error' .mysql_error());
  
  // Find all Wifi Speeds Already Found Inside of Database and their building
  $data = "(
    SELECT Wifi_speed, GPS_location
    FROM Instance
  )";

  // if result is false, it will throw an error showing it did not work 
  $results = mysql_query($data, $dbc);
      //or die('Query Error: ' . mysql_error());
  
  //$assoc = mysql_fetch_assoc($results);

  //var_dump($assoc);
  
  while ($row = mysql_fetch_array($results)) {
      echo $row['Wifi_speed'];
      echo $row['GPS_location'];
  }

?>
