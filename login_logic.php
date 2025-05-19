<?php
session_start();
include_once('./conn.php');

$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "SELECT * FROM `registeruser` WHERE `email`= '$email'";

$result = mysqli_query($conn,$query);

$num = mysqli_num_rows($result);
// echo $num;

if($num = 1){
    $row = mysqli_fetch_assoc($result);
    $db_hashed_pass =  $row['password'];
    // echo "<br>";

    if (password_verify($pass, $db_hashed_pass)) {

        $_SESSION['email'] = $row['email'];  
        $_SESSION['username'] = $row['fname'];  
        $_SESSION['id'] = $row['id'];  
        
        
        
        header('Location: ./templates/dashboard.php');
    } else {
        echo "password is different";
    }

    // echo $pass_hash;


}else{
    echo "no user found";
}





?>