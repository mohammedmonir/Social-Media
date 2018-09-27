<?php session_start();?>
<?php include 'header.php'?>

<?php include 'navbar.php'?>
<?php include 'connection.php'?>
<?php

$id1 = $_SESSION['myid'];

$id2 = $_GET['idfrs'];







$stmt=$db->prepare("UPDATE friends SET state = 1 where id1 = ? and id2 = ? ");
$stmt->execute(array($id2,$id1));

echo '<div class="alert alert-danger" style="width:400px;margin:auto;font-size:20px;text-align:center">تم قبوووول طلب الصداقة</div>';







?>







<?php include 'footer.php';?>