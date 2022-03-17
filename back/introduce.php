<h1 id="Introducejump"><a href="#Home">Introduce</a></h1>
<div class="top">
    <div class="notes">
        <div class="notesp">
            <form action="./api/save_resume.php" method="POST">
                <tr>

                    <td>專長</td>
                    <br>
                    <td>
                        <textarea type="text" name="resume" style="width:300px;height:230px;">
                        <?= $Int->find(1)['resume']; ?>
                    </textarea>
                        <input type="submit" value="修改確定">
                    </td>
                </tr>


            </form>
            <form action="./api/save_text.php" method="POST">
                <tr>

                    <td>自我介紹</td>
                    <br>
                    <td>
                        <textarea type="text" name="text" style="width:350px;height:230px;">
                        <?= $Int->find(1)['text']; ?>
                    </textarea>
                        <input type="submit" value="修改確定">
                    </td>
                </tr>
            </form>
        </div>
        <div class="introduction">
            <form action="./api/save_img.php" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>履歷照片</td>
                    <div>
                        <img src="./img/<?= $Int->find(1)['img']; ?>" width="150" height="150">
                    </div>
                    <td>
                        <input type="file" name="img" id="img">
                        <input type="submit" value="修改確定">
                    </td>
                </tr>
            </form>

        </div>
    </div>
</div>