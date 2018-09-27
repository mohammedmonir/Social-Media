
<?php session_start();?>
<?php include 'header.php'?>
<?php include 'connection.php'?>
<?php include 'navbar.php'?>
<?php
$username=$_POST['search'];

$stmt=$db->prepare("SELECT * from users where username like '%$username%'"); 
$stmt->execute();  
$rowps=$stmt->fetchAll();


?>
<h1 align='center'>نتائج البحث</h1>


<?php
foreach($rowps as $rowp){
   
   echo '<pre style="font-size:20px;width:900px; margin:auto">'.$rowp['username'].'         '.$rowp['place'].'          '.$rowp['information'].' </pre><br>';
}
?>


<?php include 'footer.php'; ?>




