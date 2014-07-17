<html>
    <head>
        <meta charset='utf-8' />
    </head>
    <body>
        <?php
        session_start();
        $pass = $_SESSION['pass'];
      
//データベースに接続

    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';




//「滞在」に変更（レシピ267）
        
        $sql = "UPDATE users SET inroom = 1 WHERE pass = :pass";
        $prepare = $db->prepare($sql);
        $prepare->bindValue(":pass", $pass);
        $prepare->execute();

        echo "変更しました。<a href='main.php'>メインメニューへ</a>";
        ?>        
    </body>
</html>
