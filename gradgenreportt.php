<?php

include_once 'Database.php';
$deptt=$_POST['department'];
$campus=$_POST['campus'];

$query="select count q1 from graduatingform where department='$deptt' AND campus='$campus' AND q1='A'";
$result=$db->query($query);
echo ''.$result;

	echo "<table width='600'  border='1'>";
	
	echo "<tr><td>Questions</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
	echo "<tr><td>Work in program is heavy</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Effective in Enhancing team-working Abilities.</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Administration is Effective in supporting learning</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Effective in developing skills</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Effective in developing independent skills</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Effective in developing communication skills</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Effective in Enhancing team-working abilities.</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Objectives Achieved</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Contents of curriculum are advanced</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Faculty was able to meet the program objectives </td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Environment was conducive for learning</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Infrastructure of the department was good.</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Program was comprised of Co-curricular and extra-curricular activities.</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Scholarships were available to students in case of hardship</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";                                                                                        
        echo "</table></br>";
        
        echo "<table width='600'  border='1'>";
        
        echo "<tr><td>Ability to work in teams</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Independent thinking</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Appreciation of ethical Values</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Professional development</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Time management skills</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>Judgment</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>discipline</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
        echo "<tr><td>The link between theory and practice</td><td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td></tr>";
     
        
        
        
        
        
        
        
        
        
        
        
        
        
        
	echo "</table>";
	
	?>




