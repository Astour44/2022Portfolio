<div class="top">
    <div class="top1">
        <div class="logo"></div>
        <div class="topic">
            <?php
            if (isset($_SESSION['member'])) {
                echo 'Hi~'.$_SESSION['member'];
            } else {
                echo '';
            }
            ?>


        </div>
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
        <?php
        if (isset($_SESSION['member'])) {
        ?>
            <a class="topbotton" href="./api/logout.php">
                <h5>Logout</h5>
            <?php
        } else {
            ?>
                <a class="topbotton" href="./front/login.php">
                    <h5>Login</h5>
                <?php
            } ?>
                </a>
    </div>
</div>