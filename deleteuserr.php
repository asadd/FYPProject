<?php
include_once'database.php';

$name=$_POST['tname'];
$cnic=$_POST['cnic'];


$queryy="select name,cnic from teacher where name='$name' and cnic='$cnic'";
$result=$db->query($queryy);
$result1=$result->fetch();


$namee=$result1['name'];
$cnicc=$result1['cnic'];

if ($namee=="" || $cnicc=="")
{
    echo''."User not found";
}
 else {
    $query="Delete from teacher where name='$name' and cnic='$cnic'";
$db->query($query);
echo''. "User Deleted Succecful";
}



?>
