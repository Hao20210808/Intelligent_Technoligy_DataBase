<?php session_start();?>
<?php $page = "MainPage";
  if(isset($_GET['page'])) {$page = $_GET['page'];}

  switch ($page)
  {
    case 'MainPage': $title = "Search"; break;
    case 'WH': $title = "Display"; break;
    case 'BackendUser': $title = "User"; break;
    default: $title = "Opps! 404 (error)"; break;
  }
?>
<?php $title = 'Intelligent_Technology_Database';?>

<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?></title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="fSelect.css" rel="stylesheet">
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        max-width: 800px;
        min-width: 450px;
        background-color: #F5F5F5;
        position: relative;
        margin: 0 auto;
        justify-content: center;
        padding: 0px 40px;
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
        font-size: 14px;
      }
      #navigation a{display: inline;}
      #navigation a:not(:first-child)::before{content: " | ";}
      .topnav .login-container {float: right;}
      .topnav input[type=text] {
        padding: 6px;
        margin-top: 2px;
        font-size: 10px;
        border: none;
        width:100px;
      }
      .topnav .login-container button {
        float: right;
        padding: 4px 10px;
        margin-top: 4px;
        margin-right: 20px;
        background-color: #555;
        color: white;
        font-size: 12px;
        border: none;
        cursor: pointer;
      }
      .topnav .login-container button:hover {background-color: #FFDF7C;}

      @media screen and (max-width: 600px) {
        .topnav .login-container {float: none;}
        .topnav a, .topnav input[type=text], .topnav .login-container button {
          float: none;
          display: block;
          text-align: left;
          width: 100%;
          margin: 0;
          padding: 14px;
        }
        .topnav input[type=text] {border: 1px solid #ccc;}
      }

      .form {border: 4px solid #f1f1f1;}

      .footer {background-color: black;}
      .footer p{
        text-align: center;
        float: none;
        color: white;
        padding: 5px;
        grid-area: footer;
      }
  </style>
  </head>

  <body>
    <div class="header">
      <img src="images/header.png" alt="header">
    </div>

    <div class="topnav">
      <div id ="navigation">
        <a href="?page=MainPage">Search</a>
        <a href="?page=About">About</a>
      </div>
      <div class="login-container">
        <?php
          if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):header('Location: backend.php');
          else:
        ?>
        <form method="POST" action="checkUser.php">
          <?php if (isset($_GET['msg'])) {echo "<p class='error'>{$_GET['msg']}</p>";}?>
          <input type="text" placeholder="USER:0000" name="username">
          <input type="text" placeholder="PSW:0000" name="psw">
          <button type="submit">Login</button>
        </form>
      </div>
    </div>

    <?php
      switch ($page)
      {
        case 'MainPage':
          include("WH_Search.php"); break;
        case 'WH_Search':
          include("About.php"); break;
        case 'WH':
          include("WH.php"); break;
        case 'BackendUser':
          include("backend.php"); break;
        default:
          $title = "Opps! 404:Error Massages"; break;
      }
    ?>
    <footer class="footer">
      <p>
        <?php echo "Copyright  " . "&copy;" . date("Y") . "  SmartTech  本系統由科技部計畫補助<br>"?>
        <?php $Now = new DateTime('now', new DateTimeZone('Asia/Taipei')); echo "現在時間: " . $Now->format('h:i:sa'); ?>
      </p>
    </footer>
  </body>
</html>
<?php endif; ?>
