<?php
//変数にフォームからの値を代入
$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = password_hash($_POST['pass'], password_default);
$dsn = 'mysql:host=localhost;dbname=loginForm;charset=utf8';
$username = 'dbuser';
$password = 'dbpass';

try{
  $dbh = new PDO($dsn, $username, $password);
}catch(PDOException $e){
  $msg = $e->getMessage();
}


//フォームに入力されたmailがすでに登録されていないか確認
$sql = 'select * from users where mail = :mail';
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':mail', $mail);
$stmt->execute();
$member = $stmt->fetch();

$sql = 'null';
$stmt = 'null';

//指定したハッシュがパスワードにマッチしているかチェック
if(password_verify($_POST['pass'], $member['pass'])){
  //DBのユーザー情報をセッションに保存
  $_SESSION['id'] = $member['id'];
  $_SESSION['name'] = $member['name'];
  $msg = 'ログインしました';
  $link = '<a href="indx.php">ホーム</a>';
}else{
  $msg = 'メールアドレスもしくはパスワードが間違っています。';
  $link = '<a href="login_form.php">戻る</a>';
}


?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
<!--メッセージを出力-->
<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
  </body>