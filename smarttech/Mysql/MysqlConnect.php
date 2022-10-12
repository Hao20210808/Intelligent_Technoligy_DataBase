<?php
  $host = 'localhost';
  $dbuser = 'root';
  $dbpw = 'm1V@81rQweM4*A/x';
  $dbname = 'smarttech';

  $link = mysqli_connect($host, $dbuser, $dbpw, $dbname);
  if ($link) {
    //if return value > 0, then connected successful
    //code => UTF-8
    //mysql_query($link, $query)
    mysql_query($link, "SET NAMES utf8")
    echo "connected success";
  } else {
    //if fail，connected failed, return error
    //mysql_connect_error();
    echo 'connect failed :<br/>' . mysqli_connect_error();
  }
?>
