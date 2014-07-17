<html>
    <head>
        <meta charset='utf-8' />
    </head>
    <body>
        <?php
            error_reporting(E_ALL & ~E_NOTICE);
        session_start();
        $pass = $_SESSION['pass'];


        
        
// セッションの初期化
// session_name("something")を使用している場合は特にこれを忘れないように!
session_start();
// セッション変数を全て解除する
$_SESSION = array();


// セッションを切断するにはセッションクッキーも削除する。
// Note: セッション情報だけでなくセッションを破壊する。
if (isset($_COOKIE[session_name()])) {
setcookie(session_name(), '', time()-42000, '/');
}

// 最終的に、セッションを破壊する
session_destroy();

        echo "ログアウトしました。<a href='logingamen.php'>ログイン画面へ</a>";
        ?>        
    </body>
</html>
