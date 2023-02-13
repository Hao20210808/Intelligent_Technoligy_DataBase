<?php
  session_start();
  $db_password = "0000";
?>

<?php
  if (isset($_POST['user_password'])) {
    if ($_POST['user_password'] == $db_password) {
      $_SESSION['is_login'] = TRUE;
      header('Location: BackendUser.php');
    } else { $_SESSION['is_login'] = FALSE; header('Location: MainPage.php?page=login?msg=' . urlencode("登入失敗，密碼??"));}
  } else { header('Location: MainPage.php?page=login?msg=' . urlencode("登入失敗，請正確輸入。"));
  }
?>
