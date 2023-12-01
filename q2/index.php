<?php include_once "./db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <header class="p-5">
        <h1 class="text-center">問卷調查</h1>
    </header>
    <main class="container">
        <fieldset>
            <legend>目前位置：首頁 > 問內卷調查</legend>
            <!-- table>(tr>th*5)+(tr>td*5) 要自已打才有效果-->

            <table class="table table-striped">
                <tr>
                    <th>編號</th>
                    <th>問卷題</th>
                    <th>投票總數</th>
                    <th>結果</th>
                    <th>狀態</th>

                </tr>
                <?php 
                $ques=$Que->all(['subject_id'=>0]);
                foreach($ques as $idx => $que){ ?>
                
                <tr>
                    <td><?=$idx+1?></td>
                    <td><?=$que['text'];?></td>
                    <td><?=$que['conut'];?></td>
                    <td><a href='result.php?id=<?=$que['id'];?>' class="btn btn-info">投票結果</a></td>
                    <td><a href='vote.php?id=<?=$que['id'];?>' class="btn btn-info">我要投票</a></td>
                </tr>
<?php
};
?>
            </table>
        </fieldset>


    </main>

    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>