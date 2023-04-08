<?php	require_once 'MysqlConnect.php';?>
<h3>執行結果</h3>
<div class="well well-sm">
	<?php
	$sql = "UPDATE `user` SET `password` = 'newpw123456', `name` = '菜頭' WHERE `id` = 1;";
	if(mysqli_affected_rows($db) > 0) {
		echo "更新成功";
	} elseif(mysqli_affected_rows($db) == 0) {
		echo "無資料更新";
	} else {
		echo  "{$sql} 語法執行失敗，錯誤訊息：" . mysqli_error($db);
	}
	?>
</div>
<?php mysqli_close($db);?>
