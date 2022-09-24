<?php
  session_start();
?>
<style>
  form{
    border: #aaa solid 1px;
    margin:20px auto;
    padding:50px;
    width: 400px
  }

  .error{
    color:red;
  }

  button:hover {
    background-color: red;
  }

  a:hover {
    background-color: red;
  }
</style>
<div class="login">
  <?php
    if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):
      header('Location: backend.php');
    else:
  ?>
  <form method="post" action="checkUser.php">
    <?php
      if (isset($_GET['msg'])) {
        echo "<p class='error'>{$_GET['msg']}</p>";
      }
    ?>
    <div>
      管理員名稱: <input type="text" name="UserName" placeholder="帳號">
    </div>
    <br>
    <div>
      管理員密碼: <input type="password" name="UserPassword" placeholder="密碼">
    </div>
    <br>
    <p><button type="submit">登入</button></p>
    <p>如果忘記帳號密碼，請聯絡<a href="MainPage.php?page=contact" style="color: blue">本系統管理員</a></p>
    <p>沒有管理員帳號? 點選<a href="register.php" style="color: blue">註冊</a></p>
  </form>
  <?php endif; ?>
</div>
