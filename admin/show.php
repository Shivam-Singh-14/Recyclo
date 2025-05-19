<?php
include_once('./config/conn.php');

$id = $_GET['id'];
// $prob=$_GET['type'];
// $sex = $_SESSION['gender'];
// echo $sex;
$sql="SELECT * FROM `products` WHERE `id`= '$id'";
$result = mysqli_query($conn, $sql);
$sno = 0;
$row = mysqli_fetch_assoc($result);
echo $row['brand'];
echo $row['type'];
// while($row = mysqli_fetch_assoc($result)){
//     $sno=$sno +1 ;
//     $id = $row['id'];
//     echo "<tr>
//     <th scope='row'>".$sno."</th>
//     <td>".$row['type']."</td>
//     <td>".$row['brand']."</td>
//     <td>".$row['description']."</td>
//     <td>".$row['uploaded_by_user_id']."</td>
//     <td><a href='product.php?pid=$id'><button type='button'  class='btn btn-primary'>Show Product</button></a></td>
//     </tr>";
// }

?>