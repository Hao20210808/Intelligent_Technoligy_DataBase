<?php session_start();?>
<?php $page = "MainPage";
  if(isset($_GET['page'])) {$page = $_GET['page'];}
  switch ($page)
  {
    case 'MainPage': $title = "Search_the_database_by_questionnaire"; break;
    case 'About': $title = "About_the_website"; break;
    case 'WH': $title = "Display_the_table_of_result"; break;
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../Images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fSelect.css">
    <link rel="stylesheet" href="../css/MainPage.css">
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
    <div class="header"><img src="../Images/header.png" alt="header"></div>
    <div class="topnav">
      <div id ="navigation">
        <a href="?page=MainPage">搜索資料庫</a>
        <a href="?page=About">關於</a>
      </div>
      <div class="SB">
          <form class="SearchBox"><input type="text" name="search" placeholder="搜索關鍵字"></form>
      </div>
    </div>

    <?php
      switch ($page){
        case 'MainPage': include("WH_Search.html"); break;
        case 'About': include("About.html"); break;
        case 'WH': include("WH.php"); break;
        default: $title = "Opps! 404:Error Massages"; break;
      }
    ?>

    <footer class="footer">
      <div class="login-container">
        <?php
          if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):
            header('Location:BackendUser.php');
          else:
        ?>
        <form method="POST" action="../Session/checkUser.php">
          <?php if (isset($_GET['msg'])) {echo "<p class='error'>{$_GET['msg']}</p>";}?>
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
