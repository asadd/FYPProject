<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
        <body bgcolor="grey">
        <img src="logofypp.jpg" height="300" width="1350">
        <center> <table border="5">
        <form action="adrest.php" method="POST">
           
            
                <tr><td> Enter Number Of Students:<input type="number" name="stno" value=""></br></br></td></tr>
        
      <tr><td>  Department:
        <select name="Department">
             <option value="Department Of Civil Engineering">Department of Civil Engineering</option>
            <option value="Department Of Electrical Engineering">Department of Electrical Engineering </option>
            <option value="Department Of Mechatronics Engineering">Department of Mechatronics Engineering </option>
            <option value="Department Of Mechanical Engineering">Department of Mechanical Engineering</option>
             <option value="Department Of Computer System Engineering">Department of Computer System Engineering</option>
            <option value="Department Of Agricultural Engineering">Department of agricultural Engineering </option>
            <option value="Department Of Mining Engineering">Department Of mining engineering</option>
            <option value="Department Of CS and IT">Department of CS&IT</option>
            
            
        </select></br></br></tr></td>
       <tr><td> Campus:
         <select name="Campus">
             <option value="UET Mardan Campus">UET Mardan Campus</option>
            <option value="UET Banu Campus">UET Bannu Campus </option>
            <option value="UET Jalozai Campus">UET Jalozai Campus </option>
            <option value="UET Kohat Campus">UET Kohat Campus</option>   
        </select></tr></td>
        </br></br>
        <tr><td>
        <input type="submit" value="Submit">
        <input type="reset" value="cancel"></tr></td>
            
            
        </form>
        </table></center>
        <?php
        // put your code here
        ?>
    </body>
</html>
