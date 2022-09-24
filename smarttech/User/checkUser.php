<?php
  session_start();

  $db_user = "1111";
  $db_password = "1111";

  if(isset($_POST['UserName']) && isset($_POST['UserPassword'])){
    if($_POST['UserName'] == $db_user && $_POST['UserPassword'] == $db_password){
      $_SESSION['is_login'] = TRUE;
      header('Location: backend.php');
    } else {
      $_SESSION['is_login'] = FALSE;
      header('Location: login_post.php?msg=登入失敗，請在確認帳號密碼');
    }
  } else {
    header('Location: login_post.php?,sg=請正確輸入');
  } endif;
?>
