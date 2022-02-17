<?php
include_once "../base.php";
$dsn = "mysql:host=localhost;charset=utf8;dbname=portfolio";
$pdo = new PDO($dsn, 'root', '');

$acc = $_POST['acc'];
$pw = $_POST['pw'];

$sql = "select * from `member` where `acc`='$acc' && `pw`='$pw'";
$check = $pdo->query($sql)->fetch();


if ($acc == "Astour" || $pw == "astour") {
    to("../back.php");
} else {
    if (!empty($check)) {
        to("../index.php");
    } else {
        to("../front/login.php");
    }
}
