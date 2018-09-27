<?php session_start();?>
    <?php include 'header.php'?>
    <?php include 'connection.php'?>
    <?php include 'navbar.php'?>
    
    
    <?php
    $id;
        $stmt=$db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute(array($_GET['id']));
        $row = $stmt->fetch();
        ?>





<div class='regesterall '>
    <div class='reg'>
        <div class='g1' style='margin-top: 52px;'>
                <p class='headreg'>MMSA Edit</p>
                <div class='form-group'>
                    <form action="edit.php?id=<?php echo $row['id']?>" method='POST'>
                        <div class='row'>
                            <input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
                            <input type="text" name="username" placeholder='Full Name' value='<?php echo $row['username'];?>' class='form-control input-lg in col-md-6'>
                            <input type="email" name="email" placeholder='Email' class='form-control input-lg in col-md-6' value='<?php echo $row['email'];?>'>
                            
                            <input type="date" name="date" placeholder='date' class='form-control input-lg in col-md-6' value='<?php echo $row['date'];?>'>
                            <input type="text" name="PlaceofBirth" placeholder='Place Of Birth' class='form-control input-lg in col-md-6 ' value='<?php echo $row['place'];?>'>
                            <input type="text" name="information" placeholder='information' class='form-control input-lg in col-md-6' value='<?php echo $row['information'];?>' >
                            <input type="text" name="nationality" placeholder='nationality' class='form-control input-lg in col-md-6' value='<?php echo $row['nationality'];?>'>
                        </div>


                        <input type='submit' value='Edit' class='form-control btn btn-primary btn1 btn2' name='regester'>
                    


                    </form>
                </div>
            </div>

        </div>
    </div>
<?php


    if($_SERVER["REQUEST_METHOD"]=="POST"){
       
       
        $id =                       $_POST['id'];
        $username                   =$_POST["username"];
        $email                      =$_POST["email"];
        $date                      =$_POST["date"];
        $PlaceofBirth                  =$_POST["PlaceofBirth"];
        $information              =$_POST["information"];
        $nationality              =$_POST["nationality"];
       
        $stmt=$db->prepare("UPDATE users SET username =? , email = ? ,date = ?,place=?,information = ? ,nationality = ? WHERE id= ?");
        $stmt->execute(array($username,$email,$date,$PlaceofBirth,$information,$nationality,$id ));
        echo "<h1>تم التحديث</h1> <br>";
                     
 
                 
                        
                      }
            



       
   include 'footer.php'?>

