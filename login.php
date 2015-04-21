
  <?php
    $username = "leslie0523";
    $password = "secret15";
    $hostname = "localhost";
    $dbc = mysql_connect($hostname, $username, $password)
      or die('Connection Error: ' . mysql_error());
    echo "Connected to MySQL<br>";

    mysql_select_db('yourusername', $dbc) or die('DB Selection Error' .mysql_error());
    
    $Username = $_POST['Building_name'];
    $Pass = $_POST['Building_name'];
    
    $query = "(
      SELECT Username
      FROM Username as U, Username as E, Pass as P, Pass as S
      WHERE U.username = E.username
        AND P.Pass = S.Pass)";

    $result = mysql_query($query, $dbc)
      or die('Query Error: ' . mysql_error());

    mysql_close($dbc);

    echo 'Thanks you for logging in.<br />';
    echo 'Welcome ' . $Username;
  ?>