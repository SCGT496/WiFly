
  <?php
  // logs into SQL locally
    $username = "root";
    $password = "";
    $hostname = "localhost";
    $dbc = mysql_connect($hostname, $username, $password)
      or die('Connection Error: ' . mysql_error());
    echo "Connected to MySQL<br>";

    
    mysql_select_db('createdb', $dbc) or die('DB Selection Error' .mysql_error());
    
    $Username = $_POST['inputEmail'];
    $Pass = $_POST['inputPassword'];    
    $query = "(
      SELECT Email and Pass
      FROM Contributor
      WHERE Username = '".$Username."'
        AND Pass ='".$Pass."')";

    $result = mysql_query($query, $dbc)
      or die('Query Error: ' . mysql_error());


    if(!$result) var_dump("not correct");

    mysql_close($dbc);

    echo 'Thanks you for logging in.<br />';
    echo 'Welcome ' . $Username;
    
  ?>