<?php
include_once "./db.php";


if (isset($_POST['id'])) {
   $row = $Title->find($_POST['id']);

   if (!empty($_FILES['img']['tmp_name'])) {
      move_uploaded_file($_FILES['img']['tmp_name'], "./img/" . $_FILES['img']['name']);

      $row['img'] = $_FILES['img']['name'];

      $Title->save($row);
   }
}


header("location:./index.php");
