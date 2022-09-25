<?php
  session_start();

  $db_user = "8888";
  $db_password = "8888";

  if(isset($_POST['username']) && isset($_POST['userpassword'])){
    if($_POST['username'] == $db_user && $_POST['userpassword'] == $db_password){
      $_SESSION['is_login'] = TRUE;
      header('Location: User/backend.php');
    } else {
      $_SESSION['is_login'] = FALSE;
      header('Location: MainPage.php?page=login?msg=登入失敗，請再次確認帳號密碼');
    }
  } else {
    header('Location: MainPage.php?page=login?msg=請正確輸入');
  } endif;
?>
