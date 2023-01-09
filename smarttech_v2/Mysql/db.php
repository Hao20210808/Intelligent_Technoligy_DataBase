<?php

	//宣告一個 link 變數，並執行連結資料庫函式，連結結果會帶入 link 當中

	$link = mysqli_connect("localhost", "root", "m1V@81rQweM4*A/x", "smarttech");


	if (mysqli_connect_errno())
	{
		//ERROR represent connection failed
		echo 'Can not connect with database :<br/>' . mysqli_connect_errno();
	}
	else
	{
		//set the interaction code as UTF-8
		mysqli_query($link, "SET NAMES utf8");

	}

	$sql = "SELECT * FROM `user`";
	$result = mysqli_query($link, $sql);
	$datas = array();
	if(mysqli_num_rows($result) > 0){
		while ($row = mysqli_fetch_assoc($result)) {
			$datas[]= $row;
		}
	}

	function random_color($length = 6) {
	    $characters = '0123456789ABCDEF';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}
?>

<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>讀取資料庫</title>
		<meta name="description" content="">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
		<style>
			.a_user{
				color: #fff;
				padding: 30px;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<?php if(!empty($datas)):?>
						<?php foreach($datas as $user):?>
							<div class="a_user" style="background-color:#<?php echo random_color();?>">
								<?php echo "會員帳號:" . $user['user_name'] . "<br>名叫:" . $user['name'];?>
								<span class="right">此顏色為 #<?php echo random_color();?></span>
							</div>
						<?php endforeach;?>
					<?php endif;?>
				</div>
			</div>
		</div>
	</body>
</html>
