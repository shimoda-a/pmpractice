<?php

//print_r($_POST);

$name=$_POST['name'];
$pass=$_POST['pass'];

//データベースに接続
require_once 'database_conf.php';



//検索
$sql = "select users.name from users where name = :name and pass = :pass";
$prepare=$db->prepare($sql);
$prepare->bindValue(":name", $name);
$prepare->bindValue(":pass", $pass);

$prepare->execute();

$result=$prepare->fetchAll(PDO::FETCH_ASSOC);
if (count($result)==0) {
//結果がなければエラー画面にジャンプ
    header('Location:error.php');
} else {
//結果があればステータス画面に飛ぶ
    echo "OK";
    session_start();
    $_SESSION['pass']=$pass;
    header('Location:main.php');
}
?>
