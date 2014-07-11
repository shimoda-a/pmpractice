<html>
    <head>
        <meta charset="UTF-8">
        <title>コメント表示のサンプル</title>
    </head>
    <body>
        <table border="1" width="120" height="120">
            <tr>
                <td>クリックした場所の店名

                    <?php
                    try {
                        $dsn = 'mysql:host=localhost;dbname=ramens;charset=utf8';
                        $dbUser = 'test';
                        $dbPass = 'pass';

                        $db = new PDO($dsn, $dbUser, $dbPass);
                    } catch (PDOException $e) {
                        echo "接続できませんでした" . $e->getMessage();
                    }

                    try {
                        $sql = "SELECT shopname from map";
                        $prepare = $db->prepare($sql);
                        $prepare->execute();
                        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

                        echo '<dl>';
                        foreach ($result as $map) {

                            $shopname = $map['shopname'];
                            echo "<dt>$shopname</dt>";
                        }
                        echo '</dl>';
                    } catch (PDOException $e) {
                        echo "取得失敗" . $e->getMessage();
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>食べログへ飛べるリンク
                    <?php
                    try {
                        $sql = "SELECT link from map";
                        $prepare = $db->prepare($sql);
                        $prepare->execute();
                        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

                        echo '<dl>';
                        foreach ($result as $map) {

                            $link = $map['link'];
                            echo "<dt>$link</dt>";
                        }
                        echo '</dl>';
                    } catch (PDOException $e) {
                        echo "取得失敗" . $e->getMessage();
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>（コメント）

                    <iframe src="view.php" width="500" height="300">
                    </iframe>
                    <form action="comment.php" method="post">
                        <dl>
                            <dt>名前</dt>
                            <dd><input name="name" type="input" /></dd>
                            <dt>コメント</dt>
                            <dd><textarea name="comments" rows="5" cols="30"></textarea></dd>
                            <dt></dt>
                            <dd><input type="submit" value="投稿する" /></dd>
                        </dl>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>
