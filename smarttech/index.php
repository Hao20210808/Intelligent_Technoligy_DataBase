
<?php
    $title = '智慧科技產業資料庫Interface';
    $articleTitle = '智慧科技產業資料庫'.'<br>'.'Intelligent Technology Database';
    $articleContent = '歡迎使用「新興產業資料庫」。';
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <a href="./">[登出系統]<a>
    <br>
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/x-icon" href="/images/pic_02.png">
    <style>
        body {
            width: 800px;
            margin: auto;
        }
    </style>

</head>
<body>
    <div class="main">

    <h2><?php echo $articleTitle; ?></h2>
    <hr>
    <?php echo $articleContent; ?>
    </div>
    <?php echo "請先登入"."如果忘記帳號密碼"; ?>

    <footer>
        font-family: courier;
        <p>本系統由科技部計畫補助<br>
    </footer>
</body>
</html>
