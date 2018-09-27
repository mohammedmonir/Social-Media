<?php session_start();?>
<?php include 'header.php'?>
<?php include 'connection.php'?>
<?php include 'navbar.php'?>

<?php
if(isset($_SESSION["email"])){



      //   هذا الاستعلام عشان احصل على ايدي الشخص الي سجل في الموقع واخزنو في السيشن عشان طلبات الصداقة
      $getuser=$db->prepare("SELECT * FROM users WHERE email=?");
      $getuser->execute(array($_SESSION["email"]));
      $rows= $getuser->fetchAll();
  
      foreach($rows as $row){

          $_SESSION['myid']=$row['id'];   // عشان اضيفهم في جدول الاصدقاء
          $_SESSION['username']=$row['username'];
      }









    
    $getuser=$db->prepare("SELECT * FROM users WHERE email=?");//عن طريق السيشن تبع الايميل جلبنا البيانات الخاصة بالايميل
    $getuser->execute(array($_SESSION["email"]));
    $row= $getuser->fetch();//جلب البيانات الخاصة بالسيشن
    ?>
  
   
    
        <p align='center' style='font-size:30px' class='head'>الصفحة الشخصية</p>

        <form action='pendingfrs.php' method='POST'>
            <input type='submit' value='عرض طلبات الصداقة' class='btn btn-primary mfr'>

        </form>





        <div class='post wow swing' data-wow-duration='1s'> 
            <div style='background: #dbdbdb; width: 200px;text-align: right;float: right; font-size: 33px; margin-right: 24px; margin-top: 0px;margin-bottom:-21px'>
                <?php echo $row['username'];?>
            </div>
            <div  align='center' class='post1 form-group'>
                <form action="main.php" method='POST'>
                        <textarea name="post" id="" cols="110" rows="4" class='form-control '></textarea><br>
                        <input type="submit" value='post' class='btn btn-primary' style='width:200px;margin-top:-18px'>
                </form>
            </div>
        </div>
         <?php 

        if($_SERVER['REQUEST_METHOD']=='POST'){
            $post=$_POST['post']; //لاضافة الكلام الى قواعد البيانات
            $user=$row['id'];   // رقم اي دي العضو الي دخل على الموقع


            $stmt = $db->prepare("INSERT INTO post (post,date,user_post) 
            VALUES (:zpost,now(),:zuser_post)");
            $stmt->execute(array(
                'zpost'=> $post,
                'zuser_post'=>$user

            ));  
        }
        //لطباعة المنشورات
        $stmt=$db->prepare("SELECT post.*,users.username AS usernamepost FROM post
        INNER JOIN users
        ON users.id=post.user_post WHERE user_post = ? ORDER BY p_id DESC");
       
       $stmt->execute(array($row['id']));  
       $rowposts=$stmt->fetchALL();
       foreach($rowposts as $rowpost){

        
        ?>
        <div class='wow bounceInDown' data-wow-offset='50' data-wow-duration='1s' style='background:white;margin:20px;padding: 40px;width: 834px;margin-left:257px;over-flow:hidden;overflow:scroll;border:solid #b39595 5px;text-align:right;padding-top:5px;'>
            <?php echo '<h4 style="color:red" >'.$row['username'].'</h4>';?>  <hr style='border-top: 1px solid #000000;'>
            <?php echo '<h1>'.$rowpost['post'] .'</h><br>';?>
        </div>
        <?php }




  
        }else{
        echo 'لا تسطيع الدخول الي هذه الصفحة مباشرة';
        }
?>

<img src='vv.gif'  style="vertical-align: middle;width: 300px;height: 40%;position: absolute;top: 400px; left: 40px;">
<img src='pp.gif'  style="vertical-align: middle;width: 300px;height: 40%;position: absolute;top: 80px; left: 500px;">


<?php include 'footer.php'?>


