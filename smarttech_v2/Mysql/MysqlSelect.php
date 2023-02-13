<?php
  require_once 'MysqlConnect.php';
?>
<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <title>選擇列出資料</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><!-- 給行動裝置或平板顯示用，根據裝置寬度而定，初始放大比例 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- 載入 bootstrap 的 css 方便我們快速設計網站-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="text-center">SELECT 查詢</h2>
          查詢 user 資料表的所有內容，查詢語法
          <pre>SELECT * FROM `user`;</pre>
           <pre> //使用php執行的寫法
              require_once 'db.php'; //載入 db.php 檔案，讓我們可以透過它連接資料庫

              $datas = array(); //定義一個 $datas 陣列變數，準備要放查詢的資料
              $sql = "SELECT * FROM `user`;"; //將查詢語法當成字串，記錄在$sql變數中
              $result = mysqli_query($link, $sql); //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中

              if ($result) { //如果請求成功
                if (mysqli_num_rows($result) > 0) { //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否大於0
                  while ($row = mysqli_fetch_assoc($result)) { //取得的量大於0代表有資料, while迴圈會根據查詢筆數，決定跑的次數, mysqli_fetch_assoc 方法取得 一筆值
                    $datas[] = $row;
                  }
                }

                mysqli_free_result($result); //釋放資料庫查詢到的記憶體
              } else {
                echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);
              }

              if (!empty($datas)) {
                print_r($datas); //如果 $datas 不是空的，就用print_r印出 $datas
              } else {
                echo "查無資料";//為空的，代表沒資料
              }
          </pre>
          <h3>執行結果</h3>
          <div class="well well-sm">
            <?php
            $datas = array(); //定義一個 $datas 陣列變數，準備要放查詢的資料
            $sql = "SELECT * FROM `user`;"; //將查詢語法當成字串，記錄在$sql變數中
            $result = mysqli_query($link, $sql); //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中

            if ($result) { //如果請求成功
              if (mysqli_num_rows($result) > 0)  //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否大於0
                //取得的量大於0代表有資料, while迴圈會根據查詢筆數，決定跑的次數, mysqli_fetch_assoc 方法取得 一筆值
                while ($row = mysqli_fetch_assoc($result)) {
                  $datas[] = $row;
                }
              }
              mysqli_free_result($result); //釋放資料庫查詢到的記憶體
            } else {
              echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);
            }

            if (!empty($datas)) {
              print_r($datas); //如果 $datas 不是空的，就用print_r印出 $datas
            } else {
              echo "查無資料"; //為空的，代表沒資料
            }
            ?>
          </div>

          <h3>使用foreach，以及 ul li 列出查詢的結果</h3>
          <div class="well well-sm">
            <?php if(!empty($datas)):?>
            <ul>
              <?php foreach($datas as $key => $row): ?>
              <li>第<?php echo($key + 1); ?>筆資料，帳號：<?php echo $row['username']; ?>，名字：<?php echo $row['name']; ?></li>
              <?php endforeach; ?>
            </ul>
            <?php else: ?>查無資料
            <?php endif; ?>
          </div>
          <hr>
          <h2 class="text-center">有條件的查詢單一筆資料</h2>
          查詢 user 資料表中 id 為 1 的資料，查詢語法
          <pre>SELECT * FROM `user` WHERE `id` = 1;</pre>
					使用php執行的寫法
           <pre>//載入 db.php 檔案，讓我們可以透過它連接資料庫
              require_once 'db.php';

              $datas = array();//定義一個 $datas 陣列變數，準備要放查詢的資料
              $sql = "SELECT * FROM `user` WHERE `id` = 1;"; //將查詢語法當成字串，記錄在$sql變數中
              $result = mysqli_query($link, $sql); //用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中

              //如果請求成功
              if ($result) {
                if (mysqli_num_rows($result) > 0) { //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否大於0
                  while ($row = mysqli_fetch_assoc($result)) { //取得的量大於0代表有資料, while迴圈會根據查詢筆數，決定跑的次數, mysqli_fetch_assoc 方法取得 一筆值
                    $datas[] = $row;
                  }
                }
                mysqli_free_result($result); //釋放資料庫查詢到的記憶體
              } else {
                echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);
              }

              if (!empty($datas)) {
                print_r($datas); //如果 $datas 不是空的，就用print_r印出 $datas
              } else {
                echo "查無資料"; //為空的，代表沒資料
              }
            </pre>

          <h3>執行結果</h3>
          <div class="well well-sm">
            <?php
            $datas = array(); //定義一個 $datas 陣列變數，準備要放查詢的資料
            $sql = "SELECT * FROM `user` WHERE `id` = 1;";//將查詢語法當成字串，記錄在$sql變數中
            $result = mysqli_query($link, $sql);//用 mysqli_query 方法取執行請求（也就是sql語法），請求後的結果存在 $query 變數中

            if ($result) {//如果請求成功
              if (mysqli_num_rows($result) > 0) { //使用 mysqli_num_rows 方法，判別執行的語法，其取得的資料量，是否大於0
                while ($row = mysqli_fetch_assoc($result)) { //取得的量大於0代表有資料, while迴圈會根據查詢筆數，決定跑的次數, mysqli_fetch_assoc 方法取得 一筆值
                  $datas[] = $row;
                }
              }
              mysqli_free_result($result); //釋放資料庫查詢到的記憶體
            } else {
              echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);
            }
            if (!empty($datas)) {
              print_r($datas); //如果 $datas 不是空的，就用print_r印出 $datas
            } else {
              echo "查無資料"; //為空的，代表沒資料
            }
            ?>
          </div>
          <h3>使用foreach，以及 ul li 列出查詢的結果</h3>
          <div class="well well-sm">
            <?php if(!empty($datas)):?>
            <ul>
              <?php foreach($datas as $key => $row): ?>
              <li>第<?php echo($key + 1); ?>筆資料，帳號：<?php echo $row['username']; ?>，名字：<?php echo $row['name']; ?></li>
              <?php endforeach; ?>
            </ul>
            <?php else: ?>
            查無資料
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
    <?php mysqli_close($link); ?>
  </body>
</html>
