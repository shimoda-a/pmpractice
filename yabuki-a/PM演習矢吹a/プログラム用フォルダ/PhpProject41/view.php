<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php

//データベースに接続（レシピ260）
try {
$dsn = 'mysql:host=localhost;dbname=ramens;charset=utf8';
$dbUser = 'test';
$dbPass = 'pass';
        
$db = new PDO($dsn, $dbUser, $dbPass);
} catch (PDOException $e) {
    echo "接続できませんでした".$e->getMessage();
}

//データの表示（レシピ261）
try{
$sql = "SELECT comment, user from comments";
$prepare = $db->prepare($sql);
$prepare->execute();
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

//簡易表示
//print_r($result);

//配列の処理（レシピp.92）
echo '<dl>';
foreach ($result as $comment) {
    //print_r($comment);
    $body = $comment['comment'];
    $user = $comment['user'];
    echo "<dt>$user</dt><dd>$body</dd>"; 
}
echo '</dl>';

} catch (PDOException $e) {
    echo "取得失敗".$e->getMessage();
}

?>
</body>
</html>
