<?php

session_start();
$username = $_SESSION['name'];
if(isset($_SESSION['id'])){//ログインしているとき
  $msg = 'こんにちは' . htmlspecialchars($username, \ENT_QUOTES, 'UTF-8') . 'さん';
  $link = '<a href="logout.php">ログアウト</a>';
}else{
  $msg = 'ログインしていません';
  $link = '<a href="login_form.php">ログイン</a>';
}

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ログイン機能 Form test</title>
  </head>
  <body>
<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
  </body>