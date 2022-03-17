<div class="top">
    <div class="portfoliotext" id="portfoliotextjump"><a href="#Home">My <br>Portfolio</a></div>
</div>
<div class="bordergray"></div>
<div class="top3">
    <div class="portfolio">
        <form action="./api/save_resume.php" method="POST">
            <!-- 這裡放圖片新增 -->
            <h2>作品集圖片</h2>
            <input type="file" name="img">

            <input type="submit" value="修改確定">

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