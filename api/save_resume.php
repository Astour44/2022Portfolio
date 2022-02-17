<?php
include_once "../base.php";


$resume=$_POST['resume'];
$resumen=nl2br($resume);
$Int->save(['id'=>1,'resume'=>$resumen]);
to("../back.php");


?>