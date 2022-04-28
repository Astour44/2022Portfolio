<div class="top">
    <div class="portfoliotext" id="portfoliotextjump"><a href="#Home">My <br>Portfolio</a></div>
</div>
<div class="bordergray"></div>

<div class="top3">
    <div class="portfolio">
        <form action="./api/save_pro.php" method="POST">
            <!-- 這裡放圖片新增 -->
            <h2>作品集圖片</h2>
            <?php
            $rows = $Pro->all();
            foreach ($rows as $key => $row){
                echo $key;
                echo '&nbsp;';
                ?>
                <img src="./img/<?=($row['img']);?>.jpg" width="100px" height="100px" style="border: 3px solid rgb(36, 116, 168);margin:10px;">
                <?php
                //$row['id'] 找出id值
                echo ($row['img']).".jpg";
                echo '<br>';
                echo '<input type="file" name="img" style="width:200px;height:50px; font-size:10px;">';
                echo '<input type="submit" value="修改確定" style="width:70px;height:25px; font-size:10px;">';
                echo '<br>';
            }
            ?>
           
           

        </form>
    </div>
    <div class="portfolio">
        <!-- 這裡放文字新增 -->
        <form action="./api/save_pro_text.php" method="POST">
            <!-- 這裡放圖片新增 -->
            <h2>作品集文字</h2>
            <textarea type="text" name="text" style="width:430px;height:370px;"></textarea>
            <input type="submit" value="修改確定">

        </form>
    </div>
</div>