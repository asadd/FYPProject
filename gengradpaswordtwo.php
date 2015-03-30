<?php
include_once'Database.php';

$deptt=$_POST['deptt'];
$campus=$_POST['campus'];


$query="select * from graduating where department='$deptt' AND campus='$campus'";
$result=$db->query($query);
$result1=$result->fetch();
 $a=$result1['stdntnumber'];
$b=$result1['department'];
$c=$result1['campus'];
 for ($i=1;$i<=$a;$i++)
 {

   $pass=rand_password(15);
   
     $queryy="insert into graduatingstudent values ('student','$pass','$b','$c')";
     $db->query($queryy);
     echo''."student</br>";
     echo ''.$pass."</br>";
 }
 ?>