<html>
    <head>
        <meta charset="UTF-8">
        <title>コメント表示</title>
    </head>
    <body>
        <p>クリックした場所の店名</p>
        <a>サイホーンラーメン</a>
        
        <p>食べログへ飛べるリンク</p>
        <a href="http://tabelog.com/chiba/A1202/A120204/12028211/">麺屋　小町</a>
    <br>
        <p>(コメント)</p>             
        <iframe src="view.php" width="500" height="300">
        </iframe>
        <form action="comment.php" method="post">
            <dl>
                <dt>名前</dt>
                <dd><input name="user" type="input" /></dd>
                <dt>コメント</dt>
                <dd><textarea name="comment" rows="5" cols="30"></textarea></dd>
                <dt></dt>
                <dd><input type="submit" value="投稿する" /></dd>
            </dl>
        </form>
    </body>
</html>
