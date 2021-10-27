<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>ログイン機能 Form test</title>
  </head>
  <body>
    <h1>ログインページ</h1>
<form action="login.php" method="post">
  
  <div>
    <label>メールアドレス：</label>
    <input type="mail" name="mail" required>
  </div>
  
  <div>
    <label>パスワード：</label>
    <input type="password" name="pass"required> 
  </div>
  
  <input type="submit" value="ログイン">
  <p>まだ登録していない方は<a href="signup_form.php">こちら</a></p>
</form>
  </body>