<?php
include_once('./conn.php');

$paper = $_POST['inputpaper'];
$brand = $_POST['brand'];
$year = $_POST['date'];
$description = $_POST['describe'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$address = $_POST['add'];
$state = $_POST['state'];

// Check if photo file sizes are within limits (1MB)
$maxFileSize = 1 * 1024 * 1024; // 1 MB in bytes

$photo1Size = $_FILES['file1']['size'];
$photo2Size = $_FILES['file2']['size'];
$photo3Size = $_FILES['file3']['size'];
$photo4Size = $_FILES['file4']['size'];

if ($photo1Size > $maxFileSize || $photo2Size > $maxFileSize || $photo3Size > $maxFileSize || $photo4Size > $maxFileSize) {
    echo "Error: Photo size exceeds 1MB limit.";
    exit;
}

// Check if all file names are the same
// $photo1Name = $_FILES['file1']['name'];
// $photo2Name = $_FILES['file2']['name'];
// $photo3Name = $_FILES['file3']['name'];
// $photo4Name = $_FILES['file4']['name'];

// if ($photo1Name !== $photo2Name || $photo1Name !== $photo3Name || $photo1Name !== $photo4Name) {
//     echo "Error: All photo file names must be the same.";
//     exit;
// }

// Proceed with inserting data into the database
// Add your database insertion code here

$query="INSERT INTO `selltyres`( `brand`, `year`, `descript`, `quantity`, `price`, `pic1`, `pic2`, `pic3`, `pic4`, `address`, `state`, `type`) VALUES ('$brand','$year','$description','$quantity','$price','$photo1Size','$photo2Size','$photo3Size','$photo4Size','$address','$state','$paper')";

$result = mysqli_query($conn,$query);

echo "Success";
?>