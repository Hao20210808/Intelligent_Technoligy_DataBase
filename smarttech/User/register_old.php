<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>管理員註冊</title>
  </head>

  <body>
    <!-- 當需要傳檔案時，必須加上 enctype="multipart/form-data" -->
    <form action="reviewData.php" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend>登入資訊</legend>
        帳號: <input type="text" name="UserName" placeholder="帳號輸入"><br>
        密碼: <input type="password" name="UserPassword" placeholder="密碼輸入">
        確認密碼: <input type="password" name="checkPassword" placeholder="密碼再次輸入">
      </fieldset>

      <fieldset>
        <legend>個人資訊</legend>
        姓名: <input type="text" name="name"><br>
        性別: <label><input type="radio" name="gender" value="女">女</label>
              <label><input type="radio" name="gender" value="男">男</label><br>
        電話: <input type="text" name="phone" value="手機"></br>
        住址: <input type="text" name="address" value=""></br>
        信箱: <input type="email" name="email" value=""></br>
        簡介: <br><textarea name="Info" rows="4" cols="80"></textarea><br>
        照片: <input type="file" name="photo">
      </fieldset>

      <button type="submit">送出</button>
    </form>
  </body>
</html>
