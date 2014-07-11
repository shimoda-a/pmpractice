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

try {
$dsn = 'mysql:host=localhost;dbname=ramens;charset=utf8';
$dbUser = 'test';
$dbPass = 'pass';
        
$db = new PDO($dsn, $dbUser, $dbPass);
} catch (PDOException $e) {
    echo "接続できませんでした".$e->getMessage();
}

try{
$sql = "SELECT link from map where id = 18";
$prepare = $db->prepare($sql);
$prepare->execute();
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

echo '<dl>';
foreach ($result as $map) {
    
    $link = $map['link'];
    echo "<dt><a href='$link'>$link</a></dt>"; 
}
echo '</dl>';

} catch (PDOException $e) {
    echo "取得失敗".$e->getMessage();
}

?>
</body>
</html>