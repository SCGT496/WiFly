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
  
  // Find all buildings in database and list them along with their GPS Location
  $data = "(
    SELECT ALL GPS_location AND Building_name
    FROM Location
  )";

  // if result is false, it will throw an error showing it did not work 
  $result = mysql_query($data, $dbc)
      or die('Query Error: ' . mysql_error());

  mysql_close($dbc);

?>