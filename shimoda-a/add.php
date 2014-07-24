
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>サンプルアプリケーション</title>
  </head>
  <body>
    <?php
//データベースに接続
require_once 'database_conf.php';
$db = new PDO($dsn, $dbUser, $dbPass);
$sql='insert into items (itemno,name,size,stock) values (:hinban0,:syouhin0,:saizu0,:zaiko0)';
$prepare=$db->prepare($sql);
$prepare->bindValue(':hinban0', $_POST['hinban0']);
$prepare->bindValue(':syouhin0', $_POST['syouhin0']);
$prepare->bindValue(':saizu0', $_POST['saizu0']);
$prepare->bindValue(':zaiko0', $_POST['zaiko0']);
$prepare->execute();

//追加
    ?>
    <p>追加しました。</p>

    <p><a href="main.php">メインページ</a></p>

  </body>
</html>