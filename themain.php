<?php session_start();?>
<?php include 'header.php'?>
<?php include 'connection.php'?>
<?php include 'navbar.php'?>

<?php

        //هذا الاستعلام عشان احصل على ايدي الشخص الي سجل في الموقع واخزنو في السيشن
        $getuser=$db->prepare("SELECT * FROM users WHERE email=?");
        $getuser->execute(array($_SESSION["email"]));
        $rows= $getuser->fetchAll();
    
        foreach($rows as $row){

            $_SESSION['myid']=$row['id'];
            $_SESSION['username']=$row['username'];
        }





        
        


        $stmt=$db->prepare("SELECT post.*,users.username AS usernamepost FROM post
        INNER JOIN users
        ON users.id=post.user_post ORDER BY p_id DESC"); //usernamepost هي الاسم الذي سوف استعمله لما استدعي اليوزرنيم من جدول اليوزر
       
       $stmt->execute();  
       $rowposts=$stmt->fetchALL();
      ?> <h1 align='center' class='head'>الصفحة الرئيسية</h1>


        <form action='themain2.php' method='POST' align='center'>
            <input type='text' name='search' style='width:400px;height:30px'/>
            <input type='submit' value='search' style='background:#d3d3f1;border-radius:10%;width:100px'/>
        </form>
  
    <?php
       foreach($rowposts as $rowpost){

        ?>
        <div class='wow bounceInDown' data-wow-offset='90' style='background:white;margin:20px;padding: 40px;width: 834px;margin-left:257px;over-flow:hidden;overflow:scroll;border:solid #b39595 5px;text-align:right;padding-top:5px'>
            <?php echo '<h4 style="color:red"><a href="youprofile.php?post_id='.$rowpost['user_post'].'&username='.$rowpost['usernamepost'].'">'.$rowpost['usernamepost'].'</a></h4>';?>  <hr style='border-top: 1px solid #000000;'>
            <?php echo '<h1>'.$rowpost['post'] .'</h><br>';?>
        </div>
        <?php }






 include 'footer.php'?>
