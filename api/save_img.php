<?php 
include_once "../base.php";




move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
$img=$_FILES['img'];
$imgid=reset($img) ;
$Int->save(['id'=>1,'img'=>$imgid]);

to("../back.php");



?>


