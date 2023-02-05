<?php session_start();?>
<?php $page = "BackendUser";
  if(isset($_GET['page'])) {$page = $_GET['page'];}
  switch ($page)
  {
    case 'BackendUser': $title = "BackendUser"; break;
    default: $title = "Opps! 404 (error)"; break;
  }
?>

<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?></title>

    <meta name="description" content="Intelligent Technology Database">
    <meta name="author" content="Unknown">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="fSelect.css" rel="stylesheet">
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        min-width: 1400px;
        background-color: #F5F5F5;
        position: relative;
        margin: 0 auto;
        justify-content: center;
        padding: 0px 250px;
      }
      * {box-sizing: border-box;}

      .header {
        overflow: hidden;
        background-color: #F5F5F5;
        background-position: center;
        background-repeat: no-repeat;
        background-size: auto;
        position: relative;
        top: 0;
      }

      .topnav {
        overflow: hidden;
        background-color: #F5F5F5;
      }
      .topnav a {
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 10px 14px;
        text-decoration: none;
        font-size: 18px;
      }
      .topnav a:hover {color: red;}
      .result {
        float: right;
        text-align: center;
        }
      .form {border: 4px solid #f1f1f1;}

      .DataEdit-container {
        padding: 25px;
        background-color: white;
        border: 1px;
        border-color: inherit;
        border-radius: 8px;
        bottom: 0;
        height: 550px;
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
          <?php echo '<script>alert("登入成功!")</script>';?>
          <a href="logout.php">登出</a>
        </div>
      </div>

      <div class="DataEdit-container">
        <h1>Data Editer</h1>
        <form action="/action_page.php">
          <h3>Upload Files:</h3>
          <input type="file" id="myFile" name="filename">
          <input type="submit">
        </form>


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
