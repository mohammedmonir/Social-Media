
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['login'])){
        $email= $_POST['email'];
        $password=$_POST['password'];
    
    
        $stmt=$db->prepare('SELECT email,password FROM users WHERE email=? AND password=? AND admin=0');
        $stmt->execute(array($email,$password));
        $count=$stmt->rowCount();
        if($count>0){
            $_SESSION['email']=$_POST['email'];
           
            header('Location:main.php');
        }else{
            
            echo '<div class="alert alert-danger">sorry , you cant enterd</div>';
        }


    }else{

        $username     =$_POST['username'];
        $password     =$_POST['password'];
        $email        =$_POST['email'];
        $date         =$_POST['date'];
        $PlaceofBirth =$_POST['PlaceofBirth'];
        $information  =$_POST['information'];
        $nationality  =$_POST['nationality'];


        $stmt=$db->prepare("INSERT INTO users(username,password,email,date,place,information,nationality)
        VALUES(:zusername,:zpassword,:zemail,:zdate,:zplace,:zinformation,:znationality)"); 
        $stmt->execute(array(
            'zusername'         =>$username,
            'zpassword'         =>$password,
            'zemail'            =>$email,
            'zdate'             =>$date,
            'zplace'            =>$PlaceofBirth,
            'zinformation'      =>$information,
            'znationality'      =>$nationality
        
        ));



        echo '<h1>تم التسجيل بنجاح</h1>';
        }}




?>
<div class='regesterall '>
            
            <div class='reg'>
           
            <div class='g1' style='margin-top: 52px;'>
                    <p class='headreg'>MMSA register</p>
                    <div class='form-group'>
                        <form action="index.php" method='POST'>
                            <div class='row'>
                                <input type="text" name="username" placeholder='Full Name' class='form-control input-lg in col-md-6 col-sm-6'>
                                <input type="email" name="email" placeholder='Email' class='form-control input-lg in col-md-6 col-sm-6'>
                                <input type="password" name="password" placeholder='password' class='form-control input-lg in col-md-6 col-sm-6'>
                                <input type="date" name="date" placeholder='date' class='form-control input-lg in col-md-6 col-sm-6'>
                                <input type="text" name="PlaceofBirth" placeholder='Place Of Birth' class='form-control input-lg in col-md-6 col-sm-6 '>
                                <input type="text" name="information" placeholder='information' class='form-control input-lg in col-md-6 col-sm-6' >
                                <input type="text" name="nationality" placeholder='nationality' class='form-control input-lg in col-md-6 col-sm-6'>
                            </div>


                            <input type='submit' value='register' class='form-control btn btn-primary btn1 btn2' name='regester'>
                        


                        </form>
                    </div>
                </div>

            </div>
        </div>


        <img src='n.gif'  style="vertical-align: middle;width: 300px;height: 40%;position: absolute;top: 391px; left: 142px;">