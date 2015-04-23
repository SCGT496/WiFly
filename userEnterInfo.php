<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Submit a WiFi Speed</title>
</head>
<body>
  <h2>Submit a WiFi Speed</h2>

  <?php
  // logs into SQL locally
  // when connected online, will need to be matched to correct host server, username, and password
    $username = "root";
    $password = "";
    $hostname = "localhost";

    $dbc = mysql_connect($hostname, $username, $password)
      or die('Connection Error: ' . mysql_error());

    mysql_select_db('createdb', $dbc) or die('DB Selection Error' .mysql_error());
    

    //$GPS_location = $_GET['GPS_location'];
    $Floor = $_GET['Floor'];
    $Room_number = $_GET['Room_number'];
    $Street_adress = $_GET['Street_adress'];
    $Speed = file_get_contents( 'wiFiCalc.js');
    $download = true;
    $instance = 1;
    $location = 5;
    $number = 6;
    $value = trim( str_replace( array( "document.write('", "');"), '', $Speed));

    $query = "(INSERT INTO Location (Floor, Room_number, Wifi_speed)
              VALUES(".$Floor.",".$Room_number.",".$Speed.")";
    $addSpeed = "(INSERT INTO Instance (Wifi_speed, download, Instance_id, GPS_location, Number_id)
                  VALUES (".$value.", ".$download.", ".$instance.", ".$location.", ".$number."))"

    $result = mysql_query($query, $dbc)
      or die('Query Error: ' . mysql_error());

    $result2 = mysql_query($addSpeed, $dbc)
      or die('Query Error: ' . mysql_error());

    mysql_close($dbc);

    echo 'Thanks for submitting the form.<br />';
    //echo 'You are in ' . $Building_name;
    echo ' on floor ' . $Floor . '<br />';
    echo ' in room ' . $Room_number . '<br />';
    //echo ', GPS location: ' . $GPS_location . '<br />';
    
  ?>
</body>
</html>
