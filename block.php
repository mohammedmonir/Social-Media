<?php session_start();?>
    <?php include 'header2.php'?>


    <?php include 'connection.php';

    $id1=$_SESSION['myid'];

    $id2=$_GET['block'];

    $stmt=$db->prepare("UPDATE friends SET block =1 where id1 =? and id2=?  limit 1");
    $stmt->execute(array($id1,$id2));
    echo '<div class="alert alert-danger" style="width:400px;margin:auto;font-size:20px;text-align:center">تم حظر المستخدم</div>';


        








  
  include 'footer.php'?>


      