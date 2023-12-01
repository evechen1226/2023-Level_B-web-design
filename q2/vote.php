<?php include_once "./db.php" ?>
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
    <h1 class="text-center">問卷主題</h1>
</header>
<main class="container">

<?php    $subject = $Que->find([$_GET['id']]);  ?>

<h2 class="text-cneter"><?=$subject['text']?></h2>
<form action="add_vote.php" method="post">
<ul class="list-group col-6 mx-auto">

    <?php $opt=$Que->all(['subject_id'=>$_GET['id']]);   
    foreach($opots as $idx => $opt){
    ?>

    <li class="list-group-item list-group-item-action">
        <input type="radio" name="opt" value="<?=$opt['id'];?>">
        <?=$opt['text'];?>
    </li>
    <?php } ?>
</ul>

<input type="button" value="我要投票" class="btn btn-primary d-block mx-auto my-5">

</form>
</main>


    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/js.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>

</html>