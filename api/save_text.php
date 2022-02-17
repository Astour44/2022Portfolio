<?php
include_once "../base.php";
$text=$_POST['text'];
$textn=nl2br($text);
$Int->save(['id'=>1,'text'=>$textn]);

to("../back.php");


?>