<?php
require_once 'h.php';

if(isset($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4'],$_POST['q5'],$_POST['q6'],$_POST['q7'],$_POST['name'],$_POST['address'],$_POST['email'],$_POST['tel'])){
    try {
        
   $dsn = 'mysql:host=175.184.35.194;dbname=cwv1gk4_aga;charset=utf8';
 $db = new PDO($dsn, 'cwv1gk4_aga', 'N2nWGDtu');
 
 $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 $sql = 'insert into questions (q1,q2,q3,q4,q5,q6,q7,name,address,email,tel) values (:q1,:q2,:q3,:q4,:q5,:q6,:q7,:name,:address,:email,:tel)';
$prepare=$db->prepare($sql);
$prepare->bindValue(':q1', $_POST['q1'],PDO::PARAM_STR);
$prepare->bindValue(':q2', $_POST['q2'],PDO::PARAM_STR);
$prepare->bindValue(':q3', $_POST['q3'],PDO::PARAM_STR);
$prepare->bindValue(':q4', $_POST['q4'],PDO::PARAM_STR);
$prepare->bindValue(':q5', $_POST['q5'],PDO::PARAM_STR);
$prepare->bindValue(':q6', $_POST['q6'],PDO::PARAM_STR);
$prepare->bindValue(':q7', $_POST['q7'],PDO::PARAM_STR);
$prepare->bindValue(':name', $_POST['name'],PDO::PARAM_STR);
$prepare->bindValue(':address', $_POST['address'],PDO::PARAM_STR);
$prepare->bindValue(':email', $_POST['email'],PDO::PARAM_STR);
$prepare->bindValue(':tel', $_POST['tel'],PDO::PARAM_STR);
$prepare->execute();         
        
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
 
?>




<!DOCTYPE html>
<html lang="ja"> 
<script language="javascript">

</script>
<meta charset="utf-8">
<head>

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
<div id="center">
<font size="6">送信が完了しました。<br>
ブラウザ画面を閉じてください。<br>
<br>
<br>
</div>
<div id="header2">

<div id="center"> 
 <TABLE BORDER="0" WIDTH="80%" CELLSPACING="0" CELLPADDING="0"> 
 <TR> 
 <TD>  
<font color="#FFFFFF" size="7">
矢吹ホテル<br></font>
<font color="#FFFFFF" size="5">
連絡先：　xxx-xxx-xxx<br>
住所：　xxxxxxxxxxxxxx</font>
          
 </TD> 
 <TD ALIGN="right">  

<font color="#FFFFFF" size="4">
本サイトで得た情報は当ホテルの品<br>質向上のたえだけにご利用させてい<br>
ただきます。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
ご安心してお問い合わせ下さい。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
</font>
 </TD> 
 </TR> 
 </TABLE>  
 </div> 

<br>

</div>


</body>
</html>
