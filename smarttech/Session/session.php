<?php
  session_start();
  //設定session為"使用者名稱變數"的值
  $_SESSION['UserName'] = '8888';
  //設定的session存在server上，直接使用
  echo '$_SESSION["UserName"]' . $_SESSION['UserName'];
?>
