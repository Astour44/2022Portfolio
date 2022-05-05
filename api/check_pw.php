<?php
include_once "../base.php";

//問題start
 $dsn = "mysql:host=localhost;charset=utf8;dbname=portfolio";
 $pdo = new PDO($dsn, 'root', '');
//$dsn = "mysql:host=localhost;charset=utf8;dbname=s1100425";
//$pdo = new PDO($dsn, 's1100425', 's1100425');
//問題end

$acc = $_POST['acc'];
$pw = $_POST['pw'];

$sql = "select * from `member` where `acc`='$acc' && `pw`='$pw'";
$check = $pdo->query($sql)->fetch();


if ($acc == "Astour" || $pw == "astour") {
    to("../back.php");
} else {
    if ($check > 0) {
        $_SESSION['member']=$acc;
        to("../index.php");
    } else {
        to("../front/login.php");
    }
}
