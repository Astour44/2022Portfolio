<?php
include_once "../base.php";

$acc = $_POST['acc'];
$pw = $_POST['pw'];


$check = $Mem->math('count', '*', ['acc' => $acc, 'pw' => $pw]);

if ($acc == "ASTOUR" && $pw == "ASTOUR") {
    to("../back.php");
} elseif ($check > 0) {
    $_SESSION['member'] = $acc;
    echo $check;
    to("../index.php");
} else {
    to("../front/login.php");
}
