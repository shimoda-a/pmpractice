<html>
    <head>
        <meta charset='utf-8' />
    </head>
    <body>
<?php

# h()関数☆レシピ221☆（安全にブラウザで値を表示したい）を読み込みます☆レシピ041☆（他のファイルを取り込んで利用したい）。
require_once 'h.php';


    require_once 'database_conf.php';
    require_once 'h.php';
if (isset($_POST['example1'], $_POST['example2'], $_POST['example3'])) {
    try {



        $sql = 'INSERT INTO users (name,labo,pass) VALUES (:name,:labo,:pass)';
        $prepare = $db->prepare($sql);


        $prepare->bindValue(':name', $_POST['example1'], PDO::PARAM_STR);
        $prepare->bindValue(':labo', $_POST['example2'], PDO::PARAM_STR);
        $prepare->bindValue(':pass', $_POST['example3'], PDO::PARAM_STR);
        $prepare->execute();


        $id = $db->lastInsertId();
        echo "登録完了しました。<a href='logingamen.php'>ログイン画面へ</a>";
        
       
    } catch (PDOException $e) {
        echo 'エラーが発生しました。内容: ' . h($e->getMessage());
    }
}
?>
    </body>
</html>
