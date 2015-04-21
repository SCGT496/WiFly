<?php

  $username = "leslie0523";
  $password = "E3ulexY5";
  $hostname = "localhost";

  $link = mysql_connect($hostname, $username, $password)
  or die('Could not connect: ' . mysql_error());
  
  mysql_select_db('databaseName') or die('Could not select database');

  mysql_close($link)
  or die(mysql_error());

?>
