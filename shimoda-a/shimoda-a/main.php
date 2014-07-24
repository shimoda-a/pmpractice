<!doctype html>
<html>
  <head>
    <center>
    <meta charset="UTF-8">
    <title>サンプルアプリケーション</title>
  </head>
  <body>
    <br><br><br>
    <h1>シューズ販売管理システム</h1>
    <ul>
      <form action="logout.php" method="post">
      <input type="submit" value="ログアウト">
      </form>
          <h2>在庫確認画面</h2>
         
    </ul>
    <br><br>
    <table>
      <table border="1" cellspacing="0" cellpadding="4" id="table1">
      <tr bgcolor="#cccccc">

        <th>品番</th>
        <th>商品名</th>
        <th>サイズ</th>
        <th>在庫数</th>
        <th colspan="2">操作</th>
 
      </tr>
      <?php
      //データベースに接続
      require_once 'database_conf.php';
      $db = new PDO($dsn, $dbUser, $dbPass);
      $sql = 'select * from items';
      $prepare = $db->prepare($sql);
      $prepare->execute();
      $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
      foreach ($result as $item) {
        $id=$item['id'];
        $itemno = $item['itemno'];
        $name = $item['name'];
        $size = $item['size'];
        $stock = $item['stock'];
        echo "<tr><form action='edit.php' method='post'>";
        echo "<input type='hidden' name='dbid0' value='$id' />";
        echo "<td><input type='text' name='hinban0' value='$itemno' /></td>";
        echo "<td><input type='text' name='syouhin0' value='$name' /></td>";
        echo "<td><input type='text' name='saizu0' value='$size' /></td>";
        echo "<td><input type='text' name='zaiko0' value='$stock' /></td>";
        echo "<td><input type='submit' value='更新' name='edit'/>";
        echo "<input type='submit' value='削除' name='delete'/></td>";
        echo "</form></tr>";
      }
      ?>
      

    </table>
      <br><br><br><br><br>

    <table border="1" cellspacing="0" cellpadding="4" id="table1">
      <tr bgcolor="#cccccc">
        <th>品番</th>
        <th>商品名</th>
        <th>サイズ</th>
        <th>在庫数</th>
        <th>操作</th>
      </tr>
      <tr>
      <form action="add.php" method="post">
        <td class="hinban"><input type="text" name="hinban0" value="" size="10" maxlength="20" /></td>
        <td class="syouhin"><input type="text" name="syouhin0" value="" size="10" maxlength="20" /></td>
        <td class="saizu"><input type="text" name="saizu0" value="" size="10" maxlength="20" /></td>
        <td class="zaiko"><input type="text" name="zaiko0" value="" size="10" maxlength="20" /></td>
        <td><input type="submit" value="追加"/></td>
      </form>
     <br>
    </tr>
  </table>
    </centre>
    <br><br><br><br>
</body>
</html>
