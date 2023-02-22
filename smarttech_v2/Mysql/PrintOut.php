<?php	require_once 'MysqlConnect.php'; ?>
<?php
  $sql = "SELECT * FROM `attribute`;";
  $result = mysqli_query($db, $sql);
?>
<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <title>選擇列出資料</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../Css/PrintOut.css"/>
  </head>
  <body>
  <div class="PrintOut">
    <div class="searchbox">
      <form name="search">
        搜索關鍵字: <input type="text" name="search_box" value="" />
        <input type="submit" name="search" value="Search">
      </form>
    </div>
    <div>
      <table class="Output">
        <tr>
          <th><strong>公司名稱</strong></th>
          <th><strong>中文公司名稱</strong></th>
          <th><strong>中文全名公司</strong></th>
          <th><strong>英文公司全名</strong></th>
          <th><strong>英文公司名稱</strong></th>
          <th><strong>股票代碼</strong></th>
          <th><strong>納稅人識別號碼</strong></th>
          <th><strong>中文地址</strong></th>
          <th><strong>英文地址</strong></th>
          <th><strong>建立日期</strong></th>
          <th><strong>上市日期</strong></th>
          <th><strong>目前狀態</strong></th>
          <th><strong>TEJ 部門</strong></th>
          <th><strong>上市行業</strong></th>
          <th><strong>電話</strong></th>
          <th><strong>網址</strong></th>
          <th><strong>執行長</strong></th>
          <th><strong>高層主管</strong></th>
          <th><strong>財務經理</strong></th>
          <th><strong>發言人</strong></th>
          <th><strong>員工編號</strong></th>
          <th><strong>本金</strong></th>
          <th><strong>TEJ 部門名稱</strong></th>
          <th><strong>新TEJ 部門名稱</strong></th>
          <th><strong>TEJ 分部門名稱</strong></th>
          <th><strong>新TEJ 分部門名稱</strong></th>
          <th><strong>TEJ 部門號碼</strong></th>
          <th><strong>TEJ 行業名稱</strong></th>
          <th><strong>TEJ 分部門代碼</strong></th>
          <th><strong>TEJ 分部門全名</strong></th>
          <th><strong>主營業務1</strong></th>
          <th><strong>主營業務2</strong></th>
          <th><strong>主營業務3</strong></th>
          <th><strong>主要產品分佈</strong></th>
          <th><strong>最後上市日期</strong></th>
          <th><strong>最後首次公開募股日期</strong></th>
          <th><strong>第一個場外交易日期</strong></th>
          <th><strong>未上市日期</strong></th>
          <th><strong>最後一次非公開發行日期</strong></th>
        </tr>
        <?php while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
          <td><?php echo $row['Company_name']; ?></td>
          <td><?php echo $row['Company_ch_name']; ?></td>
          <td><?php echo $row['Company_ch_fullname']; ?></td>
          <td><?php echo $row['Company_en_fullname']; ?></td>
          <td><?php echo $row['Company_en_name']; ?></td>
          <td><?php echo $row['stock_number']; ?></td>
          <td><?php echo $row['tax_id_number']; ?></td>
          <td><?php echo $row['ch_address']; ?></td>
          <td><?php echo $row['en_address']; ?></td>
          <td><?php echo $row['established_date']; ?></td>
          <td><?php echo $row['listed_date']; ?></td>
          <td><?php echo $row['current_state']; ?></td>
          <td><?php echo $row['TEJ_sector']; ?></td>
          <td><?php echo $row['listed_sector']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['website']; ?></td>
          <td><?php echo $row['ceo']; ?></td>
          <td><?php echo $row['top_manager']; ?></td>
          <td><?php echo $row['finance_manager']; ?></td>
          <td><?php echo $row['spokesman']; ?></td>
          <td><?php echo $row['staff_number']; ?></td>
          <td><?php echo $row['capital']; ?></td>
          <td><?php echo $row['TEJ_sector_name']; ?></td>
          <td><?php echo $row['new_TEJ_sector_name']; ?></td>
          <td><?php echo $row['TEJ_subsector_name']; ?></td>
          <td><?php echo $row['TEJ_sector_num']; ?></td>
          <td><?php echo $row['TEJ_industry_name']; ?></td>
          <td><?php echo $row['TEJ_subsector_code']; ?></td>
          <td><?php echo $row['TEJ_subsector_fullname']; ?></td>
          <td><?php echo $row['main_bussiness1']; ?></td>
          <td><?php echo $row['main_bussiness2']; ?></td>
          <td><?php echo $row['main_bussiness3']; ?></td>
          <td><?php echo $row['main_product_dis']; ?></td>
          <td><?php echo $row['last_listed_date']; ?></td>
          <td><?php echo $row['last_IPO_date']; ?></td>
          <td><?php echo $row['first_OTC_date']; ?></td>
          <td><?php echo $row['unlisted_date']; ?></td>
          <td><?php echo $row['last_unIPO_date']; ?></td>
        </tr>
        <?php } ?>
      </div>
    </div>
    <?php mysqli_close($db); ?>
  </body>
</html>
