
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
    
    // will take input from the user, and check in database if login information matches any already in the database
    $Username = $_POST['inputEmail'];
    $Pass = $_POST['inputPassword'];    
    $query = "(
      SELECT Email and Pass
      FROM Contributor
      WHERE Username = '".$Username."'
        AND Pass ='".$Pass."')";

    $result = mysql_query($query, $dbc)
      or die('Query Error: ' . mysql_error());

    // will check if the result is true (correct login information is input
    if(!$result) {
       die("<script>location.href = 'login.html'</script>");  // if the information is incorrect, then return to login page
    } else {
       die("<script>location.href = 'index.html'</script>");  // if the information is correct, take them to index page
    }

    mysql_close($dbc);

    echo 'Thanks you for logging in.<br />';
    echo 'Welcome ' . $Username;
    
