<?php
//データの確認
//print_r($_POST);
//データベースに接続
require_once 'database_conf.php';
$db = new PDO($dsn, $dbUser, $dbPass);
if (isset($_POST['edit'])) {//データの更新（レシピ267）
    $sql = 'update items set itemno=:hinban0, name=:syouhin0, size=:saizu0, stock=:zaiko0 where id=:dbid0';
    $prepare = $db->prepare($sql);
    $prepare->bindValue(':dbid0', $_POST['dbid0']);
    $prepare->bindValue(':hinban0', $_POST['hinban0']);
    $prepare->bindValue(':syouhin0', $_POST['syouhin0']);
    $prepare->bindValue(':saizu0', $_POST['saizu0']);
    $prepare->bindValue(':zaiko0', $_POST['zaiko0']);
    $prepare->execute();
} else if (isset($_POST['delete'])) {//あるいはデータの削除
    $sql = 'delete from items where id=:dbid0';
    $prepare = $db->prepare($sql);
    $prepare->bindValue(':dbid0', $_POST['dbid0']);
    $prepare->execute();
}

header('Location:main.php');
?>