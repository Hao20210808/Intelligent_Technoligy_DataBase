<?php
  session_start();

  $db_user = "Test";
  $db_password = "Test";
?>

<?php
  if (isset($_POST['user_name']) && isset($_POST['user_password']))
  {
    if ($_POST['user_name'] == $db_user && $_POST['user_password'] == $db_password)
    {
      $_SESSION['is_login'] = TRUE;
      header('Location: backend.php');
    }
    else
    {
      $_SESSION['is_login'] = FALSE;
      header('Location: MainPage.php?page=login?msg=登入失敗，請再次確認帳號密碼');
    }
  }
  else
  {
    header('Location: MainPage.php?page=login?msg=請正確輸入');
  }
?>
