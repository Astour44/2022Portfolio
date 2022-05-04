<?php
include_once "../base.php";
$textn=$_POST['text'];
//dd($_POST['text']);
$Int->save(['id'=>1,'text'=>$textn]);

to("../back.php");


?>