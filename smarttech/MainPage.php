<?php
  $page = "MainPage";
  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  }

  switch ($page) {
    case 'MainPage':
      $title = "首頁";
      break;
    case 'WH_Search':
      $title = "搜索資料庫-表單";
      break;
    case 'WH':
      $title = "搜索資料庫-陳列";
      break;
    case 'login':
      $title = "更新數據";
      break;
    case 'backend':
      $title = "管理室";
      break;
    case 'register':
      $title = "管理員註冊";
      break;
    case 'reviewData':
      $title = "管理員註冊(確認)";
      break;
    case 'contact':
      $title = "聯絡我們";
      break;
    default:
      $title = "Opps! 404 (輸入錯誤or連線失敗)";
      break;
  }
?>

<?php
    $title = '智慧科技產業資料庫';
    $articleTitle = '智慧科技產業資料庫'.'<br>'.'Intelligent Technology Database';
    $articleContent = '歡迎使用「新興產業資料庫」。';
?>

<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/pic_04.jpg">
    <link rel="stylesheet" href="CSS/style.css">
  </head>

  <body>
    <div class="container">
      <br>
      <h1><?php echo $articleTitle; ?></h1>
      <p><?php echo $articleContent; ?></p>
      <br>
    </div>

    <div class="topnav">
      <nav>
        <ul>
          <li <?php if($page == "MainPage") echo 'class="active"'; ?>><a href="?page=MainPage">回首頁</a></li>
          <li <?php if($page == "WH_Search") echo 'class="active"'; ?>><a href="?page=WH_Search">搜索資料庫</a></li>
          <li <?php if($page == "login") echo 'class="active"'; ?>><a href="?page=login">更新數據</a></li>
          <li <?php if($page == "register") echo 'class="active"'; ?>><a href="?page=register">管理員註冊</a></li>
          <li <?php if($page == "contact") echo 'class="active"'; ?>><a href="?page=contact">聯絡我們</a></li>
        </ul>
      </nav>
    </div>

    <?php
      switch ($page) {
        case 'MainPage':
          include("interface.php");
          break;
        case 'WH_Search':
          include("WareHouse/WH_Search.php");
          break;
        case 'WH':
          include("WareHouse/WH.php");
          break;
        case 'login':
          include("User/login.php");
          break;
        case 'backend':
          include("User/backend.php");
          break;
        case 'contact':
          include("contact.php");
          break;
        case 'register':
          include("User/register.php");
          break;
        case 'reviewData':
          include("User/reviewData.php");
          break;
        default:
          $title = "Opps! 404 (輸入錯誤or連線失敗)";
          break;
      }
    ?>
    <?php include_once 'footer.php'; ?>
  </body>
</html>
