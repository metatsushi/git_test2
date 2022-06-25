<?php 
session_start();
require_once('common/navbar.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <?= $nav ?>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="login_act.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ログイン</legend>
     <label>ユーザーID<input type="text" name="lid"></label><br>
     <label>パスワード<input type="text" name="lpw"></label><br>
     <input type="submit" value="ログイン"><br><br>
     <a href="registration.php" >新規登録の方はこちら</a> 
     <p>
   
     </p>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
</body>
</html>