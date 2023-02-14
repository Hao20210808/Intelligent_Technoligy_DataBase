<?php	require_once 'MysqlConnect.php'; ?>
<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<title>新增資料</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../Css/Insert.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="text-center">新增資料</h2>
					<fieldset>
						<legend>公司欄位</legend>
						公司名稱  中文公司名稱  中文全名公司  英文公司全名  英文公司名稱  股票代碼  納稅人識別號碼  中文地址  英文地址  建立日期  上市日期  目前狀態  TEJ 部門  上市行業  電話  網址  執行長  高層主管  財務經理  發言人  員工編號  本金  TEJ 部門名稱  新TEJ 部門名稱  TEJ 分部門名稱  新TEJ 分部門名稱  TEJ 部門號碼  TEJ 行業名稱  TEJ 分部門代碼  TEJ 分部門全名  主營業務1  主營業務2  主營業務3  主要產品分佈  最後上市日期  最後首次公開募股日期  第一個場外交易日期  未上市日期  最後一次非公開發行日期
					</fieldset><br><br>

					<fieldset>
						<legend>合作契約欄位</legend>
						股票代號_1	全名_1	名稱_1  組織類型_1  已發布_1	 股票代號_2  全名_2  名稱_2  國家地區代碼_2  組織類型_2  已發布_2  合同內容  合同註釋  合同類別  合同研發  合作方向  起始年份  終止年份  終止條件  終止條件內容  歸檔年份  隱私政策  限制  部門
					</fieldset><br><br>

					<fieldset>
						<legend>公司股權欄位</legend>
						股票行情  部門  類型
					</fieldset><br><br>

					<fieldset>
						<legend>公司金融欄位</legend>
						公司名稱  記錄日期  研發預算  預算使用率  本金  周轉  淨利  收入資本比率  人均所得  所有資本  債務  股東股本  開銷成本  每股盈餘  外部收入  季營收  月營收
					</fieldset><br><br><br><br>
				</div>
			</div>
		</div>
		<?php	mysqli_close($link); ?>
	</body>
</html>
