<?php
//取得來自register.php 的資料
$photo = '';
if (isset($_FILES['photo'])) {
  //print_r($_FILES);
  /*
    檔案的陣列包含以下索引值:
    $_FILES['設定name的鍵值']['name']原本的檔名
    $_FILES['設定name的鍵值']['tmp_name']暫存在server的檔名，會被重新命名
    $_FILES['設定name的鍵值']['type']檔案型態
    $_FILES['設定name的鍵值']['size']檔案大小
    $_FILES['設定name的鍵值']['error']問錯代碼
  */
  //如果有傳hpoto索引值的檔案
  //檢查上傳到server的暫存檔案是否存在
  if(file_exists($_FILES['photo']['tmp_name'])) {
    // move)uploaded_file 方法，可以將上傳的檔案移動到目前的資料夾。
    $targetFolder = "../files/";
    move_uploaded_file($_FILES['photo']['tmp_name'], $targetFolder . $_FILES['photo']['name']);

    //將目標資料夾與檔案名稱組在一起，就是在server上的檔案位置了。
    $photo = $targetFolder.$_FILES['photo']['name'];
    //echo "檔案存在，可以搬移";
  }
  else {
    echo "上傳檔案失敗，請確認資料夾寫入權限。或php.ini上傳檔案容量限制是否太小";
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>確認註冊資料</title>
  </head>

  <body>
    <h3>您的註冊資訊:</h3>

    <p>登入資訊</p>
    帳號: <?php echo $_POST['UserName']; ?><br>
    密碼: <?php echo $_POST['UserPassword']; ?>

    <p>個人資訊</p>
    姓名: <?php echo $_POST['name']; ?><br>
    性別: <?php echo $_POST['gender']; ?><br>
    電話: <?php echo $_POST['phone']; ?><br>
    住址: <?php echo $_POST['address']; ?><br>
    信箱: <?php echo $_POST['email']; ?><br>
    簡介: <br><?php echo nl2br($_POST['Info']);?><br>
    <!--nl2br可以把文字方塊的enter斷行轉換成-->
    照片: <?php
            if ($photo != '') {
              echo "<img src='{$photo}'>";
            }
          ?>
  </body>
</html>
