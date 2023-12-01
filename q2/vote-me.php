<?php include_once "./db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <header class="container p-5">
        <h1 class="text-center">問卷管理</h1>
    </header>
    <main class="container p-5">

        <fieldset>
            <?php
            $ques = $Que->find([$_GET['id']]); 
            $id =$_GET['id'];
            ?>

            <legend><?= $que['text'] ?></legend>
            <div class="col-10 mx-auto">
                <table>


                    <tr>
                        <div class="bg-light">
                            <div class="p-2" id="option">
                                <?php 
                                $que=$Que->all(['subject_id'=>'id']);
                                foreach ($ques as $idx => $que) { ?>
                                    <input type="radio" name="opt[]" value="<?= ['text'] ?>">
                                <?php } ?>
                            </div>
                        </div>
                    </tr>
                </table>
            </div>

        </fieldset>

    </main>
</body>

</html>