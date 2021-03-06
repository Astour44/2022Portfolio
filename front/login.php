<?php
include_once "../base.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style1.css">
    <link rel="stylesheet" href="../css/basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./js/js.js"></script>
    <script src="./js/jquery.js"></script>


</head>
<style>
    .change {
        opacity: 20%
    }

    .change:hover {
        opacity: 100%;
    }
</style>

<body>

    <div class="formbox">
        <div class="form-header">
            <h1><i class="fas fa-book-open">login</i></h1>
        </div>

        <form action="../api/check_pw.php" method="POST">
            <div class="form-group">
                <label for="acc"><i class="far fa-envelope">Account&ensp;</i></label>
                <input type="text" name="acc" id="acc">
            </div>
            <div class="form-group">
                <label for="pw"><i class="fas fa-address-card">password</i></label>
                <input type="password" name="pw" id="pw">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-light"><i class="fas fa-paper-plane"> S E N D</i></button>
                <button type="button" class="btn btn-outline-light"><a href="./reg.php" style="color:white;"> <i class="fas fa-paper-plane"> R e g i s t e r</a></i></button>
                <button type="button" class="btn btn-outline-light"><a href="../index.php" style="color:white;"> <i class="fas fa-paper-plane"> H o m e</a></i></button>
            </div>
        </form>
    </div>
    </div>




</body>

</html>