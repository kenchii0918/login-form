<?php
session_start();
$_SESSION = array();//sessionの中身を全て削除
session_destroy();//sessionを破壊
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ログイン機能 Form test</title>
  </head>
  <body>
    <p>ログアウトしました</p>
    <a href="login.php">ログイン</a>
  </body>