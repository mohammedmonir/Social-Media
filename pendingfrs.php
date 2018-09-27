<?php session_start();?>
<?php include 'header.php'?>
<?php include 'navbar.php';?>
<?php include 'connection.php'?>



<h1 align='center'>طلبات الصداقة</h1>

<?php
        $getuser=$db->prepare("SELECT * FROM friends WHERE id2=? and pending1= 1 limit 1");
        $getuser->execute(array($_SESSION["myid"]));
        $frs= $getuser->fetchAll();
        ?>
        
        <?php 
        foreach($frs as $fr){
            if( $fr['pending1'] == 1 && $fr['state']== 0 ){ //يعني اذا مبعوتلو طلب صداقة بس لسا مش اصدقاء..اعرض له الاسماء


         //   echo'<div class="alert alert-danger" style="width:500px;font-size:20px;margin:auto;text-align:center" >'.$fr['my'].'</div><br>';
            echo '<div class="alert alert-danger" style="width:400px;margin:auto;font-size:20px;text-align:center"><a href="pendingfrs2.php?idfrs='.$fr['id1'].'">قبول طلب الصداقة   :  '.$fr['my'].'</a></div><br>';
            }else{
                echo '<div class="alert alert-danger" style="width:400px;margin:auto;font-size:20px;text-align:center">لا توجد طلبات صداقة</div>';

            }
        }
        ?>


<?php include 'footer.php'?>
