<?php
  // logs into SQL locally
  // when connected online, will need to be matched to correct host server, username, and password
    $username = "root";
    $password = "";
    $hostname = "localhost";

    $dbc = mysql_connect($hostname, $username, $password)
      or die('Connection Error: ' . mysql_error());

    mysql_select_db('createinsertdb', $dbc) or die('DB Selection Error' .mysql_error());
    

    //$GPS_location = $_GET['GPS_location'];
    $GPS_location = $_POST['variable'];
    $Floor = $_GET['Floor'];
    $Room_number = $_GET['Room_number'];
    $Street_adress = $_GET['Street_adress'];
    $Speed = file_get_contents( 'wiFiCalc.js');
    

    $query = "(INSERT INTO Location (Floor, Room_number, Wifi_speed)
              VALUES(".$Floor.",".$Room_number.",".$Speed.")";

    $result = mysql_query($query, $dbc)
      or die('Query Error: ' . mysql_error());

    echo 'Thanks for submitting the form.<br />';
    echo 'You are in ' . $Building_name;
    echo ' on floor ' . $Floor . '<br />';
    echo ' in room ' . $Room_number . '<br />';
    echo $value;
    echo ', GPS location: ' . $GPS_location . '<br />';
    mysql_close($dbc);

  ?>