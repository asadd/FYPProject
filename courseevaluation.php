<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
        
      
//session_start();
//$_session["username"];
//$_session["password"];
        
        $sub1 =  $_GET["sub1"];
        $sub2= $_GET["sub2"];
        $sub3= $_GET["sub3"];
        $sub4=$_GET["sub4"];
        $sub5=$_GET["sub5"];
        $deptrt=$_GET["deptt"];
        $campus=$_GET["campus"];
        
        
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body bgcolor="grey">
        <img src="logofypp.jpg" height="300" width="1350">
        <a href='form2.php?deptt=$deptrt&amp;campus=$campus'/>
        <?php
        echo ''.$_session["username"];
        echo ''.$_session["password"];
      echo ''.$sub1;
        ?>
           </a> </br>
           
           <a href='form2.php?deptt= $deptrt  ' >
              <?php
        
      echo ''.$sub2."</br></br></br>";
      echo ''.$deptrt ;
      echo ''.$campus;  
    
       
       
     
        ?>
            </a></br>
        <a href="form2.php?deptt= $deptrt &campus= $campus "> 
              <?php
        
      echo ''.$sub3;
    
       
       
     
        ?>
             </a></br>
        <a href="form2.php?deptt= $deptrt &campus= $campus ">
              <?php
        
      echo ''.$sub4;
    
       
        ?>
        </a></br>
        <a href="form2.php?deptt= $deptrt &campus= $campus "> 
              <?php
        
      echo ''.$sub5;
    
       
       
     
        ?>
             </a></br>
    </body>
</html>
