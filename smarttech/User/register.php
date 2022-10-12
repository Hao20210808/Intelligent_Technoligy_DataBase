<style>
  button:hover {
    background-color: red;
  }

  form{
    margin:20px auto;
    padding:50px;
    width: 560px
  }

  p{
    text-align: center;
  }
</style>

<div class="register">
  <!-- 當需要傳檔案時，必須加上 enctype="multipart/form-data" -->
  <form action="reviewData.php" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>登入資訊</legend><br>
      帳號: <input type="text" name="name" placeholder="必填" style="width:200px;"/><br><br>
      密碼: <input type="password" name="password" placeholder="必填" style="width:200px;"/><br><br>
      確認密碼: <input type="password" name="check_password" placeholder="必填" style="width:200px;"/><br><br>
    </fieldset>
    <br>
    <fieldset>
      <legend>個人資訊</legend><br>
      姓名: <input type="text" name="real_name" style="width:200px;"/><br><br>
      電話: <input type="text" name="phone" value="" style="width:200px;"/><br><br>
      信箱: <input type="email" name="email" value="" style="width:200px;"/><br><br>
      <p style="color: red">此欄為非必須填寫。若帳戶發生問題、忘記密碼，可藉由此欄追蹤。</p>
    </fieldset>
    <br>
    <p><button type="submit">確認註冊</button></p>
  </form>
</div>
