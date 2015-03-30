<?php
include_once 'Database.php';
$number=$_POST['stno'];
$semester=$_POST['sem'];
$department=$_POST['Department'];
$campus=$_POST['Campus'];


echo $number ;
echo $semester ;
echo $department ;
echo $campus;
$query="insert into graduating values('$number','8','$department','$campus')";
$db->query($query);


?>



