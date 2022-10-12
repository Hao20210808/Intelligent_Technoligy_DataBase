<style>
  button:hover {
    background-color: red;
  }

  form{
    width: 600px;
    margin:40px 60px;
  }

  h2{
    text-align: center;
  }
</style>

<div class="reviewData">
  <form>
    <h2>您的註冊資訊:</h2>
    <fieldset>
      <legend>登入資訊</legend><br>
        帳號: <?php echo $_POST['name']; ?><br><br>
        密碼: <?php echo $_POST['password']; ?>
    </fieldset>
    <br>
    <fieldset>
      <legend>個人資訊</legend><br>
        姓名: <?php echo $_POST['real_name']; ?><br><br>
        電話: <?php echo $_POST['phone']; ?><br><br>
        信箱: <?php echo $_POST['email']; ?><br><br>
    </fieldset>
    <p><button><a href="../MainPage.php">返回首頁</a></button></p>
  </form>
</div>
