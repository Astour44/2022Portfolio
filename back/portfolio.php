<div class="top">
    <div class="portfoliotext" id="portfoliotextjump"><a href="#Home">My <br>Portfolio</a></div>
</div>
<div class="bordergray"></div>

<div class="top3">
    <div class="portfolio">
        <form action="./api/save_pro.php" method="POST" enctype="multipart/form-data">
            <!-- 這裡放圖片新增 -->
            <h2>作品集圖片</h2>
            <?php
            $rows = $Pro->all();
            foreach ($rows as $key => $row) {
                echo $key;
                echo '&nbsp;';
            ?>
                <img src="./img/<?= ($row['img']); ?>" width="100px" height="100px" style="border: 3px solid rgb(36, 116, 168);margin:10px;">
                <?php
                //$row['id'] 找出id值
                echo ($row['img']);
                ?>
                <textarea type="text" name="<?=$row['fil']?>" style="width:450px;height:50px;"><?= $Pro->find($row['id'])['text']; ?></textarea>
                <input type="checkbox" name="<?=$row['id']?>" value="刪除" style="width:20px;height:20px; font-size:10px;">
            <?php
                echo '<br>';
            }
            ?>

            <input type="file" name="img" style="width:200px;height:50px; font-size:10px;">
            <input type="submit" value="修改確定" style="width:70px;height:25px; font-size:10px;">


        </form>
    </div>
</div>