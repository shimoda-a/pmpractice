<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>表示条件画面</title>
  </head>
  <body
       bgcolor="#ffdead" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
        <div align="center"> <font size="10"  >
              表示条件画面
  <body>
    <div>
      <?php
      # h()関数☆レシピ221☆（安全にブラウザで値を表示したい）を読み込みます☆レシピ041☆（他のファイルを取り込んで利用したい）。
      require_once 'h.php';

      if (isset($_GET['hyoujinengetu'])) {
        require_once 'database_conf.php';
        require_once 'h.php';

        try {
          $db = new PDO($dsn, $dbUser, $dbPass);
          $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $sql = 'SELECT * FROM shuunyuu_shishututable WHERE nengetsu LIKE :word';
          $prepare = $db->prepare($sql);
          $prepare->bindValue(':word', '%' . $_GET['hyoujinengetu'] . '%', PDO::PARAM_STR);
          $prepare->execute();
          $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
$out=0;
                  $out_syokuhi=0;
                  $out_nitiyouzakka = 0;
                  $out_koutuuhi=0;
                  $out_goraku=0;
                  $out_kyouiku =0;
                  $out_ihuku=0;
                  $out_iryou=0;
                  $out_tuusinn=0;
                  $out_suidou_kounetu=0;
                  $out_sonota=0;
       $in=0;
                  $in_kyuuyo=0;
                   $in_tatekae=0;
                    $in_rinnzi=0;
                     $in_syouyo=0;
                      $in_sonota=0;
                      
                      foreach($result as $iremono) {
                          switch($iremono['kategorie_ID']){
                          case 1:
                              $out_syokuhi=$out_syokuhi+(int)$iremono['money'];
                              break;
                           case 2:
                              $out_nitiyouzakka=$out_nitiyouzakka+(int)$iremono['money'];
                              break;
                           case 3:
                              $out_koutuuhi=$out_koutuuhi+(int)$iremono['money'];
                              break;
                           case 4:
                              $out_goraku=$out_goraku+(int)$iremono['money'];
                              break;
                           case 5:
                              $out_kyouiku=$out_kyouiku+(int)$iremono['money'];
                              break;
                           case 6:
                              $out_ihuku=$out_ihuku+(int)$iremono['money'];
                              break;
                           case 7:
                              $out_iryou=$out_iryou+(int)$iremono['money'];
                              break;
                          case 8:
                              $out_tuusinn=$out_tuusinn+(int)$iremono['money'];
                              break;
                          case 9:
                              $out_suidou_kounetu=$out_suidou_kounetu+(int)$iremono['money'];
                              break;
                          case 10:
                              $out_sonota=$out_sonota+(int)$iremono['money'];
                              break;
                          case 11:
                              $in_kyuuyo=$in_kyuuyo+(int)$iremono['money'];
                              break;
                    case 12:
                              $in_tatekae=$in_tatekae+(int)$iremono['money'];
                              break;
                           case 13:
                              $in_rinnzi=$in_rinnzi+(int)$iremono['money'];
                              break;
                           case 14:
                              $in_syouyo=$in_syouyo+(int)$iremono['money'];
                              break;
                           case 15:
                              $in_sonota=$in_sonota+(int)$iremono['money'];
                              break;
                          }
                      }
                  $in=$in_kyuuyo+$in_rinnzi+$in_sonota+$in_syouyo+$in_tatekae;
                  $out=$out_goraku+$out_ihuku+$out_iryou+$out_koutuuhi+$out_kyouiku+$out_nitiyouzakka+$out_sonota+$out_suidou_kounetu+$out_syokuhi+$out_tuusinn;
                  $sub=$in-$out;
                  
                  echo'<p>収支結果</p>';
                  echo h($_GET['hyoujinengetu']);
                  echo'<br>';
                
          echo '<table border="3" width="100%"　align="left">';
                  echo'<td height="100">収支:' . h($sub);
                  echo'<br>';
                  echo'<td align="left">収入:' . h($in);
                  echo'<br>';
                  echo'<td align="left">支出:' . h($out);
                  echo'<br>';
                   echo'</table>';
                  
                   echo'<div>';
                  echo'<br>';
                  echo'<table border="3" width="50%"　align="left>';
                  echo'<tr>';
                  echo'<td align="left">カテゴリ別支出';
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">食費:' . h($out_syokuhi);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">日用雑貨:' . h($out_nitiyouzakka);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">交通費:' . h($out_koutuuhi);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">娯楽:' . h($out_goraku);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">教育費:' . h($out_kyouiku);
                 echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">衣服:' . h($out_ihuku);
                echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">医療:' . h($out_iryou);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">通信:' . h($out_tuusinn);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">水道・光熱:' . h($out_suidou_kounetu);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">その他:' . h($out_sonota);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<br>';
                  echo'</table>';
                  
                  echo'<div>';
                  echo'<br>';
                  echo'<table border="3" width="50%"　align="left>';
                  echo'<tr>';
                  echo'<td align="left">カテゴリ別収入';
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">給与:' . h($in_kyuuyo);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">立替金返済:' . h($in_tatekae);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">臨時収入:' . h($in_rinnzi);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">賞与:' . h($in_syouyo);
                  echo'</tr>';
                  echo'<tr>';
                  echo'<td align="left">その他:' . h($in_sonota);
                 echo'</tr>';
                  echo'<tr>';
                   echo'</table>';
                  
                  
                  
                   
                 
                  
              
                
          #echo '<p>結果</p>';
          #echo '<ul>';
          #foreach ($result as $tweet) {
           # echo '<li>' . h($tweet['syuunyuu_shisyutsu_ID']) .  h($tweet['nengetsu'])  . h($tweet['money']) .  h($tweet['kategorie_ID']) . '</li>';
          #}
          #echo '</ul>';
        } catch (PDOException $e) {
          echo 'エラーが発生しました。内容: ' . h($e->getMessage());
        }
      }
      ?>
        
        <form method="get" action="search_2_1_1_1.php"><br>
<p>表示年月
<br><input type="text" name="hyoujinengetu" value="" autofocus></p>
<p><input type="submit"font size="10" value="表示"></p>

        </form>　
       
</div>
      <div align="right"> <input type="button"style="WIDTH: 200px; HEIGHT: 20px"font size="10"onClick="location.href='index.php'" value="メニューに戻る" ></p>
</body>
</html>
