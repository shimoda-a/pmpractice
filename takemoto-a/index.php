<!DOCTYPE html>
<html lang="ja"> 
<head>
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
<meta http-equiv="Content-Type" content="text/html;>
<meta charset="utf-8">
<div id="body">
<div id="header"><div id="left"><h1>矢吹HOTEL</h1></div><div  id="right"><h4><a href="login.php">管理者用ページ</a></h4></div></div>
<br>
    <form method="post" action="action.php">
        <br>
        <p>1．今回の宿泊はどのようにしてお決めになられましたか？</p><br>
            <input type="radio" name="q1" value="インターネット" checked> インターネット
            <input type="radio" name="q1" value="知人からの紹介"> 知人からの紹介
            <input type="radio" name="q1" value="雑誌"> 雑誌
            <input type="radio" name="q1" value="TV"> TV
            <input type="radio" name="q1" value="その他"> その他
        <br>
        <p>2. 今回のホテルの利用目的は何ですか？</p>
            <textarea name="q2" cols="50" rows="5"></textarea>
        <br>
        <p>3．当ホテルをご利用したのは何回目ですか？</p><br>
            <input type="radio" name="q3" value="初めて" checked>初めて 
            <input type="radio" name="q3" value="1回"> 1回
            <input type="radio" name="q3" value="2回"> 2回
            <input type="radio" name="q3" value="3回以上">3回以上
        <br>
        <p>4．フロントの対応はいかがでしたか？</p><br>
            <input type="radio" name="q4" value="良い" checked>良い 
            <input type="radio" name="q4" value="やや良い"> やや良い
            <input type="radio" name="q4" value="普通">普通
            <input type="radio" name="q4" value="やや悪い"> やや悪い
            <input type="radio" name="q4" value="悪い"> 悪い
        <br>
        <p>5．お部屋はいかがでしたか？</p><br>
            <input type="radio" name="q5" value="良い" checked>良い 
            <input type="radio" name="q5" value="やや良い"> やや良い
            <input type="radio" name="q5" value="普通">普通
            <input type="radio" name="q5" value="やや悪い"> やや悪い
            <input type="radio" name="q5" value="悪い"> 悪い
        <br>
        <p>6．お風呂はいかがでしたか？</p><br>
            <input type="radio" name="q6" value="良い" checked>良い 
            <input type="radio" name="q6" value="やや良い"> やや良い
            <input type="radio" name="q6" value="普通">普通
            <input type="radio" name="q6" value="やや悪い"> やや悪い
            <input type="radio" name="q6" value="悪い"> 悪い
        <br>
        <p>7. ご宿泊いただきましてのご意見，ご感想，ご希望をお書きください</p>
            <textarea name="q7" cols="50" rows="5"></textarea>

        <p>8．差しつかえございませんでしたら，お名前，ご住所，メールアドレス，電話番号の記入をお願いします</p>
            お名前<br><input type="text" name="name"><br>
            ご住所<br><input type="text" name="address"size="70"><br>
            メールアドレス<br><input type="email" name="email"size="70"><br>
            電話番号<br><input type="tel" name="tel"size="20"><br>
        <br>
        <br>
        <div id="center"><input type="submit" value="送信する"></div>
    </form>
</div>>
</html>
