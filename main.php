<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
<title>Main </title>
<style type="text/css" >
ul {
padding:1; margin:1; list-style:none; width: auto; 
}
li {
float:left; position:relative; padding-right:1; display:block;  
border:4px solid sienna; 
border-style:solid;
background: brown;
}
li ul {
   display:none;
position:absolute;
}
 li:hover ul{
    display:block; 
    background:brown;
height:auto; width:200px;
}
li ul li{
    clear:both;
border-style:none;}

</style>
</head>
<body bgcolor="grey">
   <img src="logofypp.jpg" height="300" width="1350">
    <center>
<div id="horizontalmenu">
        <ul> <li> Course Review SubSystem
                <ul> <li><a href
                            ="Adduser.php">Add Teacher</a></li> <li><a href="deleteuser.php">Delete Teacher</a></li> <li><a href="updateuser.php">Update teacher Info </a></li> <li><a href="coursereport.php">Generate Report</a></li> </ul>
            
            </li>
            <li>
           Graduating Student SubSystem
		<ul> <li><a href="addgrst.php">Add User</a></li> <li><a href="gengradpasword.php">Generate Password</a></li> <li><a href="gradgenreport.php">Generate Report</a></li>  </ul>
                
            </li>
            <li>
            Research Student SubSystem
                <ul> <li><a href="addrest.php">Add User</a></li> <li><a href="resgenpasword.php">Generate Password</a></li> <li><a href="resgenreport.php">Generate Report</a></li>   </ul>
            </li>
            
            <li>
            Faculty Survey SubSystem
                <ul> <li><a href="aaduser.php">add user</a></li> <li><a href="generatpass.php">generate password </a></li> <li><a href="viewrepot.php">view report</a></li> </ul>
            </li>
            </br></br></br></br></br></br></br>
            <li>
            Department Survey SubSystem
                <ul> <li><a href="adddepsur.php">Add User</a></li> <li><a href="deletedepsur.php">Delete User</a></li> </ul>
            </li>
            <li>
                
           Alumni Survey SubSystem
                <ul> <li><a href="viewdata.php">View Data</a></li>  </ul>
            </li>
            
            <li>
            Employer Survey SubSystem
                <ul> <li><a href="viewdata.php">View Data</a></li>  </ul>
            </li>
            
            <li>
            Faculty Resume SubSystem
                <ul> <li><a href="viewdata.php">View Data</a></li>  </ul>
            </li>
        </ul>
</div>
        </center>
</body>
</html>

