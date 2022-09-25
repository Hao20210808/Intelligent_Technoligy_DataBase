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
      header('Location: User/backend.php');
    else:
  ?>
  <form method="POST" action="User/checkUser.php">
    <?php
      if (isset($_GET['msg'])) {
        echo "<p class='error'>{$_GET['msg']}</p>";
      }
    ?>
    <div>管理員名稱: <input type="text" name="username" placeholder="User ID" style="width:200px;"/></div>
    <br>
    <div>管理員密碼: <input type="password" name="userpassword" placeholder="User password" style="width:200px;"/></div>
    <br>
    <p><button type="submit">登入</button></p>
    <p>如果忘記帳號密碼，請聯絡<a href="MainPage.php?page=contact" style="color: blue">本系統管理員</a></p>
    <p>沒有管理員帳號? 點選<a href="MainPage.php?page=register" style="color: blue">註冊</a></p>
  </form>
  <?php endif; ?>
</div>
