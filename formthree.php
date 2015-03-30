<?php

include_once 'Database.php';
$deptt=$_POST['deptt'];
$campus=$_POST['campus'];
$q1=$_POST['A'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];
$q11=$_POST['q11'];
$q12=$_POST['q12'];
$q13=$_POST['q13'];
$q14=$_POST['q14'];
$q15a=$_POST['q15a'];
$q15b=$_POST['q15b'];
$q15c=$_POST['q15c'];
$q15d=$_POST['q15d'];
$q15e=$_POST['q15e'];
$q15f=$_POST['q15f'];
$q15g=$_POST['q15g'];
$q15h=$_POST['q15h'];
$q16=$_POST['q16'];
$q17=$_POST['q17'];

$query="insert into graduatingform values('$deptt','$campus','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15a','$q15b','$q15c','$q15d','$q15e','$q15f','$q15g','$q15h','$q16','$q17')";
$db->query($query);






?>

