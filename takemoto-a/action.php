<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>矢吹ホテルアンケート結果</title>
<meta charset="utf-8">
<style type="text/css">
#header {
height: 50px;
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
#body{
width: 1000px;
margin: auto;
background-color: #F6E3CE
}
</style>
</head>

<div id="body">
<div id="header"><div id="left"><h1>矢吹HOTEL</h1></div></div>
<br>
<div id="center"><h2>回答，誠にありがとうございます．</h2></div>
<div id="center"><h2>お間違えなければ送信ボタンをお願いします</h2></div>
<div id="left"><h1>アンケート回答内容</h1></div>
<br>

<p>1．今回の宿泊はどのようにしてお決めになられましたか？</p>
<br>
回答：<font color="red"> <?php echo $_POST["q1"] ?></font>
<br><br>
<p>2. 今回のホテルの利用目的は何ですか？</p>
<br>
回答：<FONT COLOR="RED"><?php echo $_POST["q2"] ?></FONT>
<br><br>
<p>3．当ホテルをご利用したのは何回目ですか？</p>
<br>
回答：<FONT COLOR="RED"><?php echo $_POST["q3"] ?></FONT>
<br><br>
<p>4．フロントの対応はいかがでしたか？</p>
<br>
回答：<FONT COLOR="RED"><?php echo $_POST["q4"] ?></FONT>
<br><br>
<p>5．お部屋はいかがでしたか？</p>
<br>
回答：<FONT COLOR="RED"><?php echo $_POST["q5"] ?></FONT>
<br><br>
<p>6．お風呂はいかがでしたか？</p>
<br>
回答：<FONT COLOR="RED"><?php echo $_POST["q6"] ?></FONT>
<br><br>
<p>7. ご宿泊いただきましてのご意見，ご感想，ご希望をお書きください</p>
<br>
回答：<FONT COLOR="RED"><?php echo $_POST["q7"] ?></FONT>
<br><br>
<p>8．差しつかえございませんでしたら，お名前，ご住所，メールアドレス，電話番号の記入をお願いします</p>
<br>
お名前<br><FONT COLOR="BLUE"><?php echo $_POST["name"] ?></FONT><br>
ご住所<br><FONT COLOR="BLUE"><?php echo $_POST["address"] ?></FONT><br>
メールアドレス<br><FONT COLOR="BLUE"><?php echo $_POST["email"] ?></FONT><br>
電話番号<br><FONT COLOR="BLUE"><?php echo $_POST["tel"] ?></FONT><br>
<div id="center"><br />
    <form action="save3.php" method="post">
    <input type="hidden" name="q1"value="<?php echo $_POST["q1"] ?>">
    <input type="hidden" name="q2"value="<?php echo $_POST["q2"] ?>">
    <input type="hidden" name="q3"value="<?php echo $_POST["q3"] ?>">
    <input type="hidden" name="q4"value="<?php echo $_POST["q4"] ?>">
    <input type="hidden" name="q5"value="<?php echo $_POST["q5"] ?>">
    <input type="hidden" name="q6"value="<?php echo $_POST["q6"] ?>">
    <input type="hidden" name="q7"value="<?php echo $_POST["q7"] ?>">
    <input type="hidden" name="name"value="<?php echo $_POST["name"] ?>">
    <input type="hidden" name="address"value="<?php echo $_POST["address"] ?>">
    <input type="hidden" name="email"value="<?php echo $_POST["email"] ?>">
    <input type="hidden" name="tel"value="<?php echo $_POST["tel"] ?>">
<input type="submit" value="確定"><input type="button" value="戻る" onclick="history.back();">
</form>
</div>


</div>
</body>
</html>


