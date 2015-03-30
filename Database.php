<?php
$server='mysql:host=localhost;dbname=qec';
$username='root';
$password='';

try 
{
    $db=new PDO($server,$username,$password);
}
 catch (PDOException $e)
 {
     echo 'data base error';
 }
 
 function login($name,$userpwrd)
 {
 
 $query="select name , pasword from admin where name = '$name' AND pasword='$userpwrd'";

$result = $db->query($query);
$result1 = $result->fetch();

if ($name==$result1['name'] && $userpwrd==$result1['pasword'])
{
    header("location:main.php");
    
    
}
 else {
   echo lkkkkkkkkkko; 
}
 }
 

function rand_password( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}

?>
