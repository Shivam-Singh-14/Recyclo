<?php
include_once('./conn.php');

$fname=$_POST['fname'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$address=$_POST['add'];
$city=$_POST['city'];
$state=$_POST['state'];

echo "sucess";
// echo $fname,$phone,$email,$address,$city,$state;

$pass_hash = password_hash($pass,PASSWORD_DEFAULT);
// echo $pass_hash;

$query= "INSERT INTO `registeruser` ( `fname`, `phone`, `email`, `address`, `city`, `state`,`password`) VALUES ( '$fname', '$phone', '$email', '$address', '$city', '$state','$pass_hash')";

$query2 = "SELECT * FROM `registeruser` WHERE `id` = '1'";

$result = mysqli_query($conn,$query);


// $row = mysqli_fetch_assoc($result);
// echo "done";
// echo $row['id'];
// echo $row['fname'];
// echo $row['phone'];
// echo $row['email'];
// echo $row['address'];
// echo $row['city'];
// echo $row['state'];


if($result){
    header('Location: ./templates/userlogin.html');
}else{
    echo "failed to add to database";
}

if($result==true){
    $email_1=$_POST['email'];
    $to=$email_1;
    $message="Form submitted sucessfully";
    $header="From: 122shivam2008@sjcem.edu.in \r\n";
    $header = "Content-type : text/html";
    $mail = mail($to.$subject,$message,$header);
    if($mail==true){
        echo "mail sent";
    }
}
?>