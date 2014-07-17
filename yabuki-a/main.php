<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <style>
        div, table {display:inline;}
        .inroom {color:blue;}
        .notinroom {color:black;}
    </style>
    <body>

        <table border="0" width="100%" vspace="100">
            <tr>
            <form>
                <td align="left">     <input type="image"src="更新.PNG"onclick=location.reload()></td>
            </form>
            <form action="present.php" method="post">
                <td align="right">    <input type="image"src="imairu.PNG"width="500"height="175"/></td>
            </form>
            <form action="taishitu.php" method="post"> 
                <td align="center">   <input type="image"src="taisitu.PNG"width="500"height="175"/></td>
            </form>
            <form action="logout.php" method="post">
                <td align="right"><input type="image"src="roguauto.PNG"width="250"height="150"/></td>
            </form>
        </tr>



    </table>
    <div style="margin:75px;padding:0px;" align="left">

        <?php
        error_reporting(E_ALL & ~E_NOTICE);
        //データベースに接続
require_once 'database_conf.php';

        //堀内研の在籍者をselect
        $sql = "select users.name,users.inroom  from users,labos where labo = 1 and users.labo=labos.id";
        $prepare = $db->prepare($sql);
        $prepare->execute();
        $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


        //テーブルで表示（showall.php）
        echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
        echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 堀内研究室 　</td>
                    </tr>';
        foreach ($result as $person) {
            echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
        }
        echo '</table>';
        ?>
    </tbody>
</table>
</div>
<div style="margin:75px;padding:0px;" align="left">

</tr>
<?php
error_reporting(E_ALL & ~E_NOTICE);
//データベースに接続
require_once 'database_conf.php';

//竹本研の在籍者をselect
$sql = "select users.name,users.inroom  from users,labos where labo = 2 and users.labo=labos.id";
$prepare = $db->prepare($sql);
$prepare->execute();
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);


//テーブルで表示（showall.php）
echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 竹本研究室 　</td>
                    </tr>';
foreach ($result as $person) {
    echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
}
echo '</table>';
?>
</tbody>
</table>

</tbody>
</table>
</div>
<div style="margin:75px;padding:0px;" align="left">

    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    //矢吹研の在籍者をselect
    $sql = "select users.name,users.inroom  from users,labos where labo = 3 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 矢吹研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>

</tbody>
</table>
</div>
<div style="margin:75px;padding:0px;" align="left">

    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    //下田研の在籍者をselect
    $sql = "select users.name,users.inroom  from users,labos where labo = 4 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 下田研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>
</div>
<div style="margin:75px;padding:0px;" align="left">

    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    //田隈研の在籍者をselect
    $sql = "select users.name,users.inroom  from users,labos where labo = 5 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 田隈研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>
</div>
<div style="margin:75px;padding:0px;" align="left">

    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    //五百井研の在籍者をselect
    $sql = "select users.name,users.inroom  from users,labos where labo = 6 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 五百井研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>
</div>
<div style="margin:55px;padding:0px;" align="left">

    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    //久保研の在籍者をselect
    $sql = "select users.name,users.inroom  from users,labos where labo = 7 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 久保研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>
</tbody>
</table>
<br><br/><br><br/><br><br/><br><br/><br><br/><br><br/><br><br/><br><br/><br><br/>
</div>
<div style="margin:75px;padding:0px;" align="left">

    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    //新井研の在籍者をselect
    $sql = "select users.name,users.inroom  from users,labos where labo = 8 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 新井研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>
</tbody>
</table>
</div>
<div style="margin:75px;padding:0px;" align="left">

    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    $sql = "select users.name,users.inroom  from users,labos where labo = 9 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 武田研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>
</tbody>
</table>
</div>
<div style="margin:75px;padding:0px;" align="left">

    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    //下村研の在籍者をselect
    $sql = "select users.name,users.inroom  from users,labos where labo = 10 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 下村研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>
</tbody>
</table>
</div>

<div style="margin:75px;padding:0px;" align="left">

    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    //鴻巣研の在籍者をselect
    $sql = "select users.name,users.inroom  from users,labos where labo = 11 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 鴻巣研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>
</tbody>
</table>
</div>
<div style="margin:75px;padding:0px;" align="left">

    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    //遠山研の在籍者をselect
    $sql = "select users.name,users.inroom  from users,labos where labo = 12 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 遠山研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>
</tbody>
</table>
</div>
<div style="margin:75px;padding:0px;" align="left">
    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    //加藤研の在籍者をselect
    $sql = "select users.name,users.inroom  from users,labos where labo = 13 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 加藤研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>
</tbody>
</table>
</div>
<div style="margin:75px;padding:0px;" align="left">

    <?php
    error_reporting(E_ALL & ~E_NOTICE);
    //データベースに接続
require_once 'database_conf.php';

    //谷本研の在籍者をselect
    $sql = "select users.name,users.inroom  from users,labos where labo = 14 and users.labo=labos.id";
    $prepare = $db->prepare($sql);
    $prepare->execute();
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);


    //テーブルで表示（showall.php）
    echo '<table  style="border-collapse: collapse;border:2px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">';
    echo ' <tr>
                        <td style="border:2px solid #000000;text-align:center;">　 谷本研究室 　</td>
                    </tr>';
    foreach ($result as $person) {
        echo '<tr><td style="border:2px solid #000000;text-align:center;" class="' . ($person['inroom'] == 1 ? 'inroom' : 'notinroom') . '">' . $person['name'] . '</td></tr>';
    }
    echo '</table>';
    ?>
</tbody>
</table>

</div>


</tbody>
</table>
</html>
