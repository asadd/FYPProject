<?php

include_once 'Database.php';

$nam=$_POST["ename"];
$fnam=$_POST["fathername"];
$reg=$_POST["registeration"];
$cnic=$_POST["cnic"];
$jobtype=$_POST["jobtype"];
$deptt=$_POST["deptt"];


   
    function rand_password( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}
$pass=rand_password(15);




$query="insert into employe values('$nam','$fnam','$reg','$cnic','$jobtype','$deptt','$pass')";
$db->exec($query);

?>
$