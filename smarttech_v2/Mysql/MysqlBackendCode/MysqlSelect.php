<?php require_once 'MysqlConnect.php'; ?>
<h3>執行結果</h3>
<div class="well well-sm">
<?php
$datas = array();
$sql = "SELECT * FROM 'attribute';";
$result = mysqli_query($link, $sql);

if ($result) {
  if (mysqli_num_rows($result) > 0)
    while ($row = mysqli_fetch_assoc($result)) {
      $datas[] = $row;
    }
  }
  mysqli_free_result($result);
} else {
  echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);
}

if (!empty($result)) {
  print_r($datas);
} else {
  echo "查無資料";
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

          <h3>執行結果</h3>
          <div class="well well-sm">
            <?php
            $datas = array();
            $sql = "SELECT * FROM `user` WHERE `id` = 1;";
            $result = mysqli_query($link, $sql);

            if ($result) {
              if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $datas[] = $row;
                }
              }
              mysqli_free_result($result);
            } else {
              echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($link);
            }
            if (!empty($datas)) {
              print_r($datas);
            } else {
              echo "查無資料";
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
