<?php include 'header.php';?>
<?php include 'navbar.php';?>


<form action="mm.php" method='GET'>
   
    <input type='text' name='mohammed'/>
    <input type='password' name='passwordname'/>
    <input type='submit' value='click'/>

</form>
<form action="mm.php" method='GET'>
   
    <input type='text' name='mohammed'/>
    <input type='password' name='passwordname'/>
    <input type='submit' value='click'/>

</form>





<?php
echo $_GET['mohammed'];
echo $_GET['passwordname'];
if(isset($_GET['mohammed'])){
    echo '<br>hello mohammed';
    echo '<br> password is ' . $_GET['passwordname'];



}


include 'footer.php';