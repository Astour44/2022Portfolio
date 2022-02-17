<?php 
include_once "../base.php";



$img=$_FILES['img'];
move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
$imgid=reset($img) ;
$Int->save(['id'=>1,'img'=>$imgid]);

to("../back.php");



?>


