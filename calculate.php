  <?php

  	$username = "root";
  	$password = "";
  	$hostname = "localhost";
  	$dbc = mysql_connect($hostname, $username, $password)
    or die('Connection Error: ' . mysql_error());
  	echo "Connected to MySQL<br>";

    $Speed = file_get_contents( 'wiFiCalc.js');
    $download = true;
    $instance = 1;
    $location = 5;
    $number = 6;
    $value = trim( str_replace( array( "document.write('", "');"), '', $Speed));

    $addSpeed = "(INSERT INTO Instance (Wifi_speed, download, Instance_id, GPS_location, Number_id)
      VALUES (".$value.", ".$download.", ".$instance.", ".$location.", ".$number."))";

    $result = mysql_query($addSpeed, $dbc)
    or die('Query Error: ' . mysql_error());

  ?>