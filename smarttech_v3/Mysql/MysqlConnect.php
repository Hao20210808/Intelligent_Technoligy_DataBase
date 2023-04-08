<?php
  $db_server = 'localhost';
  $db_user = 'root';
  $db_pw = 'm1V@81rQweM4*A/x';
  $db_name = 'smarttech';
  $db = mysqli_connect($db_server, $db_user, $db_pw, $db_name);

  if ($db) {
    mysqli_query($db, "SET NAMES utf8");
    echo "CONNECTED SUCCESS";
  } else {
    echo 'CONNECTED FAILED :<br/>' . mysqli_connect_errno();
  }


?>
