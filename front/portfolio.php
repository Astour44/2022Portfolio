<div class="top">
    <div class="portfoliotext" id="portfoliotextjump"><a href="#Home">My <br>Portfolio</a></div>
</div>
<div class="bordergray"></div>
<div class="top3">


    <?php
    $rows = $Mem->all();
    foreach ($rows as $row => $value) {
        if ($row % 2 == 0) {
            echo "可以被整除";
        } else {
            echo "不能被整除";
        }
        echo "<br>";
    }
    ?>


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