<?php session_start();?>
<?php $page = "BackendUser";
  if(isset($_GET['page'])) {$page = $_GET['page'];}
  switch ($page)
  {
    case 'BackendUser': $title = "BackendUser"; break;
    default: $title = "Opps! 404 (error)"; break;
  }
?>
<?php require_once 'Mysql/MysqlConnect.php'; ?>

<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?></title>

    <meta name="description" content="Intelligent Technology Database">
    <meta name="author" content="Unknown">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fSelect.css">
    <link rel="stylesheet" href="css/BackendUser.css">
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #FFFFFF;
      }
      * {
        box-sizing: border-box;
        margin: 0 auto;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div class="backend">
      <?php if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):?>
      <div class="header">
        <img src="images/header.png" alt="header">
      </div>

      <div class="topnav">
        <div class="result">
          <a href="Mysql/MysqlSelect.php">查詢</a>
          <a href="Mysql/MysqlInsert.php">新增</a>
          <a href="Mysql/MysqlUpdate.php">更新</a>
          <a href="Mysql/MysqlDelete.php">刪除</a>
          <a href="logout.php">登出</a>
        </div>
      </div>

      <div class="DataEdit-container">
        <fieldset>
          <legend>Data Editer</legend>
          <form action="/action_page.php">
            <h3>Upload Files:</h3>
            <input type="file" id="myFile" name="filename">
            <input type="submit">
          </form>
        </fieldset>
      </div>
    </div>

    <?php else: header('Location: MainPage.php');?>
    <?php
      switch ($page)
      {
        case 'BackendUser':
          include("BackendUser.php"); break;
        default:
          $title = "Opps! 404:Error Massages"; break;
      }
    ?>
  </body>
</html>
<?php endif; ?>
