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
    $GPS_location = $_POST['GPS_location'];
    $Wifi_speed = $_POST['Wifi_speed'];
    $Building_name = $_POST['Building_name'];
    $Floor = $_GET['Floor'];
    $Room_number = $_GET['Room_number'];
    $Street_adress = $_GET['Street_adress'];

    //$Speed = file_get_contents( 'wiFiCalc.js');
    //$download = true;
    //$instance = 1;
    //$location = 5;
    //$number = 6;
    //$value = trim( str_replace( array( "document.write('", "');"), '', $Speed));
    $min=0;
    $max=1000000;
    int rand( $min,  $max)

    $query = "(INSERT INTO Instance (Wifi_speed, Instance_id, GPS_location)
              VALUES(".$Wifi_speed.",".rand().",".$GPS_location.")";
    $query2 = "(INSERT INTO Location (GPS_location, Building_name, Floor, Room_number, Street_adress)
              VALUES(".$Wifi_speed.",".$Building_name.",".$Floor.",".$Room_number.",".$Street_adress.")";
   /* <form method='post' id=myform>
    <input type=hidden id=js-to-php value=0>
    </form>
    <script>
      jQuery(document).ready(function(){
        //calulcate the wifispeed using the long js code
        //then save it in the field
        $('#js-to-php').val(YOUR_SPEED);
        // send the form
        $('#myform').submit();
      });
    </script>*/

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
