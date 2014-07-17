<?php
session_start();

if (!isset($_SESSION["user_name"])) {

$no_login_url = login.php";
header("Location: {$no_login_url}");
exit;
} else {
print "ログイン成功";
}
?>