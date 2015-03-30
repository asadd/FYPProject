<?php

include_once 'Database.php';
$user=$_POST['user'];
$pwrd=$_POST['pwrd'];
session_start();
$_session["username"]=$_POST['user'];
$_session["password"]=$_POST['pwrd'];

//#teacherlogin
//$query="select * from teacher where name='$user' AND pasword='$pwrd'";

//$result= $db->query($query);
//$result1=$result->fetch();      
     //$sub1=$result1['subone'];
      //$sub2=$result1['subtwo'];
       // $sub3=$result1['subthree'];
        //$sub4=$result1['subjfour'];
       // $sub5=$result1['subfive'];
      //  $deptrt=$result1['department'];
#admin login 
        $query1="select name , password from admin where name = '$user' AND password='$pwrd'";

$resultt = $db->query($query1);
$resultt1 = $resultt->fetch();

#grduating student login
//$query2="select * from graduatingstudent where name='$user' AND password='$pwrd' ";
  //$resulttt=$db->query($query2);
   //$resulttt1=$resulttt->fetch();
   
   //$deptt=$resulttt1['department'];
   //$campus=$resulttt1['campus'];
//if (($user==$result1['name']) && ($pwrd==$result1['pasword']))
//{
  // header('location:courseevaluation.php?sub1='.$sub1.  '&sub2='.$sub2. '&sub3=' .$sub3. '&sub4=' .$sub4. '&sub5=' .$sub5. '&deptt=' .$deptrt.'');
    //echo ''.$_SESSION['username'];
    
//}
//else
 if ($user==$resultt1['name'] && $pwrd==$resultt1['password'])
{
   
   header("location:main.php");   
}
 //else
    // {
    
  //  echo lkalkdalksd;
// }
 //elseif ($user==$resulttt1['name'] && $pwrd==$resulttt1['password'])
     
     //{
     
    //header('location:form3.php?deptt=' .$deptt. '&campus=' .$campus. '');
    
  //   }    

//else {
    
  //   echo lkalkdalksd;
//}
   




?>
