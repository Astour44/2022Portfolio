<?php
include_once "../base.php";
$text=$_POST['text'];

$Int->save(['id'=>1,'text'=>$_POST['text']]);

to("../back.php");















?>