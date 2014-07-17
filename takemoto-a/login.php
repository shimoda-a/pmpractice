<?php
require_once 'h.php';
?>
<?php
session_start();

$error_message = "";

if (isset($_POST["login"])) {


if ($_POST["user_name"] == "php" && $_POST["password"] == "password") {

$_SESSION["user_name"] = $_POST["user_name"];

$login_url ="anq_result.php";
header("Location: {$login_url}");
exit;
}
$error_message = "ユーザ名もしくはパスワードが違っています。";
}
?>



<!DOCTYPE html>
<html lang="ja"> 

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
<body>
<div id="header">
</div>
<br>
<br>
<br>
<br>
<center >
    <?php
if ($error_message) {
print '<font color="red">'.$error_message.'</font>';
}
?>
    <form method="post" action="login.php">
<font size="6">
ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="user_name" size="35" maxlength="6"><br>
<br>
<br>
<br>
PASS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" name="password" size="30" maxlength="12">
</font>
  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<input type="submit"name="login"value="ログイン">
<br> </form>
<br>
</center>
<div id="header2">

<CENTER> 
 <TABLE BORDER="0" WIDTH="80%" CELLSPACING="0" CELLPADDING="0"> 
 <TR> 
 <TD>  
<font color="#FFFFFF" size="7">
矢吹ホテル<br>
<font color="#FFFFFF" size="5">
連絡先：　xxx-xxx-xxx<br>
住所：　xxxxxxxxxxxxxx
          
 </TD> 
 <TD ALIGN="right">  

<font color="#FFFFFF" size="4">
<p>本サイトで得た情報は当ホテルの品質向上</p>
<p>のためだけにご利用させていただきます。</p>
<p>ご安心してお問い合わせ下さい。</p>

 </TD> 
 </TR> 
 </TABLE>  
 </CENTER> 


</font>


<br>

</div>


</body>
</html>
