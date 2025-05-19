<?php
include_once('../config/conn.php');

$university = $_POST['university'];
$sem = $_POST['sem'];
$subcode = $_POST['subcode'];
$branch = $_POST['branch'];
$date = $_POST['date'];
$time = $_POST['time'];
$shift = $_POST['shift'];
$chap = $_POST['chap'];
$ques = $_POST['ques'];
$marks = $_POST['marks'];
$rbt = $_POST['rbt'];


echo $university;
echo '<br>';
echo $sem;
echo '<br>';
echo $subcode;
echo '<br>';
echo $branch;
echo '<br>';
echo $date;
echo '<br>';
echo $time;
echo '<br>';
echo $shift;
echo '<br>';
echo $chap;
echo '<br>';
echo $ques;
echo '<br>';
echo $marks;
echo '<br>';
echo $rbt;


$query = "INSERT INTO `question`(`university`, `sem`, `subcode`, `branch`, `date`, `time`, `shift`, `chap`, `ques`, `marks`, `rbt`) VALUES ('$university','$sem','$subcode','$branch','$date','$time','$shift','$chap','$ques','$marks','$rbt')";


$result = mysqli_query($conn,$query);

if($result){
    echo "successfully added question";
}else{
    echo "failed to add question";
}


?>