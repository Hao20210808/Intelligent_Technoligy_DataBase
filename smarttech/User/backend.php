<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8" />
    <title>管理員後臺管理</title>
  </head>

  <style>
    div.result {
      text-align: center;
    }
  </style>

  <body>
    <?php
      if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):
    ?>

    <div class="result">
      <h2>登入成功!</h2>
      <p><a href='logout.php'>登出</a></p>
    </div>

    <?php
      else:
        header('Location: login.php');
      endif;
    ?>
  </body>
</html>
