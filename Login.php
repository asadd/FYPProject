<?php
include_once 'Database.php';

$name=$_POST['username'];
$userpwrd=$_POST['userpwrd'];

login($name,$userpwrd);


?>
