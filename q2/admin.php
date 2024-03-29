<?php include_once "./db.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問卷管理後台</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>

    </style>
</head>

<body>
    <header class="container p-5">
        <h1 class="text-center">問卷管理</h1>
    </header>
    <main class="container p-5">

        <fieldset>
            <legend>新增問卷</legend>
            <form action="./api/add_que.php" method="post">
                <!-- 主題 -->
                <div class="d-flex form-label">
                    <div class="col-3 p-2">問卷名稱</div>
                    <div class="col-6 p-2">
                        <input type="text" name="subject" id="" class="form-control">
                    </div>
                </div>
                <!-- 選項 -->
                <div class="bg-light">
                    <div class="p-2" id="option">
                        <label for="" class="form-label">選項</label>
                        <input type="text" name="opt[]">
                        <input type="button" value="更多" onclick="more()">
                    </div>
                </div>

                <div>
                    <input type="submit" value="新增">
                    <input type="reset" value="更新">
                </div>

            </form>
        </fieldset>

        <fieldset>
            <legend>問卷列表</legend>
            <div class="col-10 mx-auto">
                <table>
                    <?php
                    $ques = $Que->all(['subject_id' => 0]);
                    foreach ($ques as $idx => $que) { ?>

                        <tr>
                            <td><?= $idx; ?></td>
                            <td><?= $que['text'] ?></td>
                            <td><button class="btn bnt-info">顯示</button>
                                <button class="btn bnt-info">編輯</button>
                                <button class="btn bnt-info">刪除</button>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </table>
            </div>

        </fieldset>

        <table>
            <tr>
                <td>問卷主題</td>
                <td>問卷名稱</td>
                <td>顯示</td>
                <td>刪除</td>
            </tr>


            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>

    </main>


    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>
<script>
    function more() {
        // ` `才可將有分段的部份視為一個整體
        let opt = `<div class="p-2">
                        <label for="" class="form-label">選項</label>
                        <input type="text" name="opt[]">
                    </div>`
        $("#option").before(opt)
    }
</script>