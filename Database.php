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
 
 

function rand_password( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}

?>
