<?php session_start();?>
<?php include 'header.php'?>
<?php include 'navbar.php' ?>
<?php include 'connection.php'?>


        <?php
        $getuser=$db->prepare("SELECT * FROM users WHERE email=?");//عن طريق السيشن تبع الايميل جلبنا البيانات الخاصة بالايميل
        $getuser->execute(array($_SESSION["email"]));
        $rows= $getuser->fetchAll();//جلب البيانات الخاصة بالسيشن
        ?>
        
        <?php 
        foreach($rows as $row){

        ?>
        <div class='container' >
            <h1 align='center' class='head wow bounceInRight' data-wow-duration='2s'>My information</h1>
            <div class='row'>
                <div class='col-md-2 head1 wow zoomIn'>name</div>
                <div class='col-md-9 head1 wow zoomIn'><?php echo ':  '.$row['username']?></div>
                <div class='col-md-2 head1 wow zoomIn'>email</div>
                <div class='col-md-9 head1 wow zoomIn'><?php echo ':  '.$row['email']?></div>
                <div class='col-md-2 head1 wow zoomIn'>date</div>
                <div class='col-md-9 head1 wow zoomIn'><?php echo ':  '.$row['date']?></div>
                <div class='col-md-2 head1 wow zoomIn'>place</div>
                <div class='col-md-9 head1 wow zoomIn'><?php echo':  '. $row['place']?></div>
                <div class='col-md-2 head1 wow zoomIn'>information</div>
                <div class='col-md-9 head1 wow zoomIn'><?php echo ':  '.$row['information']?></div>
                <div class='col-md-2 head1 wow zoomIn'>nationality</div>
                <div class='col-md-9 head1 wow zoomIn'><?php echo ':  '.$row['nationality']?></div>
            
            </div>
            <a href='edit.php?id=<?php echo $row['id']?>' style='color:black'><div class='btn btn-primary' style='width:150px;margin-top:20px'>Edit</div></a>
        </div>
        <?php } ?>

      
    
 <?php include 'footer.php'?>