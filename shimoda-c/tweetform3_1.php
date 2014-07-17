<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>家計簿システム</title>
  
    </head>
    <body bgcolor="#ffdead" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
        <div align="center"> <font size="10"  >
              入力画面
  <body>
    <div>
<form method="post" action="tweetform3_1.php">
    <p>カテゴリーID
    <?php   
 require_once 'database_conf.php';

 $s=mysql_connect($dbServer,$dbUser,$dbPass) or die("失敗しました");
 //print "接続OK"<BR>;
 mysql_select_db($dbName);
 // 文字コードセット（なくても読めるかもしれない）
 mysql_set_charset('utf8');


 //カテゴリ
 // sql実行
$result = mysql_query('SELECT kategoriemei FROM kategorie_table');
 if (!$result) {
 die('クエリーが失敗しました。'.mysql_error());
 } 
 //配列
$cnum = 0;
$cat=array();
// read
 echo '<p>カテゴリ<br>';
 echo '<select name="sel_category">';
 while ($row = mysql_fetch_assoc($result)) {
 echo "<option>{$row['kategoriemei']}</option>";
 $cat[]=$row['kategoriemei'];
 $cnum=$cnum+1;
 }
 echo "</select>";
 
 // close
 mysql_close($s);
 
    ?>
<br>
    <p>金額
<br><input type="text" name="okane" value="" autofocus></p>
    <p>年月
<br><input type="text" name="hiduke" value="" autofocus></p>
<p><input type="submit" value="登録"></p>

</form>
      <?php
      # h()関数☆レシピ221☆（安全にブラウザで値を表示したい）を読み込みます☆レシピ041☆（他のファイルを取り込んで利用したい）。
      require_once 'h.php';

      if (isset($_POST['hiduke'])*isset($_POST['okane'])*isset($_POST['sel_category'])) {
        require_once 'database_conf.php';
        require_once 'h.php';

        //category
        $cnum2=0;
        for($i=0;$i<$cnum;$i++){
            if($cat[$i]==$_POST['sel_category']){
               $cnum2=$i+1;
               break;
            }
        }        
        
        
        
        
        
        
        
        try {
          $db = new PDO($dsn, $dbUser, $dbPass);
          $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $sql = 'INSERT INTO shuunyuu_shishututable (nengetsu,money,kategorie_ID) VALUES (:hiduke,:okane,:bangou)';
          $prepare = $db->prepare($sql);

          $prepare->bindValue(':hiduke', $_POST['hiduke'], PDO::PARAM_INT);
          $prepare->bindValue(':okane', $_POST['okane'], PDO::PARAM_INT);
          $prepare->bindValue(':bangou', $cnum2, PDO::PARAM_INT);
          $prepare->execute();

          $id = $db->lastInsertId();
          #echo '<p>結果</p>';
          #echo "<p>追加したレコードのID: " . h($id) . '</p>';
          #echo "<p><a href='showall.php'>確認</a></p>";
        } catch (PDOException $e) {
          echo 'エラーが発生しました。内容: ' . h($e->getMessage());
        }
      }
      ?>

</div>
      <div align="right"> <input type="button"style="WIDTH: 200px; HEIGHT: 20px"font size="10"onClick="location.href='index.php'" value="メニューに戻る" ></p>
</body>
</html>
