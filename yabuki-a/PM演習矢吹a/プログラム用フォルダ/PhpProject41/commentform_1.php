<html>
    <head>
        <meta charset="UTF-8">
        <title>コメント表示のサンプル</title>
    </head>
    <body>
        <table border="1" width="120" height="120">
            <tr>
                <td>クリックした場所の店名<br>
                サイホーンラーメン屋</td>
            </tr>
            <tr>
                <td>食べログへ飛べるリンク
                <a href="http://tabelog.com/chiba/A1202/A120204/12028211/">麺屋　小町</a>
                </td>
            </tr>
            <tr>
                <td>(コメント)             
                <iframe src="view_1.php" width="500" height="300">
                </iframe>
                <form action="comment_1.php" method="post">
                    <dl>
                    <dt>名前</dt>
                    <dd><input name="user" type="input" /></dd>
                    <dt>コメント</dt>
                    <dd><textarea name="comment" rows="5" cols="30"></textarea></dd>
                    <dt></dt>
                    <dd><input type="submit" value="投稿する" /></dd>
                    </dl>
                </td>
                </tr>
        </table>
        </form>
    </body>
</html>
