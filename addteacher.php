<?php
include_once 'Database.php';


$nam=$_POST['teachname'];
$fatname=$_POST['fname'];
$cnic=$_POST['teachcnic'];
$skil=$_POST['teachskillone'];
$skill=$_POST['teachskilltwo'];
$skills=$_POST['teachskillthree'];
$qualification=$_POST['teachquali'];
$subjecton=$_POST['teachsubone'];
$subjectto=$_POST['teachsubtwo'];
$subjectthr=$_POST['teachsubthree'];
$subjectfour=$_POST['teachsubfour'];
$subjectfive=$_POST['teachsubfive'];
$deptt=$_POST['deptt'];

$pass=rand_password(15);

$query = "INSERT INTO teacher VALUES ('$nam','$pass','$fatname','$cnic','$skil','$skill','$skills','$qualification','$subjecton','$subjectto','$subjectthr','$subjectfour','$subjectfive','$deptt')";
 $db->exec($query);



$queryy="select * from teacher";
$result=$db->query($queryy); 
$result1=$result->fetch();
echo $result1['nam'];


?>
