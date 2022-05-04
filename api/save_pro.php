<?php
include_once "../base.php";


if ($_FILES['img']['error'] == 4) {
    echo '';
} else {

    move_uploaded_file($_FILES['img']['tmp_name'], "../img/" . $_FILES['img']['name']);
    $img = $_FILES['img'];
    $imgid = reset($img);
    //echo $imgid;
    $savetext = $_FILES['img']['size'];
    $Pro->save(['fil' => $savetext . '1', 'text' => $savetext, 'img' => $imgid]);
    echo $savetext;
}


$rows = $Pro->all();
foreach ($rows as $key => $row) {
    if (isset($_POST[$row['fil']])) {

        $textfil = ($_POST[$row['fil']]); //輸入進來的文字

        $textid = $row['id'];
        $Pro->save(['id' => $textid , 'text' => $textfil]);
        
    }
}



$rows = $Pro->all();
foreach ($rows as $key => $row) {
    if (isset($_POST[$row['id']])) {
        $Pro->del($row['id']);
    }
}
to("../back.php");
