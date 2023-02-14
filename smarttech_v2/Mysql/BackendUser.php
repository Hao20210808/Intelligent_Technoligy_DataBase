<?php session_start();?>
<?php $page = "BackendUser";
  if(isset($_GET['page'])) {$page = $_GET['page'];}
  switch ($page)
  {
    case 'BackendUser': $title = "BackendUser"; break;
    case 'Select': $title = "Select"; break;
    case 'Insert': $title = "Insert"; break;
    case 'Update': $title = "Update"; break;
    case 'Delete': $title = "Delete"; break;
    default: $title = "Opps! 404 (error)"; break;
  }
?>
<?php require_once 'MysqlBackendCode/MysqlConnect.php'; ?>
<?php $title = 'BackendUser';?>

<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?></title>
    <meta name="description" content="Intelligent Technology Database">
    <meta name="author" content="Unknown">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../Images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fSelect.css">
    <link rel="stylesheet" href="../Css/BackendUser.css">
    <style>
      body {font-family: Arial, Helvetica, sans-serif; background-color: #F5F5F5;}
      * {box-sizing: border-box; margin: 0 auto; padding: 0;}
      @media screen and (max-width: 850px) {
       .footer p, .login-container {text-align: center; float: none;}
       .topnav{padding: 0 16px;}
     }
    </style>
  </head>
  <body>
    <div class="backend">
      <?php if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE): ?>
      <div class="header"><img src="../Images/header.png" alt="header"></div>
      <div class="topnav">
        <div class="result">
          <a href="?page=Select">查詢</a>
          <a href="?page=Insert">新增</a>
          <a href="?page=Update">更新</a>
          <a href="?page=Delete">刪除</a>
          <a href="../Session/logout.php">登出</a>
        </div>
      </div><br><br><br><br>

      <div class="text-container">
        <fieldset>
          <legend>Warning</legend>
            <h3>刪除:</h3>
            <p>由於每筆資料包含數個欄位，因此刪除資料時，請務必再三確認該筆資料刪除之必要性。避免資料移失。</p>
        </fieldset>
      </div>
    </div>

  <?php else: header('Location: ../Webpage/MainPage.php');?>
    <?php
      switch ($page){
        case 'BackendUser': include("BackendUser.php"); break;
        case 'Select': include("MysqlWebpage/Select.php"); break;
        case 'Insert': include("MysqlWebpage/Insert.php"); break;
        case 'Update': include("MysqlWebpage/Update.php"); break;
        case 'Delete': include("MysqlWebpage/Delete.php"); break;
        default: $title = "Opps! 404:Error Massages"; break;
      }
    ?>
  </body>
</html>
<?php endif; ?>
