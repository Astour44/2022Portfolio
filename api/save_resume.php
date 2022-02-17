<?php
include_once "../base.php";
$resume=$_POST['resume'];

$Int->save(['id'=>1,'resume'=>$_POST['resume']]);

to("../back.php");


?>