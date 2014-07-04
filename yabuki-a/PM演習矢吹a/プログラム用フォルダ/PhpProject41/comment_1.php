<?php
header("HTTP/1.1 301 Moved Permanetly");
header("Location: commentform_1.php");
$comment = $_POST["comment"]; 
$user = $_POST["user"];

try {
    $dsn = 'mysql:host=localhost;dbname=ramens;charset=utf8';
    $dbUser = 'test';
    $dbPass = 'pass';

    $db = new PDO($dsn, $dbUser, $dbPass);
} catch (PDOException $e) {
    echo "接続できませんでした" . $e->getMessage();
}

try {
    $sql = "INSERT INTO comments (comment, user) VALUES (:comment, :user)";
    $prepare = $db->prepare($sql);
    $prepare->bindValue(':comment', $comment);
    $prepare->bindValue(':user', $user);
    $prepare->execute();
} catch (PDOException $e) {
    echo "挿入失敗" . $e->getMessage();
    
}
