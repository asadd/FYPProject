<?php
include_once'Database.php';


$number=$_POST['stno'];
$department=$_POST['Department'];
$campus=$_POST['Campus'];

$query="insert into research values('$number','$department','$campus')";
$db->query($query);

