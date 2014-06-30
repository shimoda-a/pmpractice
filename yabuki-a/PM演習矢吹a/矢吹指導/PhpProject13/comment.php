<?php

$comment = $_POST["comment"]; //formのname属性で使ったものを使う
$user = $_POST["user"];

//送信されたデータを表示
//echo $comment;
//echo $user;
//送信されたデータをデータベースに保存
//データベースに接続（レシピ260）
try {
    $dsn = 'mysql:host=localhost;dbname=ramens;charset=utf8';
    $dbUser = 'test';
    $dbPass = 'pass';

    $db = new PDO($dsn, $dbUser, $dbPass);
} catch (PDOException $e) {
    echo "接続できませんでした" . $e->getMessage();
}

//データの挿入（レシピ265）
try {
    $sql = "INSERT INTO comments (comment, user) VALUES (:comment, :user)";
    $prepare = $db->prepare($sql);
    $prepare->bindValue(':comment', $comment);
    $prepare->bindValue(':user', $user);
    $prepare->execute();
} catch (PDOException $e) {
    echo "挿入失敗" . $e->getMessage();
}
