<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            FORM 2
        </title>
    </head>
    <body>
        <form action="formtwo.php" method="POST">
        <center> Faculty Course Review</center>
        <p>
            for completion by the course instructor and transmission to head of department
        </p>
        <table border="5">
        
        <tr>
            <td> Department:<input type="text" size="50" name ="deptt" value=""> </td>
            <td> Semester:<input type="text" size="50" name="sem" value="" ></td>
        </tr>
        <tr>
            <td>
            Course Code and Title:<input type="numbers" size="50" name="ccode" value="">
            </td>
            <td>
                Credit Hours:<input type="text" size="50" name="crhrs" value="">
            </td>
            
        </tr>
        <tr>
            <td>Level:<input type ="text" size="50" name="level" value="">
            </td>
            <td>
                
          
                Number Of Students:<input type="number" name="stdnum" value="" >
                
            </td>
            </tr>
            <tr>
            <td>
                Instructor:<input type="text" size="50" name="instruct" value="">
                
            </td>
            
            
            
        </tr>
       
            <tr>
            <td>
                Assessment Method:</br> give precise detail(no & length of assignment,exams, weightings etc)
            </td>
            <tr>
            <td>
            Assignment:<input type="number" name="assign" value="">
            </td>
            </tr>
            <tr>
            <td>
            Quizzes:<input type="number" name="quiz" value="">
            </td>
        </tr>
        <tr>
            <td>
            Exams:<input type="number" name="exam" value="">
            </td>
        </tr>
        
        
        
        </table>
       <p>
           DISTRIBUTION OF Grade/Marks And Other Outcomes:(Adopt the grading system as required):
       </p>
       <table border="5">
           <tr>
               <td>
                   UnderGraduate
               </td>
               <td>
                   Originally Registered
               </td>
               <td>
                   Grade A
               </td>
               <td>
                   Grade B
               </td>
               <td>
                   Grade C
               </td>
               <td>
                   Grade D
               </td>
               <td>
                   Grade F
               </td>
               <td>
                   Grade W
               </td>
               <td>
                   Grade I
               </td>
               
               <td>
                   Total
               </td>
               
           </tr>
           <tr>
               <td>
                   No. Of Students
               </td>
               <td>
                   <input type="number" size="10" name="originally " value="">
               </td>
               <td>
                   <input type="number" size="5"  name="gradea" value="">
               </td>
               <td>
                   <input type="number" size="10"  name="gradeb" value="">
               </td>
               <td>
                   <input type="number" size="5"  name="gradec" value="">
               </td>
               <td>
                   <input type="number" size="5"  name="graded" value="">
               </td>
               <td>
                   <input type="number" size="5"  name="gradef" value="">
               </td>
               <td>
                   <input type="number" size="5"  name="gradew" value="">
               </td>
               <td>
                   <input type="number" size="5"  name="gradei" value="">
               </td>
               <td>
                   <input type="number" size="10"  name="total" value="">
               </td>
               
               
           </tr>
           
           
       </table>
       <table>
       <tr>
       <td>
       Curriculum: comment on the continuing appropriateness of course curriculum in relation to intended learnings
       out comes(course objectives) and its compliance with HEC approved/ Revised National Curriculum guide line: </td></tr>
      <tr><td> <input type="textarea" name="curric" value=""></td></tr>
      
      <tr>
       <td>
       Assessment: comment on the continuing effectiveness of method(s)of assessment in relation to the intended learning outcomes (course objectives):
  </td></tr>
      <tr><td> <input type="textarea" name="assess" value=""></td></tr>
      <tr>
       <td>
       Enhancement : comment on the implementation of changes proposed in earlier faculty course review reports: </td></tr>
      <tr><td> <input type="textarea" name="enhance" value=""></td></tr>
      <tr>
       <td>
           </table>
               
       Out line any change in the future delivery or structure of the course that this semester's experience may prompt </td></tr>
      <tr><td> <input type="textarea" name="outline" value=""></td></tr>
      
       <table border="5">
</br></br>
<input type="submit" value="submit">
<input type="reset" value="reset">

 
         
           
       </table>
        
    </body>
</html>
