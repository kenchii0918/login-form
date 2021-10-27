<?php
session_start();
//変数にフォームからの値を代入
//$name = $_POST['name'];
$mail = $_POST['mail'];
// $pass = $_POST['pass'];

//password_hash($_POST['pass'], password_default);
$dsn = 'mysql:host=localhost;dbname=loginForm;charset=utf8';
$username = 'dbuser';
$password = 'dbpass';

try{
  $dbh = new PDO($dsn, $username, $password);
}catch(PDOException $e){
  $msg = $e->getMessage();
}


//postされて来なかったとき
if (count($_POST) === 0) {
  $msg = "POSTないよ";
  $link = '<a href="login_form.php">戻る</a>';
}
  //POSTされてきた場合
else{
  //ユーザー名またはパスワードが送信されて来なかった場合
  if(empty($_POST["mail"]) || empty($_POST["pass"])) {
    $message = "メールアドレスとパスワードを入力してください";
  }
  //ユーザー名とパスワードが送信されて来た場合
  else{
    //post送信されてきたメールアドレスがデータベースにあるか検索
    $sql = 'select * from users where mail = :mail';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':mail', $mail);
    $stmt->execute();
    $member = $stmt->fetch(PDO::FETCH_ASSOC);
  
      //指定したハッシュがパスワードにマッチしているかチェック
    if(password_verify($_POST['pass'], $member['pass'])){
      //DBのユーザー情報をセッションに保存
      $_SESSION['id'] = $member['id'];
      $_SESSION['name'] = $member['name'];
      $msg = 'ログインしました';
      $link = '<a href="index.php">ホーム</a>';
    }else{
      $msg = 'メールアドレスもしくはパスワードが間違っています。';
      $link = '<a href="login_form.php">戻る</a>';
    }
  }
}



$sql = null;
$stmt = null;
$dbh = null;
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>login</title>
  </head>
  <body>
<!--メッセージを出力-->
<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
  </body>