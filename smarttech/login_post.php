<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>管理員登入</title>
  </head>

  <style>
    form{
      border: #aaa solid 1px;
      margin:20px auto;
      padding:30px;
      width: 300px
    }
    .error{
      color:red;
    }
    a:hover {
      background-color: red;
    }
  </style>

  <body>
    <form method="post" action="checkUSER.php">
      <?php
        if (isset($_GET['msg'])) {
          echo "<p class='error'>{$_GET['msg']}</p>";
        }
      ?>
      <div>
        管理員名稱:<input type="text" name="UserName">
      </div>
      <div>
        管理員密碼:<input type="password" name="UserPassword">
      </div>
      <button type="submit">登入</button>
      <p>如果忘記帳號密碼，請聯絡<a href="contact.php" style="color: blue">本系統管理員</a></p>
    </form>
  </body>
</html>
