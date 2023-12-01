<?php
include_once "../db.php";
echo dd($_POST);

$date = [];
$date['text'] = $_POST['subject'];
$date['subject_id'] = 0; //預設 0 為主, 因為 id 沒有從 0 開始
$date['conut'] = 0;
$date['sh'] = 1;

$Que->save($date);

foreach ($_POST['opt'] as $opt) {

    $date = [];

    //如果要利用find()找id，要確認 subuject 沒有重複
    $subject_id = $Que->find(['text' => $_POST['subject']])['id'];
    $date['text'] = $opt;
    $date['subject_id'] = $subject_id; //預設 0 為 主題
    $date['conut'] = 0;
    $date['sh'] = 1;
    $Que->save($date);
}
