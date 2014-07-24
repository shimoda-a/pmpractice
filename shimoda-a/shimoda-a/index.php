<?php
  session_start();
  
  // エラーメッセージ
  $errorMessage = "";
  //

  // ログインボタンが押された場合      
  if (isset($_POST["login"])) {

    // 認証成功
    if ( $_POST["password"] == "hoge") {
      // セッションIDを新規に発行する
      session_regenerate_id(TRUE);
      $_SESSION["USERID"] = $_POST["password"];
      header("Location: main.php");
      exit;
    }
    else {
      $errorMessage = "パスワードに誤りがあります。";
    }
  }

?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>サンプルアプリケーション</title>
  </head>
  <body>
      <center>
  <form id="loginForm" name="loginForm" action="<?php print($_SERVER['PHP_SELF']) ?>" method="POST">
 

  <div><?php echo $errorMessage ?></div>
 <br><br><br><br><br> <br><br><br><br><br>
 <h1>シューズ販売管理システム</h1>
      <br><br><br><br><br> <br><br>
      <font size="5">
  <label for="password">パスワード</label><br><input type="password" id="password" name="password" value="">
       </font>
  <br>
  <label></label><input type="submit" id="login" name="login" value="ログイン">
  
  </form>
          </center>
  </body>
</html>