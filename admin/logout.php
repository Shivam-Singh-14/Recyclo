<?php
session_start();
// if(isset($_SESSION['email'])) { 
//     session_die();
//     echo "died";
// } else {
//     echo "failed";
//     // header("location:../login.php");
// }

session_unset();
session_destroy();

header("location:../index.php");
exit();
?>