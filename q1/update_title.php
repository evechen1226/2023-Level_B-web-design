<?php
include_once "./db.php";


if(isset($_POST['id'])){
   move_uploaded_file($_FILES['img']['tmp_name'],"./q1/img".$_FILES['img']['name']); 
   $row['img']=$_FILES['img']['name'];
   
   $Title->save($row);
}


header("location:./index.php");