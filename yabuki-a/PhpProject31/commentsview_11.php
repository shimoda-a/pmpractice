<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
                        $sql = "SELECT name,comment,shopid from comments where shopid = 11";
                        $prepare = $db->prepare($sql);
                        $prepare->execute();
                        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);

                        echo '<dl>';
                        foreach ($result as $comments) {

                            $name = $comments['name'];
                            $comment = $comments['comment'];
                            echo "<dt>$name</dt><dt>$comment</dt>";
                        }
                        echo '</dl>';
                    } catch (PDOException $e) {
                        echo "取得失敗" . $e->getMessage();
                    }
                    ?>
</body>
</html>