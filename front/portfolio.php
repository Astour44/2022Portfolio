<div class="top">
    <div class="portfoliotext" id="portfoliotextjump"><a href="#Home">My <br>Portfolio</a></div>
</div>
<?php
$rows = $Pro->all();
foreach ($rows as $row => $value) {
    if ($row % 2 == 0) {
?>
        <div class="bordergray"></div>
        <div class="top3">
            <div class="portfoliofront a">
                <a href="<?= $value['address']; ?>"><img src="./img/<?= $value['img']; ?>" alt="" width="100%" height="100%"></a>

            </div>
            <div class="portfoliofronttext">
                <h1 class="d-flex justify-content-center"></h1>
                <p class="portfoliop">
                    <?= $value['text']; ?>
                </p>
            </div>
        </div>

    <?php
    } else {
    ?>
        <div class="bordergray"></div>
        <div class="top3">
            <div class="portfoliofronttext">
                <h1 class="d-flex justify-content-center"></h1>
                <p class="portfoliop">
                    <?= $value['text']; ?>
                </p>
            </div>
            <div class="portfoliofront b">
            <a href="<?= $value['address']; ?>"><img src="./img/<?= $value['img']; ?>" alt="" width="100%" height="100%"></a>
            </div>
        </div>
<?php
    }
    echo "<br>";
}
?>