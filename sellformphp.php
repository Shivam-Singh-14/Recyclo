<?php
session_start();
include_once('./conn.php');

$image = $_SESSION['imgname'];

$category = $_POST['category'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$brand = $_POST['brand'];
$year = $_POST['date'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$address = $_POST['address'];

$query = "INSERT INTO `sellform`(`category`, `email`, `phone`, `brand`, `year`, `description`, `quantity`, `price`, `address`, `image`) VALUES ('$category','$email','$phone','$brand','$year','$description','$quantity','$price','$address','$image')";

$result = mysqli_query($conn,$query);

if($result){
    header('Location: ./templates/dashboard.php');
}else{
    echo "no";
}

?>