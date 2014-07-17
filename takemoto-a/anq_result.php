<?php
session_start();
if (!isset($_SESSION["user_name"])) {

$no_login_url = "login.php";
header("Location: {$no_login_url}");
exit;
} else {
print "";
}
?>
<html><head>
        <title>矢吹ホテルアンケート回答結果リスト</title>
        <meta charset="utf-8">
           <style type="text/css">
body {
background-color: #F6E3CE;
color: #000000;
}

#header2 {
height: 150px;
width: 100%; 
background: #2E2E2E  repeat-x;
}
#header {
height: 100px;
width: 100%; 
background: #2A7F19  repeat-x;
}
#center {
text-align: center; 
}
#left {
text-align: left; 
}
#right {
text-align: right;
}
</style>
    </head>
  <div id="body"><div id="header"></div><div id="right"><a href="index.php">ホームへ戻る</a></div>
             
 <?php
$srv = "175.184.35.194"; 
$id = "cwv1gk4_aga"; 
$passwd = "N2nWGDtu"; 
$dbn = "cwv1gk4_aga"; 
$sql = "SELECT * FROM questions"; 
$db = mysql_connect($srv,$id,$passwd);
mysql_select_db($dbn,$db);
mysql_set_charset("utf8", $db);
$rs = mysql_query($sql,$db);
$num = mysql_num_fields($rs);


print("<TABLE border='2'><TR>");
for($i=0; $i<$num; $i++) {
 print("<TH>".mb_convert_encoding(mysql_field_name($rs,$i),"utf-8","utf-8")."</TH>");
}
print("</TR>");
while($row = mysql_fetch_array($rs)) {
  print("<TR>");
  for($j=0; $j<$num; $j++) {
    print("<TD>".mb_convert_encoding($row[$j],"utf-8","utf-8")."</TD>");
  }
  print("</TR>");
}
print("</TABLE>"); 
mysql_free_result($rs);
mysql_close($db);
//--- 終了 --->
?>
       
    </div>
</html>