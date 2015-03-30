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
    <body>
        <img src="logofypp.jpg" height="300" width="1350">
        <?php
include_once'Database.php';
$name=$_POST['tname'];
$cnic=$_POST['cnic'];

$query = "select * from teacher where name='$name' AND cnic='$cnic'";
$result=$db->query($query);
$result1=$result->fetch();
$namee=$result1['name'];
$fname=$result1['fname'];
$cnicc=$result1['cnic'];
$skil1=$result1['skilone'];
$skil2=$result1['skiltwo'];
$skil3=$result1['skilthre'];
$quali =$result1['qualification'];
$subone=$result1['subone'];
$subtwo=$result1['subtwo'];
$subthree=$result1['subthre'];
$deptt=$result1['deptt'];

echo ''.$skil1;
echo ''.$name;

        ?>
        <table>
            <tr><td>
        Name:<input type="text" name="tname" value="<?php echo ''.$namee ?> "> </td></tr>
       <tr><td> Father Name:<input type="text" name="fname" value="
           <?php 
           echo ''.$fname 
                   ?>"> </td></tr>
      <tr><td> CNIC: <input type="text" name="cnic" value= "
          <?php
          echo ''.$cnic 
                  ?>"></td></tr>
      <tr><td> Skill1: <input type="text" name="skilone" value= "
          <?php
          echo ''.$skil1 
                  ?>"></td></tr>
      <tr><td> Skill2: <input type="text" name="skiltwo" value= "
          <?php 
          echo ''.$skil2 
                  ?>"></td></tr>
      <tr><td> Skill3: <input type="text" name="skilthre" value= "
          <?php 
          echo ''.$skil3
                  ?>"></td></tr>
      <tr><td> Qualification: <input type="text" name="quali" value= "<?php echo ''.$quali?>"></td></tr>
      <tr><td> Subject1: <input type="text" name="subone" value= "<?php echo ''.$subone ?>"></td></tr>
      <tr><td> Subject2: <input type="text" name="subtwo" value= "<?php echo ''.$subtwo ?>"></td></tr>
      <tr><td> Subject3: <input type="text" name="subthre" value= "<?php echo ''.$subthree ?>"></td></tr>
      <tr><td> Department: <input type="text" name="deptt" value= "<?php echo ''.$deptt ?>"></td></tr>
        
        
        
        </table>
    </body>
</html>
