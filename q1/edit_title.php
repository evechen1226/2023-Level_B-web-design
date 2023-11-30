<?php
include_once "./db.php";

foreach ($_POST['id'] as $key => $id) {
   $row = $Title->find($id);
   $row['text'] = $_POST['text'][$key];
   $Title->save($row);
}
//會有 sh 重複賦值的問題
// $row=$Title->find($_POST['sh']);
// $row['sh']=1;
// $Title->save($row);

foreach ($_POST['id'] as $id) {
   $row = $Title->find($id);
   
   // 可改為三元運算式 -----↓
   // if ($id === $_POST['sh']) {
   //    $row['sh'] = 1;
   // } else {
   //    $row['sh'] = 0;
   // }
   // 可改為三元運算式 ------↑
   //           ↓
   $row['sh']=($id==$_POST['sh']) ? 1 : 0;

   $Title->save($row);
}

// $_POST['sh']=0;

// $Title->save($_POST);

// header("location:./index.php");