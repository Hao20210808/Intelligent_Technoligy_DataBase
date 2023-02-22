<?php
  session_start();
  session_destroy();
  header('Location: ../Webpage/MainPage.php');
?>
