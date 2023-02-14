<?php
  $host = 'localhost:8888';
  $dbuser = 'root';
  $dbpw = 'm1V@81rQweM4*A/x';
  $dbname = 'smarttech';
  $link = mysqli_connect($host, $dbuser, $dbpw, $dbname);
  if ($link) {
    mysqli_query($link, "SET NAMES utf8");
    echo "CONNECTED SUCCESS";
  } else {
    echo 'CONNECTED FAILED :<br/>' . mysqli_connect_errno();
  }
?>
