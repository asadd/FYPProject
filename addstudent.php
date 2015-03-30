<?php
include_once 'Database.php';

$nam=$_POST["sname"];
$fnam=$_POST["fname"];
$reg=$_POST["registeration"];
$sem=$_POST["semester"];
$year=$_POST["yofgrad"];
$deptt=$_POST["deptt"];
function rand_password( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}
$pass=rand_password(15);

$query="insert into student values('$nam','$pass','$fnam','$reg','$sem','$year','$deptt')";
$db->exec($query);



?>
