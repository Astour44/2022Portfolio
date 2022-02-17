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


</head>
<style>
    .change {
        opacity: 20%
    }

    .change:hover {
        opacity: 100%;
    }

    .left {
        display: flex;
        justify-content: space-between;
        margin-left: 40px;
        margin-right: 40px;
    }
</style>

<body>

    <div class="formbox">
        <div class="form-header">
            <h1><i class="fas fa-book-open">register</i></h1>
        </div>
        <!-- form -->
        <form action="../api/save_reg.php" method="POST">
            <div class="form-group left">
                <label for="email"><i class="far fa-envelope">Name</i></label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group left">
                <label for="email"><i class="far fa-envelope">Email</i></label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-group left">
                <label for="email"><i class="far fa-envelope">Account</i></label>
                <input type="text" name="acc" id="acc">
            </div>
            <div class="form-group left">
                <label for="username"><i class="fas fa-address-card">password</i></label>
                <input type="text" name="pw" id="pw">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-outline-light" ><i class="fas fa-paper-plane"> r e g </i></button>                
                <button type="button" class="btn btn-outline-light" onclick="reset()"><i class="fas fa-paper-plane"><a href="./reg.php" style="color:white;"> R e s e t</a></i></button>
                <button type="button" class="btn btn-outline-light"><i class="fas fa-paper-plane"><a href="./login.php" style="color:white;"> L o g i n</a></i></button>
            </div>
            
        </form>
    </div>
    </div>

</body>






</html>