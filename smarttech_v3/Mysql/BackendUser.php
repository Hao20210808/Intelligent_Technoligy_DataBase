<?php session_start();?>
<?php $page = "BackendUser";
  if(isset($_GET['page'])) {$page = $_GET['page'];}
  switch ($page)
  {
    case 'BackendUser': $title = "Intelligent_Technology_Database_Editor"; break;
    case 'Select': $title = "Search_the_database_by_questionnaire"; break;
    case 'PrintOut': $title = "Print_the_data_as_table_form"; break;
    default: $title = "Opps! 404 (error)"; break;
  }
?>
<?php $title = 'Intelligent_Technology_Database_Editor';?>

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
      @media screen and (max-width: 1024px) {
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
          <a href="?page=Select">查詢 | 編輯資料庫</a>
          <a href="?page=PrintOut">輸出</a>
          <a href="../Session/logout.php">登出</a>
        </div>
      </div><br><br>
    </div>

    <?php
      switch ($page){
        case 'BackendUser': include("TextContainer.html"); break;
        case 'Select': include("Select.php"); break;
        case 'PrintOut': include("PrintOut.php"); break;
        default: $title = "Opps! 404:Error Massages"; break;
      }
    ?>
  </body>
</html>
<?php endif; ?>
