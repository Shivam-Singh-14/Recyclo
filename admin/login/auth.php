<?php
session_start();
include_once('./conn.php');
$uname = $_POST['uname'];
$pass = $_POST['pass'];

$logcheck = "SELECT * FROM `admin` WHERE `name` = '$uname'";
$req= mysqli_query($conn,$logcheck);
$row = mysqli_fetch_assoc($req);
$count = mysqli_num_rows($req);

if($count == 1){
    
    if($pass == $row['pass']){
        $_SESSION['aid']= $row['id'];
        header('Location: ../home.php');
    
    
    }else{
        // echo "not correct";
                ?>
        <script>
            window.alert("Invalid Credientials!");
        </script>
        <meta http-equiv="refresh" content="1;url=index.php" />
        <?php
        
    }
}else{
    // echo "not correct";
            ?>
    <script>
        window.alert("User Doesnt Exist!");
    </script>
    <meta http-equiv="refresh" content="1;url=index.php" />
    <?php
    
}


?>