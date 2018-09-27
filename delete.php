

    <?php session_start();?>
    <?php include 'header2.php'?>


    <?php include 'connection.php';



        $stmt = $db->prepare("DELETE FROM users WHERE email=:zemail");
        $stmt->bindParam(":zemail",$_SESSION['email']);
        $stmt->execute();
        header('Location:index.php');
        ?>
        <div class='alert alert-success'>the account was deleted</div>

    <?php include 'footer.php'?>

