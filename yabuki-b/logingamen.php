<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>滞在管理システム　ログイン</title>
    </head>
    <body>
    <center>
        <h1>
            滞在管理システム    
        </h1>
        <br>
        <br>
        名前とパスワードを入力してください。
        <br>
        <br><br>
        <br>
        <form action="loginsyori.php" method="post">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名前：<input type="text" name="name" />
            <br>
            パスワード：<input type="password" name="pass" />
            <br>
            <input type="submit" value="ログイン" />
        </form>
        <br>
        <br>
        <br>
        <font size="2">
        <a href="shinkitouroku.php">初めての方はこちら</a>
        </font>
    </center>
</body>
</html>
