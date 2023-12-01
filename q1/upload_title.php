<?php include_once "./db.php"; ?>
<h3 class="text-center">更新標題區圖片</h3>
<hr>
<form action="./update_title.php" method="post" enctype="multipart/form-data">
<?php
                $row=$Title->find($_GET['id']);
                
                    ?>
    <table class="col-8 m-auto">
        <tr>
            <td><img src="./img/<?=$row['img'];?>" alt="" width="300px" height="30px"></td>
            <td>標題區圖片：</td>
            <td><input type="file" name="img" id=""></td>
            
        </tr>
    </table>

    <div class="text-center">
        <input type="submit" value="更新">
        <input type="reset" value="重置">
    </div>
</form>