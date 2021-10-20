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

$stmt = 'null';
$sql = 'null';

if($member['mail'] === $mail){
  $msg = '同じメールアドレスが存在します';
  $link = '<a href="signup_form.php">戻る</a>';
}else{
  //登録されていなければinsert
  $sql = 'insert into users(name, mail, pass) values(:name, :mail, :pass)';
  $stmt = $dbh->prepare($sql);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':mail', $mail);
  $stmt->bindParam(':pass', $pass);
  $stmt->execute();
  $msg = '会員登録が完了しました';
  $link = '<a href="index.php">ホーム画面</a>';
}

$stmt = 'null';
$sql = 'null';
$dsn = 'null';

?>
<!--メッセージを出力-->
<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>