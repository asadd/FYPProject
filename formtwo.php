<?php
include_once 'Database.php';

$deptt= $_POST["deptt"];
$semester = $_POST["sem"];
$courscode= $_POST['ccode'];
$credit= $_POST['crhrs'];
$level= $_POST['level'];
$stdnumber= $_POST['stdnum'];
$instructor= $_POST['instruct'];
$assignment= $_POST['assign'];
$quizzez= $_POST['quiz'];
$exam= $_POST['exam'];
$originally= $_POST['originally'];
$grada= $_POST['gradea'];
$gradb= $_POST['gradeb'];
$gradc= $_POST['gradec'];
$gradd= $_POST['graded'];
$gradf= $_POST['gradef'];
$gradw= $_POST['gradew'];
$gradi= $_POST['gradei'];
$total= $_POST['total'];
$curriculum= $_POST['curric'];
$assessment= $_POST['assess'];
$enhancement= $_POST['enhance'];
$online= $_POST['outline'];

$query="insert into courseform values('$deptt','$semester','$coursecode','$credit','$level','$stdnumber','$instructor','$assignment','$quizzez','$exam','$originally','$grada','$gradb','$gradc','$gradd','$gradf','$gradw','$gradi','$total','$curriculum','$assessment','$enhancement','$online')";

$db->query($query);


?>
