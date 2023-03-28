<?php	require_once 'MysqlConnect.php'; ?>

<h3>執行結果</h3>
<div class="well well-sm">
	<?php
	$sql = "DELETE FROM `attribute` WHERE 'id' = $id;";
  $result = mysqli_query($db, $sql);

  if (mysqli_affected_rows($db) > 0){
    echo "刪除成功";
  } elseif (mysqli_affected_rows($db) == 0){
    echo "無資料刪除";
  } else {
    echo "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($db);
  }
  ?>
	<a href="?page=../BackendUser.php">回到管理葉面</a>
</div>
