<?php
header("HTTP/1.1 301 Moved Permanetly");
header("Location: commentform.php");
$comments = $_POST["comments"]; 
$name = $_POST["name"];

try {
    $dsn = 'mysql:host=localhost;dbname=ramens;charset=utf8';
    $dbUser = 'test';
    $dbPass = 'pass';

    $db = new PDO($dsn, $dbUser, $dbPass);
} catch (PDOException $e) {
    echo "接続できませんでした" . $e->getMessage();
}

try {
    $sql = "INSERT INTO comments (comments, name) VALUES (:comments, :name)";
    $prepare = $db->prepare($sql);
    $prepare->bindValue(':comments', $comments);
    $prepare->bindValue(':name', $name);
    $prepare->execute();
} catch (PDOException $e) {
    echo "挿入失敗" . $e->getMessage();
    
}