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
      $title = "搜索資料庫";
      break;
    case 'login_post':
      $title = "添加資料(管理員權限)";
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
    $title = '智慧科技產業資料庫Interface';
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
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="CSS/style.css">

  </head>

  <body>
    <h1><?php echo $articleTitle; ?></h1>
    <?php echo $articleContent; ?>

    <div class="menu">
      <nav>
        <ul>
          <li <?php if($page == "MainPage") echo 'class="active"'; ?>><a href="?page=MainPage">首頁</a></li>
          <li ><a href="WH_Search.php">搜索資料庫</a></li>
          <li <?php if($page == "login_post") echo 'class="active"'; ?>><a href="?page=login_post">添加資料(管理員權限)</a></li>
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
          include("page2.php");
          break;
        case 'login_post':
          include("login_post.php");
          break;
        case 'contact':
          include("contact.php");
          break;
        default:
          $title = "Opps! 404 (輸入錯誤or連線失敗)";
          break;
      }
    ?>
    <?php include_once 'footer.php'; ?>
  </body>
</html>
