<?php
include_once'Database.php';


$name=$_POST['tname'];
$fname=$_POST['fname'];
$cnic=$_POST['cnic'];
$skil1=$_POST['skilone'];
$skil2=$_POST['skiltwo'];
$skil3=$_POST['skilthre'];
$qualification=$_POST['quali'];
$sub1=$_POST['subone'];
$sub2=$_POST['subtwo'];
$sub3=$_POST['subthre'];
$department=$_POST['deptt'];


$query="update teacher SET name='$name', fname='$fname',cnic='$cnic',skilone='$skil1', skiltwo='$skil2', skilthre='$skil3',qualification='$qualification',subone='$sub1',subtwo='$sub2' ,subthree='$sub3' ";
$db->query($query);


