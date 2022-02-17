<?php include_once "base.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astour Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body id="Home">

    <div class="background">
        <div class="top">
            <div class="top1">
                <div class="logo"></div>
                <div class="topic">Astour</div>
            </div>
            <div class="top2">
                <a class="topbotton" href="#Home">
                    <h5>Home</h5>
                </a>
                <a class="topbotton" href="#Introducejump">
                    <h5>Introduce</h5>
                </a>
                <a class="topbotton" href="#portfoliotextjump">
                    <h5>Portfolio</h5>
                </a>
                <a class="topbotton" href="#Contactjump">
                    <h5>Contact</h5>
                </a>
                <a class="topbotton" href="./login.html">
                    <h5>Login</h5>
                </a>
            </div>
        </div>

        <!-- 輪播start -->
        <div class="d-flex justify-content-center">
            <div class="carousel1">
                <div id="carouselExampleControls " class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="./img/沙灘.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/沙灘.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/沙灘.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                    <!-- 輪播end -->
                </div>
            </div>
        </div>
        <h1 id="Introducejump"><a href="#Home">Introduce</a></h1>
        <div class="top">
            <div class="notes">
                <div class="notesp">
                    <form action="./api/save_resume.php" method="POST">
                        <tr>

                            <td>專長</td>
                            <br>
                            <td>
                                <textarea type="text" name="resume" style="width:300px;height:230px;"></textarea>
                                <input type="submit" value="修改確定">
                            </td>
                        </tr>


                    </form>
                    <form action="./api/save_text.php" method="POST">
                        <tr>

                            <td>自我介紹</td>
                            <br>
                            <td>
                                <textarea type="text" name="text" style="width:350px;height:230px;"></textarea>
                                 <input type="submit" value="修改確定">
                            </td>
                        </tr>
                    </form>
                </div>
                <div class="introduction">
                <form action="./api/save_img.php" method="POST">
                        <tr>

                            <td>履歷照片</td>
                            <br>
                            <td>
                                <input type="text" name="img">
                                <input type="submit" value="修改確定">
                            </td>
                        </tr>
                    </form>

                </div>
            </div>
        </div>
        <div class="top">
            <div class="portfoliotext" id="portfoliotextjump"><a href="#Home">My <br>Portfolio</a></div>
        </div>
        <div class="bordergray"></div>
        <div class="top3">
            <div class="portfolio a"></div>
            <div class="portfolio">
                <h1 class="d-flex justify-content-center">PHP</h1>
                <p class="portfoliop">
                    Lorem ipsum dolor sit amet, <br>
                    adipisicing elit. Eius, <br>
                    omnis explicaboreprehendert <br>
                    necessitatibus minima qu<br>
                    o vel ipsa, ea tempora alias <br>
                    itaque officiis dolor<br>
                    a, perspiciatis labore iste? Sunt.<br>
                    Lorem ipsum dolor sit amet, <br>
                    adipisicing elit. Eius, <br>
                    omnis explicaboreprehent <br>
                </p>
            </div>
        </div>
        <div class="bordergray"></div>
        <div class="top3">
            <div class="portfolio">
                <h1 class="d-flex justify-content-center">Design</h1>
                <p class="portfoliop">
                    Lorem ipsum dolor sit amet, <br>
                    adipisicing elit. Eius, <br>
                    omnis explicaboreprehendert <br>
                    necessitatibus minima qu<br>
                    o vel ipsa, ea tempora alias <br>
                    itaque officiis dolor<br>
                    a, perspiciatis labore iste? Sunt.<br>
                    Lorem ipsum dolor sit amet, <br>
                    adipisicing elit. Eius, <br>
                    omnis explicaboreprehent <br>
                </p>
            </div>
            <div class="portfolio b">portfolio1text</div>
        </div>
        <div class="bordergray"></div>
        <div class="top3">
            <div class="portfolio c"></div>
            <div class="portfolio">
                <h1 class="d-flex justify-content-center">Planning</h1>
                <p class="portfoliop">
                    Lorem ipsum dolor sit amet, <br>
                    adipisicing elit. Eius, <br>
                    omnis explicaboreprehendert <br>
                    necessitatibus minima qu<br>
                    o vel ipsa, ea tempora alias <br>
                    itaque officiis dolor<br>
                    a, perspiciatis labore iste? Sunt.<br>
                    Lorem ipsum dolor sit amet, <br>
                    adipisicing elit. Eius, <br>
                    omnis explicaboreprehent <br>
                </p>
            </div>
        </div>
        <div class="bordergray"></div>
        <div class="top3">
            <div class="portfolio1"></div>
            <div class="portfolio1"></div>
            <div class="portfolio1"></div>
        </div>
        <h1 id="Contactjump"><a href="#Home">Contact</a></h1>
        <div class="top">
            <footer class="footer"></footer>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>