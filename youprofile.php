<?php session_start();?>
    <?php include 'header.php'?>
    <?php include 'connection.php'?>
    <?php include 'navbar.php'?>

   

        <?php
        $id1=$_SESSION['myid'];
        $my = $_SESSION['username'];
        $id2=$_GET['post_id'];
        $friend= $_GET['username'];
        $stmt=$db->prepare("INSERT INTO friends(id1,my,id2,friend)
                VALUES(:zid1,:zmy,:zid2,:zfriend) "); 
                $stmt->execute(array(
                    'zid1'         =>$id1,
                    'zmy'         =>$my,
                    'zid2'         =>$id2,
                    'zfriend' => $friend
                    
                    
                    ));
            


        ?>

        <?php

        
        $getuser=$db->prepare("SELECT * FROM friends where id1=? and id2 = ? or id2=? and id1 =? limit 1 ");//عندما يكونو اصدقاء اعرض الصفحات
        $getuser->execute(array($_SESSION['myid'],$_GET['post_id'],$_SESSION['myid'],$_GET['post_id']));// كل شخص راح يدخل صفحتو راح يكون الاي دي تبعو مختلف عشان هيك حطيت or
        $sts= $getuser->fetchAll();
      
       ?> <h1 align='center' class='head'>الصفحة الخاصة بالعضو <?php echo $_GET['username'];?></h1><?php


        foreach($sts as $st){

    if($st['block']==0){

        if($st['state']==1 ){ // يعني اصبحو اصدقاء
      
        $stmt=$db->prepare("SELECT post.*,users.username AS usernamepost FROM post
        INNER JOIN users
        ON users.id=post.user_post WHERE user_post=? ORDER BY p_id DESC limit 1"); //usernamepost هي الاسم الذي سوف استعمله لما استدعي اليوزرنيم من جدول اليوزر 
        $stmt->execute(array($_GET['post_id']));  
        $rowposts=$stmt->fetchALL();


       ?> 
     
       <?php 
       foreach($rowposts as $rowpost){
        ?>
        <div style='background:white;margin:20px;padding: 40px;width: 834px;margin-left:257px;over-flow:hidden;overflow:scroll;border:solid #b39595 5px;text-align:right;padding-top:5px'>
            <?php echo '<h4 style="color:red">'.$rowpost['usernamepost'].'</h4> <hr style="border-top: 1px solid #000000>"';?>
            <h2><?php echo $rowpost['post'];?></h2><br>
        </div>
        <?php 
        }
      
        }else{
          ?>

              <?php
                if($st['pending1']==1){
               echo '<button>تم ارسال طلب الصداقة</button>';
              ?> <form action='block.php?block=<?php echo $_GET['post_id'] ?>' method='POST'>
               <input type='submit' value='حظر المستخدم' class='btn btn-primary dfr'/>

           </form><?php
              }else{

?>
            
            <?php echo '<h1 align="center">انتم لستم اصدقاء</h1>';?>
                <form action='addfriends.php?idfriends=<?php echo $_GET['post_id'] ?>&friend=<?php echo $_GET['username'];?>' method='POST'>
                     <input type='submit' value='اضافة صديق' class='btn btn-primary dfr'/>
                 </form>


                 <form action='block.php?block=<?php echo $_GET['post_id'] ?>' method='POST'>
                    <input type='submit' value='حظر المستخدم' class='btn btn-primary dfr'/>

                </form>
           <?php 
                

              }
        }
    }else{
        echo '<h1 class="head">لا تستطيع رؤية المنشوورات بسبب الحظر </h1>';
        echo '<img src="m2.jpg" style="margin-left:16%">';



    }
}




     include 'footer.php'?>
