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
        <form action="adgrst.php" method="POST">
           
            
                <tr><td> Enter Number Of Students:<input type="number" name="stno" value=""></br></br></td></tr>
        
                <tr><td>Semeter:<input type="number" name="sem" value="8" disabled="true" ></br></br> <tr><td>
                
      <tr><td>  Department:
        <select name="Department">
             <option value="Civil">Department of Civil Engineering</option>
            <option value="Electrical">Department of Electrical Engineering </option>
            <option value="Mechatronics">Department of Mechatronics Engineering </option>
            <option value="Mechanical">Department of Mechanical Engineering</option>
             <option value="DCSE">Department of Computer System Engineering</option>
            <option value="Agricultural">Department of agricultural Engineering </option>
            <option value="Mining">Department Of mining engineering</option>
            <option value="Computer">Department of CS&IT</option>
            
            
        </select></br></br></tr></td>
       <tr><td> Campus:
         <select name="Campus">
             <option value="Mardan">UET Mardan Campus</option>
            <option value="Banu">UET Bannu Campus </option>
            <option value="Jalozai">UET Jalozai Campus </option>
            <option value="Kohat">UET Kohat Campus</option>   
        </select></tr></td>
        </br></br>
        <tr><td>
        <input type="submit" value="Submit">
        <input type="reset" value="cancel"></tr></td>
            
            
        </form>
        </table></center>
        </body>
</html>
