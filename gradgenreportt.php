<?php

include_once 'Database.php';
$deptt=$_POST['department'];
$campus=$_POST['campus'];

$query="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus'  ";
$result =$db->query($query);
$row = $result->fetch(PDO::FETCH_NUM);
$q=$row[0];

echo "<center><h1> $deptt </h1>   </center>";
echo "</br><center><h1> $campus </h1>   </center>";
echo "</br> total number of students fille the form : </br>" ;
echo $q;
//$query="select COUNT(*) from graduatingform where department='$deptt' AND campus='$campus' ";
//$result=$db->query($query);
//echo ''.$result;

//$result->execute();
//$asd = $result->fetch(\PDO::FETCH_ASSOC);
//echo ''.$asd[0];
$a='A';
$q1A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question1='$a'  ";
$result =$db->query($q1A);
$row1A = $result->fetch(PDO::FETCH_NUM);
$q1a=$row1A[0];
$b='B';
$q1B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question1='$b'  ";
$result =$db->query($q1B);
$row1B = $result->fetch(PDO::FETCH_NUM);
$q1b=$row1B[0];
$c='C';
$q1C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question1='$c'  ";
$result =$db->query($q1C);
$row1c = $result->fetch(PDO::FETCH_NUM);
$q1c=$row1c[0];

$d='D';
$q1D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question1='$d'  ";
$result =$db->query($q1D);
$row1d = $result->fetch(PDO::FETCH_NUM);
$q1d=$row1d[0];
$e='E';
$q1E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question1='$e'  ";
$result =$db->query($q1E);
$row1e = $result->fetch(PDO::FETCH_NUM);
$q1e=$row1e[0];

$q2A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question2='$a'  ";
$result =$db->query($q2A);
$row2A = $result->fetch(PDO::FETCH_NUM);
$q2a=$row2A[0];

$q2B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question2='$b'  ";
$result =$db->query($q2B);
$row2B = $result->fetch(PDO::FETCH_NUM);
$q2b=$row2B[0];

$q2C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question2='$c'  ";
$result =$db->query($q2C);
$row2c = $result->fetch(PDO::FETCH_NUM);
$q2c=$row2c[0];

$q2D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question2='$d'  ";
$result =$db->query($q2D);
$row2d = $result->fetch(PDO::FETCH_NUM);
$q2d=$row2d[0];
$q2c=$row2c[0];

$q2E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question2='$e'  ";
$result =$db->query($q2E);
$row2e = $result->fetch(PDO::FETCH_NUM);
$q2e=$row2e[0];

$q3A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question3='$a'  ";
$result =$db->query($q3A);
$row3A = $result->fetch(PDO::FETCH_NUM);
$q3a=$row3A[0];

$q3B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question3='$b'  ";
$result =$db->query($q3B);
$row3B = $result->fetch(PDO::FETCH_NUM);
$q3b=$row3B[0];

$q3C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question3='$c'  ";
$result =$db->query($q3C);
$row3c = $result->fetch(PDO::FETCH_NUM);
$q3c=$row3c[0];

$q3D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question3='$d'  ";
$result =$db->query($q3D);
$row3d = $result->fetch(PDO::FETCH_NUM);
$q3d=$row3d[0];
$q3c=$row3c[0];

$q3E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question3='$e'  ";
$result =$db->query($q3E);
$row3e = $result->fetch(PDO::FETCH_NUM);
$q3e=$row3e[0];

$q4A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question4='$a'  ";
$result =$db->query($q4A);
$row4A = $result->fetch(PDO::FETCH_NUM);
$q4a=$row4A[0];

$q4B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question4='$b'  ";
$result =$db->query($q4B);
$row4B = $result->fetch(PDO::FETCH_NUM);
$q4b=$row4B[0];

$q4C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question4='$c'  ";
$result =$db->query($q4C);
$row4c = $result->fetch(PDO::FETCH_NUM);
$q4c=$row4c[0];

    $q4D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question4='$d'  ";
$result =$db->query($q4D);
$row4d = $result->fetch(PDO::FETCH_NUM);
$q4d=$row4d[0];
$q4c=$row4c[0];

$q4E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question4='$e'  ";
$result =$db->query($q4E);
$row4e = $result->fetch(PDO::FETCH_NUM);
$q4e=$row4e[0];

$q5A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question5='$a'  ";
$result =$db->query($q5A);
$row5A = $result->fetch(PDO::FETCH_NUM);
$q5a=$row5A[0];

$q5B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question5='$b'  ";
$result =$db->query($q5B);
$row5B = $result->fetch(PDO::FETCH_NUM);
$q5b=$row5B[0];

$q5C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question5='$c'  ";
$result =$db->query($q5C);
$row5c = $result->fetch(PDO::FETCH_NUM);
$q5c=$row5c[0];

$q5D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question5='$d'  ";
$result =$db->query($q5D);
$row5d = $result->fetch(PDO::FETCH_NUM);
$q5d=$row5d[0];
$q5d=$row55c[0];

$q5E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question5='$e'  ";
$result =$db->query($q5E);
$row5e = $result->fetch(PDO::FETCH_NUM);
$q5e=$row5e[0];

$q6A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question6='$a'  ";
$result =$db->query($q6A);
$row6A = $result->fetch(PDO::FETCH_NUM);
$q6a=$row6A[0];

$q6B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question6='$b'  ";
$result =$db->query($q6B);
$row6B = $result->fetch(PDO::FETCH_NUM);

$q6b=$row6B[0];

$q6C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question6='$c'  ";
$result =$db->query($q6C);
$row6c = $result->fetch(PDO::FETCH_NUM);

$q6c=$row6c[0];

$q6D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question6='$d'  ";
$result =$db->query($q6D);
$row6d = $result->fetch(PDO::FETCH_NUM);

$q6d=$row6d[0];


$q6E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question6='$e'  ";
$result =$db->query($q6E);
$row6e = $result->fetch(PDO::FETCH_NUM);

$q6e=$row6e[0];

$q7A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question7='$a'  ";
$result =$db->query($q7A);
$row7A = $result->fetch(PDO::FETCH_NUM);

$q7a=$row7A[0];

$q7B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question7='$b'  ";
$result =$db->query($q7B);
$row7B = $result->fetch(PDO::FETCH_NUM);

$q7b=$row7B[0];

$q7C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question7='$c'  ";
$result =$db->query($q7C);
$row7c = $result->fetch(PDO::FETCH_NUM);

$q7c=$row7c[0];

$q7D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question7='$d'  ";
$result =$db->query($q7D);
$row7d = $result->fetch(PDO::FETCH_NUM);

$q7d=$row7d[0];
$q7c=$row7c[0];

$q7E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question7='$e'  ";
$result =$db->query($q7E);
$row7e = $result->fetch(PDO::FETCH_NUM);

$q7e=$row7e[0];

$q8A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question8='$a'  ";
$result =$db->query($q8A);
$row8A = $result->fetch(PDO::FETCH_NUM);

$q8a=$row8A[0];

$q8B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question8='$b'  ";
$result =$db->query($q8B);
$row8B = $result->fetch(PDO::FETCH_NUM);

$q8b=$row8B[0];

$q8C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question8='$c'  ";
$result =$db->query($q8C);
$row8c = $result->fetch(PDO::FETCH_NUM);

$q8c=$row8c[0];

$q8D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question8='$d'  ";
$result =$db->query($q8D);
$row8d = $result->fetch(PDO::FETCH_NUM);

$q8d=$row8d[0];
$q8c=$row8c[0];

$q8E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question8='$e'  ";
$result =$db->query($q8E);
$row8e = $result->fetch(PDO::FETCH_NUM);

$q8e=$row8e[0];

$q9A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question9='$a'  ";
$result =$db->query($q9A);
$row9A = $result->fetch(PDO::FETCH_NUM);

$q9a=$row9A[0];
$b='B';
$q9B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question9='$b'  ";
$result =$db->query($q9B);
$row9B = $result->fetch(PDO::FETCH_NUM);
$q9b=$row9B[0];
$c='C';
$q9C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question9='$c'  ";
$result =$db->query($q9C);
$row9c = $result->fetch(PDO::FETCH_NUM);
$q9c=$row9c[0];
$d='D';
$q9D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question9='$d'  ";
$result =$db->query($q9D);
$row9d = $result->fetch(PDO::FETCH_NUM);

$q9d=$row9d[0];
$q9c=$row9c[0];
$e='E';
$q9E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question9='$e'  ";
$result =$db->query($q9E);
$row9e = $result->fetch(PDO::FETCH_NUM);

$q9e=$row9e[0];
$a='A';
$q10A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question10='$a'  ";
$result =$db->query($q10A);
$row10A = $result->fetch(PDO::FETCH_NUM);


$q10a=$row10A[0];
$b='B';
$q10B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question10='$b'  ";
$result =$db->query($q10B);
$row10B = $result->fetch(PDO::FETCH_NUM);

$q10b=$row10B[0];
$c='C';
$q10C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question10='$c'  ";
$result =$db->query($q10C);
$row10c = $result->fetch(PDO::FETCH_NUM);

$q10c=$row10c[0];
$d='D';
$q10D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question10='$d'  ";
$result =$db->query($q10D);
$row10d = $result->fetch(PDO::FETCH_NUM);

$q10d=$row10d[0];
$q10c=$row10c[0];
$e='E';
$q10E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question10='$e'  ";
$result =$db->query($q10E);
$row10e = $result->fetch(PDO::FETCH_NUM);

$q10e=$row10e[0];
$a='A';
$q11A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question11='$a'  ";
$result =$db->query($q11A);
$row11A = $result->fetch(PDO::FETCH_NUM);

$q11a=$row11A[0];
$b='B';
$q11B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question11='$b'  ";
$result =$db->query($q11B);
$row11B = $result->fetch(PDO::FETCH_NUM);

$q11b=$row11B[0];
$c='C';
$q11C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question11='$c'  ";
$result =$db->query($q11C);
$row11c = $result->fetch(PDO::FETCH_NUM);

$q11c=$row11c[0];
$d='D';
$q11D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question11='$d'  ";
$result =$db->query($q11D);
$row11d = $result->fetch(PDO::FETCH_NUM);

$q11d=$row11d[0];
$q11c=$row11c[0];
$e='E';
$q11E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question11='$e'  ";
$result =$db->query($q11E);
$row11e = $result->fetch(PDO::FETCH_NUM);

$q11e=$row11e[0];
$a='A';
$q12A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question12='$a'  ";
$result =$db->query($q12A);
$row12A = $result->fetch(PDO::FETCH_NUM);

$q12a=$row12A[0];
$b='B';
$q12B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question12='$b'  ";
$result =$db->query($q12B);
$row12B = $result->fetch(PDO::FETCH_NUM);

$q12b=$row12B[0];
$c='C';
$q12C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question12='$c'  ";
$result =$db->query($q12C);
$row12c = $result->fetch(PDO::FETCH_NUM);

$q12c=$row12c[0];
$d='D';
$q12D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question12='$d'  ";
$result =$db->query($q12D);
$row12d = $result->fetch(PDO::FETCH_NUM);

$q12d=$row12d[0];
$q12c=$row12c[0];
$e='E';
$q12E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question12='$e'  ";
$result =$db->query($q12E);
$row12e = $result->fetch(PDO::FETCH_NUM);

$q12e=$row12e[0];
$a='A';
$q13A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question13='$a'  ";
$result =$db->query($q13A);
$row13A = $result->fetch(PDO::FETCH_NUM);

$q13a=$row13A[0];
$b='B';
$q13B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question13='$b'  ";
$result =$db->query($q13B);
$row13B = $result->fetch(PDO::FETCH_NUM);

$q13b=$row13B[0];
$c='C';
$q13C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question13='$c'  ";
$result =$db->query($q13C);
$row13c = $result->fetch(PDO::FETCH_NUM);

$q13c=$row13c[0];
$d='D';
$q13D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question13='$d'  ";
$result =$db->query($q13D);
$row13d = $result->fetch(PDO::FETCH_NUM);

$q13d=$row13d[0];
$q13c=$row13c[0];
$e='E';
$q13E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question13='$e'  ";
$result =$db->query($q13E);
$row13e = $result->fetch(PDO::FETCH_NUM);

$q13e=$row13e[0];
$a='A';
$q14A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question14='$a'  ";
$result =$db->query($q14A);
$row14A = $result->fetch(PDO::FETCH_NUM);

$q14a=$row14A[0];
$b='B';
$q14B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question14='$b'  ";
$result =$db->query($q14B);
$row14B = $result->fetch(PDO::FETCH_NUM);
$q14b=$row14B[0];
$c='C';
$q14C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question14='$c'  ";
$result =$db->query($q14C);
$row14c = $result->fetch(PDO::FETCH_NUM);

$q14c=$row14c[0];
$d='D';
$q14D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question14='$d'  ";
$result =$db->query($q14D);
$row14d = $result->fetch(PDO::FETCH_NUM);

$q14d=$row14d[0];
$q14c=$row14c[0];
$e='E';
$q14E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question14='$e'  ";
$result =$db->query($q14E);
$row14e = $result->fetch(PDO::FETCH_NUM);

$q14e=$row14e[0];
$a='A';
$q15A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15a='$a'  ";
$result =$db->query($q15A);
$row15A = $result->fetch(PDO::FETCH_NUM);

$q15a=$row15A[0];
$b='B';
$q15B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15a='$b'  ";
$result =$db->query($q15B);
$row15B = $result->fetch(PDO::FETCH_NUM);

$q15b=$row15B[0];
$c='C';
$q15C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15a='$c'  ";
$result =$db->query($q15C);
$row15c = $result->fetch(PDO::FETCH_NUM);

$q15c=$row15c[0];
$d='D';
$q15D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15a='$d'  ";
$result =$db->query($q15D);
$row15d = $result->fetch(PDO::FETCH_NUM);

$q15d=$row15d[0];
$q15c=$row15c[0];
$e='E';
$q15E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15a='$e'  ";
$result =$db->query($q15E);
$row15e = $result->fetch(PDO::FETCH_NUM);

$q15e=$row15e[0];
$a='A';
$q16A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15b='$a'  ";
$result =$db->query($q16A);
$row16A = $result->fetch(PDO::FETCH_NUM);

$q16a=$row16A[0];
$b='B';
$q16B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15b='$b'  ";
$result =$db->query($q16B);
$row16B = $result->fetch(PDO::FETCH_NUM);

$q16b=$row16B[0];
$c='C';
$q16C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15b='$c'  ";
$result =$db->query($q16C);
$row16c = $result->fetch(PDO::FETCH_NUM);

$q16c=$row16c[0];
$d='D';
$q16D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15b='$d'  ";
$result =$db->query($q16D);
$row16d = $result->fetch(PDO::FETCH_NUM);
$q16d=$row16d[0];
$q16c=$row16c[0];
$e='E';
$q16E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15b='$e'  ";
$result =$db->query($q16E);
$row16e = $result->fetch(PDO::FETCH_NUM);

$q16e=$row16e[0];
$a='A';
$q16A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15b='$a'  ";
$result =$db->query($q16A);
$row16A = $result->fetch(PDO::FETCH_NUM);

$q16a=$row16A[0];
$b='B';
$q16B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15b='$b'  ";
$result =$db->query($q16B);
$row16B = $result->fetch(PDO::FETCH_NUM);

$q16b=$row16B[0];
$c='C';
$q16C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15b='$c'  ";
$result =$db->query($q16C);
$row16c = $result->fetch(PDO::FETCH_NUM);
$q16c=$row16c[0];
$d='D';
$q16D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15b='$d'  ";
$result =$db->query($q16D);
$row16d = $result->fetch(PDO::FETCH_NUM);

$q16d=$row16d[0];
$q16c=$row16c[0];
$e='E';
$q16E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15b='$e'  ";
$result =$db->query($q16E);
$row16e = $result->fetch(PDO::FETCH_NUM);

$q16e=$row16e[0];
$a='A';
$q17A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15c='$a'  ";
$result =$db->query($q17A);
$row17A = $result->fetch(PDO::FETCH_NUM);

$q17a=$row17A[0];
$b='B';
$q17B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15c='$b'  ";
$result =$db->query($q17B);
$row17B = $result->fetch(PDO::FETCH_NUM);

$q17b=$row17B[0];
$c='C';
$q17C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15c='$c'  ";
$result =$db->query($q17C);
$row17c = $result->fetch(PDO::FETCH_NUM);

$q17c=$row17c[0];
$d='D';
$q17D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15c='$d'  ";
$result =$db->query($q17D);
$row17d = $result->fetch(PDO::FETCH_NUM);

$q17d=$row17d[0];
$q17c=$row17c[0];
$e='E';
$q17E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15c='$e'  ";
$result =$db->query($q17E);
$row17e = $result->fetch(PDO::FETCH_NUM);

$q17e=$row17e[0];


$q18A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$a'  ";
$result =$db->query($q18A);
$row18A = $result->fetch(PDO::FETCH_NUM);
$q18a=$row18A[0];

$q18B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$b'  ";
$result =$db->query($q18B);
$row18B = $result->fetch(PDO::FETCH_NUM);

$q18b=$row18B[0];

$q18C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$c'  ";
$result =$db->query($q18C);
$row18c = $result->fetch(PDO::FETCH_NUM);

$q18c=$row18c[0];

$q18D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$d'  ";
$result =$db->query($q18D);
$row18d = $result->fetch(PDO::FETCH_NUM);

$q18d=$row18d[0];
$q18c=$row18c[0];

$q18E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$e'  ";
$result =$db->query($q18E);
$row18e = $result->fetch(PDO::FETCH_NUM);

$q18e=$row18e[0];

$q19A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$a'  ";
$result =$db->query($q19A);
$row19A = $result->fetch(PDO::FETCH_NUM);

$q19a=$row19A[0];

$q19B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$b'  ";
$result =$db->query($q19B);
$row19B = $result->fetch(PDO::FETCH_NUM);

$q1b=$row19B[0];

$q19C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$c'  ";
$result =$db->query($q19C);
$row1c = $result->fetch(PDO::FETCH_NUM);

$q1c=$row19c[0];

$q19D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$d'  ";
$result =$db->query($q19D);
$row19d = $result->fetch(PDO::FETCH_NUM);

$q19d=$row19d[0];
$q19c=$row19c[0];

$q19E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$e'  ";
$result =$db->query($q19E);
$row19e = $result->fetch(PDO::FETCH_NUM);

$q19e=$row19e[0];

$q20A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$a'  ";
$result =$db->query($q20A);
$row20A = $result->fetch(PDO::FETCH_NUM);

$q20a=$row20A[0];

$q20B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$b'  ";
$result =$db->query($q20B);
$row20B = $result->fetch(PDO::FETCH_NUM);

$q20b=$row20B[0];

$q20C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$c'  ";
$result =$db->query($q20C);
$row20c = $result->fetch(PDO::FETCH_NUM);

$q20c=$row20c[0];

$q20D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$d'  ";
$result =$db->query($q20D);
$row20d = $result->fetch(PDO::FETCH_NUM);

$q20d=$row20d[0];
$q20c=$row20c[0];

$q20E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$e'  ";
$result =$db->query($q20E);
$row20e = $result->fetch(PDO::FETCH_NUM);

$q20e=$row20e[0];

$q21A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$a'  ";
$result =$db->query($q21A);
$row21A = $result->fetch(PDO::FETCH_NUM);

$q21a=$row21A[0];

$q21B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$b'  ";
$result =$db->query($q21B);
$row21B = $result->fetch(PDO::FETCH_NUM);

$q21b=$row21B[0];

$q21C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$c'  ";
$result =$db->query($q21C);
$row21c = $result->fetch(PDO::FETCH_NUM);

$q21c=$row21c[0];

$q21D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$d'  ";
$result =$db->query($q21D);
$row21d = $result->fetch(PDO::FETCH_NUM);

$q21d=$row21d[0];
$q21c=$row21c[0];

$q21E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$e'  ";
$result =$db->query($q21E);
$row21e = $result->fetch(PDO::FETCH_NUM);

$q21e=$row21e[0];
$q22A="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$a'  ";
$result =$db->query($q22A);
$row22A = $result->fetch(PDO::FETCH_NUM);

$q22a=$row22A[0];

$q22B="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$b'  ";
$result =$db->query($q22B);
$row22B = $result->fetch(PDO::FETCH_NUM);

$q22b=$row22B[0];

$q22C="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$c'  ";
$result =$db->query($q22C);
$row22c = $result->fetch(PDO::FETCH_NUM);

$q22c=$row22c[0];

$q22D="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$d'  ";
$result =$db->query($q22D);
$row22d = $result->fetch(PDO::FETCH_NUM);

$q22d=$row22d[0];
$q22c=$row22c[0];

$q22E="SELECT count(*) FROM graduatingform WHERE department = '$deptt' AND campus='$campus' AND question15d='$e'  ";
$result =$db->query($q22E);
$row22e = $result->fetch(PDO::FETCH_NUM);

$q22e=$row22e[0];



//$result = query("SELECT count(*) from graduatingform;");
//echo mysql_result($result, 0);
	echo "<table width='600'  border='1'>";
	
	echo "<tr><td>Questions</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
	echo "<tr><td>Work in program is heavy</td><td>$q1a</td> <td>$q1b</td> <td>$q1c</td> <td>$q1d</td> <td>$q1e</td></tr>";
        echo "<tr><td>Effective in Enhancing team-working Abilities.</td><td>$q2a</td> <td>$q2b</td> <td>$q2c</td> <td>$q2d</td> <td>$q2e</td></tr>";
        echo "<tr><td>Administration is Effective in supporting learning</td><td>$q3a</td> <td>$q3b</td> <td>$q3c</td> <td>$q3d</td> <td>$q3e</td></tr>";
        echo "<tr><td>Effective in developing skills</td><td>$q4a</td> <td>$q4b</td> <td>$q4c</td> <td>$q4d</td> <td>$q4e</td></tr>";
        echo "<tr><td>Effective in developing independent skills</td><td>$q5a</td> <td>$q5b</td> <td>$q5c</td> <td>$q5d</td> <td>$q5e</td></tr>";
        echo "<tr><td>Effective in developing communication skills</td><td>$q6a</td> <td>$q6b</td> <td>$q6c</td> <td>$q6d</td> <td>$q6e</td></tr>";
        echo "<tr><td>Effective in Enhancing team-working abilities.</td><td>$q7a</td> <td>$q7b</td> <td>$q7c</td> <td>$q7d</td> <td>$q7e</td></tr>";
        echo "<tr><td>Objectives Achieved</td><td>$q8a</td> <td>$q8b</td> <td>$q8c</td> <td>$q8d</td> <td>$q8e</td></tr>";
        echo "<tr><td>Contents of curriculum are advanced</td><td>$q9a</td> <td>$q9b</td> <td>$q9c</td> <td>$q9d</td> <td>$q9e</td></tr>";
        echo "<tr><td>Faculty was able to meet the program objectives </td><td>$q10a</td> <td>$q10b</td> <td>$q10c</td> <td>$q10d</td> <td>$q10e</td></tr>";
        echo "<tr><td>Environment was conducive for learning</td><td>$q11a</td> <td>$q11b</td> <td>$q11c</td> <td>$q11d</td> <td>$q11e</td></tr>";
        echo "<tr><td>Infrastructure of the department was good.</td><td>$q12a</td> <td>$q12b</td> <td>$q12c</td> <td>$q12d</td> <td>$q12e</td></tr>";
        echo "<tr><td>Program was comprised of Co-curricular and extra-curricular activities.</td><td>$q13a</td> <td>$q13b</td> <td>$q13c</td> <td>$q13d</td> <td>$q13e</td></tr>";
        echo "<tr><td>Scholarships were available to students in case of hardship</td><td>$q14a</td> <td>$q14b</td> <td>$q14c</td> <td>$q14d</td> <td>$q14e</td></tr>";                                                                                        
        echo "</table></br>";
        
        echo "<table width='600'  border='1'>";
        
        echo "<tr><td>Ability to work in teams</td><td>$q15a</td> <td>$q15b</td> <td>$q15c</td> <td>$q15d</td> <td>$q15e</td></tr>";
        echo "<tr><td>Independent thinking</td><td>$q16a</td> <td>$q16b</td> <td>$q16c</td> <td>$q16d</td> <td>$q16e</td></tr>";
        echo "<tr><td>Appreciation of ethical Values</td><td>$q17a</td> <td>$q17b</td> <td>$q17c</td> <td>$q17d</td> <td>$q17e</td></tr>";
        echo "<tr><td>Professional development</td><td>$q18e</td> <td>$q18e</td> <td>$q18e</td> <td>$q18e</td> <td>$q18e</td></tr>";
        echo "<tr><td>Time management skills</td><td>$q19a</td> <td>$q19b</td> <td>$q19c</td> <td>$q19d</td> <td>$q19e</td></tr>";
        echo "<tr><td>Judgment</td><td>$q20a</td> <td>$q20b</td> <td>$q20c</td> <td>$q20d</td> <td>$q20e</td></tr>";
        echo "<tr><td>discipline</td><td>$q21a</td> <td>$q21b</td> <td>$q21c</td> <td>$q21d</td> <td>$q21e</td></tr>";
        echo "<tr><td>The link between theory and practice</td><td>$q22a</td> <td>$q22b</td> <td>$q22c</td> <td>$q22d</td> <td>$q22e</td></tr>";
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
	echo "</table>";
	
	?>




