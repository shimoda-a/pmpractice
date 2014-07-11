<?php
header("HTTP/1.1 301 Moved Permanetly");
header("Location: commentform_7.php");
$comment = $_POST["comment"]; 
$name = $_POST["name"];
$shopid = $_POST["shopid"];

try {
    $dsn = 'mysql:host=localhost;dbname=ramens;charset=utf8';
    $dbUser = 'test';
    $dbPass = 'pass';

    $db = new PDO($dsn, $dbUser, $dbPass);
} catch (PDOException $e) {
    echo "接続できませんでした" . $e->getMessage();
}

try {
    $sql = "INSERT INTO comments (comment, name, shopid) VALUES (:comment,:name, :shopid)";
    $prepare = $db->prepare($sql);
    $prepare->bindValue(':comment', $comment);
    $prepare->bindValue(':name', $name);
    $prepare->bindValue(':shopid', 7);
    $prepare->execute();
} catch (PDOException $e) {
    echo "挿入失敗" . $e->getMessage();
    
}