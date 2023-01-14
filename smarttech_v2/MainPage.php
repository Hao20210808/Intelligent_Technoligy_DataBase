<?php session_start();?>
<?php $page = "MainPage";
  if(isset($_GET['page'])) {$page = $_GET['page'];}

  switch ($page)
  {
    case 'MainPage': $title = "Search"; break;
    case 'About': $title = "About"; break;
    case 'WH': $title = "Display"; break;
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

    <meta name="description" content="Intelligent Technology Database">
    <meta name="author" content="Unknown">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="fSelect.css" rel="stylesheet">
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: #F5F5F5;
        margin: 0;
        min-width: 1400px;
      }
      * {box-sizing: border-box;}

      .header {
        padding: 0px 200px;
        overflow: hidden;
        background-color: #F5F5F5;
        background-position: center;
        background-repeat: no-repeat;
        background-size: auto;
        position: relative;
        top: 0;
      }

      .topnav {
        padding: 0px 200px;
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
      .topnav a:hover {color: gray;}
      #navigation a{display: inline;}
      #navigation a:not(:first-child)::before{content: " | ";}

      .topnav .SB {float: right;}
      .topnav .SB input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 2px solid gray;
        border-radius: 4px;
        width: 300px;
      }
      .topnav .SB input[type=text]:hover {border-color: blue;}
      .topnav .SB button {
        float: right;
        padding: 10px;
        margin-right: 20px;
        background: #2196F3;
        color: white;
        font-size: 16px;
        border-color: #0b7dda;
        border-radius: 4px;
        cursor: pointer;
      }
      .topnav .SB button:hover {background: #0b7dda;}

      @media screen and (max-width: 600px) {
        .topnav .SB {float: none;}
        .topnav a, .topnav .SB input[type=text], .topnav .SB button {
          float: none;
          display: block;
          text-align: left;
          width: 100%;
          margin: 0;
          padding: 14px;
        }
      }

      .footer {
        overflow: hidden;
        background-color: gray;
        border-radius: 8px;
        border-color: inherit;
        bottom: 0;
      }
      .footer p{
        float: left;
        color: white;
        padding-left: 250px;
        font-size: 15px;
      }

      .login-container {
        float: right;
        padding-right: 250px;
        text-align: right;
      }
      .login-container input[type=text] {
        padding: 5px;
        border-radius: 4px;
        border-color: inherit;
        font-size: 17px;
        width: 150px;
      }
      .login-container button {
        padding: 5px;
        background-color: #555;
        border-radius: 4px;
        border-color: inherit;
        color: white;
        font-size: 15px;
        cursor: pointer;
      }
      .login-container button:hover {background-color: green;}
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
      <div class="SB">
          <form class="SearchBox">
            <input type="text" name="search" placeholder="Search..">
            <button type="submit" id="SearchText">GO!</button>
          </form>
      </div>
    </div>

    <?php
      switch ($page)
      {
        case 'MainPage':
          include("WH_Search.html"); break;
        case 'About':
          include("About.php"); break;
        case 'WH':
          include("WH.php"); break;
        default:
          $title = "Opps! 404:Error Massages"; break;
      }
    ?>
    <footer class="footer">
      <div class="login-container">
        <?php
          if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):
            header('Location: BackendUser.php');
          else:
        ?>
        <form method="POST" action="checkUser.php">
          <?php if (isset($_GET['msg'])) {echo "<p class='error'>{$_GET['msg']}</p>";}?>
          <input type="text" placeholder="USER:0000" name="user_name">
          <input type="text" placeholder="PSW:0000" name="user_password">
          <button type="submit">管理員登入</button>
        </form>
      </div>
      <p>
        <?php echo "Copyright  " . "&copy;" . date("Y") . "  SmartTech  本系統由科技部計畫補助<br>"?>
        <?php $Now = new DateTime('now', new DateTimeZone('Asia/Taipei')); echo "現在時間: " . $Now->format('h:i:sa'); ?>
      </p>
    </footer>
  </body>
</html>
<?php endif; ?>
