<?php	require_once 'MysqlConnect.php'; ?>
<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<title>刪除資料</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="../../Css/Delete.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="text-center">DELETE 刪除</h2>
          <a href="?page=../MysqlBackendCose/MysqlDelete.php">查詢</a>
				</div>
			</div>
		</div>
		<?php	mysqli_close($link); ?>
	</body>
</html>
