<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> form 3</title>       
    </head>
    <body>
        <?php 
        $deptt=$_GET['deptt'];
        $campus=$_GET['campus'];
        
       
        ?>
        <form action="formthree.php" method="POST">
               <center><h1> Survey of Grading Students</h1></center>
      <center> <h3> To be filled out by graduating students in last semester / year before the award of degree</h3></center>
   <center>  <p><b>The survey seeks graduating students’ input on the quality of education they received in their<br> program and the level of preparation they had at university. The purpose of this survey is to </br>assess the quality of the academic programs. We seek your help in completing this survey.</b></p>  
     </center>
      <center>
           <table>
              
        <tr>
            <td width="200">
           
           A: Very satisfied
            
            </td>
            <td>
                <td width="200">
           B:Satisfied
            </td>
       
        <td>
                <td width="200">
           C:Uncertain
            </td>
        <td>
                <td width="200">
           D:Dissatisfied
            </td>
              <td>
                <td width="200">
                    E: Very satisfied
                </td>  
 
        </tr>
        
        </table>
          </center>
        <tr>
            <td>
                <td width=" 600">
               
                 1. The work in the program is too heavy and induces a lot of pressure.
         
             </td>
             </tr>
             
                <table>
             <tr>
                <td width="200">
               A: <input type="radio" length="10" name="A" value="A" />
              </td>
              <td width="200">
               B: <input type="radio" length="10" name="A" value="B" />
              </td>
              <td width="200">
              
               C: <input type="radio" length="10" name="A" value="C" />
              </td>
              
              
             <td width="200">
               D: <input type="radio" length="10" name="A" value="D" />
              
           </td>
           <td width="200">
                  
               E: <input type="radio" length="10" name="A" value="E" />
            </td>
              </tr>
              </table>
             <table>
        <tr>
            <td>
                <td width=" 600">
               
                 2.The program is effective in enhancing team-working abilities.
         
             </td>
             </tr>
             <table>
             <tr>
                <td width="200">
               A: <input type="radio" length="10" name="q2" value="A" />
              </td>
                   <td width="200">
               B: <input type="radio" length="10" name="q2" value="B" />
              </td>
                   <td width="200">
               C: <input type="radio" length="10" name="q2" value="C" />
                   </td>
                   <td width="200">
               D: <input type="radio" length="10" name="q2" value="D" />
              </td>
                <td width="200">
               E: <input type="radio" length="10" name="q2" value="E" />
              </td>
              </table> 
                 
             <table>
        <tr>
            <td>
                <td width=" 600">
               
                 3.The program administration is effective in supporting learning.
         
             </td>
             </tr>
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q3" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q3" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q3" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q3" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q3" value="E" />
              </td>
              </table>
             
             <table>
        <tr>
            <td>
                <td width=" 600">
               
                 4.program is effective in developing analytical and problem solving skills.
         
             </td>
             </tr>
             
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q4" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q4" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q4" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q4" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q4" value="E" />
              </td>
              </table> 
                 
             <table>
        <tr>
            <td>
                <td width=" 600">
               
                 5.The program is effective in developing independent thinking.
         
             </td>
             </tr>
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q5" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q5" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q5" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q5" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q5" value="E" />
              </td>
              </table> 
             <table>
        <tr>
            <td>
                <td width=" 600">
               
                 6.The program is effective in developing written communication skills.
         
             </td>
             </tr>
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q6" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q6" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q6" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q6" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q6" value="E" />
              </td>
              </table> 
             <table>
        <tr>
            <td>
                <td width=" 600">
               
                 7.The program is effective in enhancing team-working abilities.
         
             </td>
             </tr>
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q7" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q7" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q7" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q7" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q7" value="E" />
              </td>
              </table> 
             <table>
        <tr>
            <td>
                <td width=" 600">
               
                 8.The objectives of the program have been fully achieved.
         
             </td>
             </tr>
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q8" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q8" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q8" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q8" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q8" value="E" />
              </td>
              </table> 
             <table>
        <tr>
            <td>
                <td width=" 700">
               
                 9.Whether the contents of curriculum are advanced and meet program objectives.
         
             </td>
             </tr>
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q9" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q9" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q9" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q9" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q9" value="E" />
              </td>
              </table> 
             <table>
        <tr>
            <td>
                <td width=" 600">
               
                 10.Faculty was able to meet the program objectives .
         
             </td>
             </tr>
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q10" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q10" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q10" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q10" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q10" value="E" />
              </td>
              </table> 
             <table>
        <tr>
            <td>
                <td width=" 600">
               
                 11.Environment was conducive for learning .
         
             </td>
             </tr>
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q11" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q11" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q11" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q11" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q11" value="E" />
              </td>
              </table> 
             
                          <table>
        <tr>
            <td>
                <td width=" 600">
               
                 12. Whether the Infrastructure of the department was good.
         
             </td>
             </tr>
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q12" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q12" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q12" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q12" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q12" value="E" />
              </td>
              </table> 
                          <table>
        <tr>
            <td>
                <td width=" 800">
               
                 13.Whether the program was comprised of Co-curricular and extra-curricular activities.
         
             </td>
             </tr>
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q13" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q13" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q13" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q13" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q13" value="E" />
              </td>
              </table> 
                          <table>
        <tr>
            <td>
                <td width=" 700">
               
                 14.Whether scholarships/ grants were available to students in case of hardship.
         
             </td>
             </tr>
             <table>
             <tr>
            <td>
                <td width="200">
               A: <input type="radio" length="10" name="q14" value="A" />
              </td>
               <td>
                   <td width="200">
               B: <input type="radio" length="10" name="q14" value="B" />
              </td>
               <td>
                   <td width="200">
               C: <input type="radio" length="10" name="q14" value="C" />
              </td>
              
              
              <td>
                   <td width="200">
               D: <input type="radio" length="10" name="q14" value="D" />
              </td>
              <td>
                   <td width="200">
               E: <input type="radio" length="10" name="q14" value="E" />
              </td>
              </table> 
             
             
             <table>
                 <tr>
                     <b>
                         <question>
                 Answer Question 15  if Applicable
                 </question>
                </b> </tr>
                <tr>
                    <td>
                   15.  The internship experience is effective in enhancing.
                    <td>
             </tr>
             <tr>
                 <td>
                a. Ability to work in teams.	
                 </td>
             <td>
                 
                 A: <input type="radio" length="10" name="q15a" value="A" />
                 
             </td>
             <td>
             B: <input type="radio" length="10" name="q15a" value="B" />
             </td>
             <td>
             C: <input type="radio" length="10" name="q15a" value="C" />
             </td>
             <td>
                 D: <input type="radio" length="10" name="q15a" value="D" />
             </td>
             <td>
             E: <input type="radio" length="10" name="q15a" value="E" />
             
             </td>
             </tr>
            <tr>
                    <td>
                    
             </tr>
             <tr>
                 <td>
                b.Independent thinking.
                 </td>
             <td>
                 
                 A: <input type="radio" length="10" name="q15b" value="A" />
                 
             </td>
             <td>
             B: <input type="radio" length="10" name="q15b" value="B" />
             </td>
             <td>
             C: <input type="radio" length="10" name="q15b" value="C" />
             </td>
             <td>
                 D: <input type="radio" length="10" name="q15b" value="D" />
             </td>
             <td>
             E: <input type="radio" length="10" name="q15b" value="E" />
             
             </td>
             </tr><tr>
                    
             </tr>
             <tr>
                 <td>
                c.Appreciation of ethical Values.	
                 </td>
             <td>
                 
                 A: <input type="radio" length="10" name="q15c" value="A" />
                 
             </td>
             <td>
             B: <input type="radio" length="10" name="q15c" value="B" />
             </td>
             <td>
             C: <input type="radio" length="10" name="q15c" value="C" />
             </td>
             <td>
                 D: <input type="radio" length="10" name="q15c" value="D" />
             </td>
             <td>
             E: <input type="radio" length="10" name="q15c" value="E" />
             
             </td>
             </tr><tr>
                    
             </tr>
             <tr>
                 <td>
                d.Professional development.	
                 </td>
             <td>
                 
                 A: <input type="radio" length="10" name="q15d" value="A" />
                 
             </td>
             <td>
             B: <input type="radio" length="10" name="q15d" value="B" />
             </td>
             <td>
             C: <input type="radio" length="10" name="q15d" value="C" />
             </td>
             <td>
                 D: <input type="radio" length="10" name="q15d" value="D" />
             </td>
             <td>
             E: <input type="radio" length="10" name="q15d" value="E" />
             
             </td>
             </tr><tr>
                    
             </tr>
             <tr>
                 <td>
                e.Time management skills.
                 </td>
             <td>
                 
                 A: <input type="radio" length="10" name="q15e" value="A" />
                 
             </td>
             <td>
             B: <input type="radio" length="10" name="q15e" value="B" />
             </td>
             <td>
             C: <input type="radio" length="10" name="q15e" value="C" />
             </td>
             <td>
                 D: <input type="radio" length="10" name="q15e" value="D" />
             </td>
             <td>
             E: <input type="radio" length="10" name="q15e" value="E" />
             
             </td>
             </tr><tr>
                    
             </tr>
             <tr>
                 <td>
                f.Judgment	
                 </td>
             <td>
                 
                 A: <input type="radio" length="10" name="q15f" value="A" />
                 
             </td>
             <td>
             B: <input type="radio" length="10" name="q15f" value="B" />
             </td>
             <td>
             C: <input type="radio" length="10" name="q15f" value="C" />
             </td>
             <td>
                 D: <input type="radio" length="10" name="q15f" value="D" />
             </td>
             <td>
             E: <input type="radio" length="10" name="q15f" value="E" />
             
             </td>
             </tr><tr>
                    
             </tr>
             <tr>
                 <td>
                g.discipline.	
                 </td>
             <td>
                 
                 A: <input type="radio" length="10" name="q15g" value="A" />
                 
             </td>
             <td>
             B: <input type="radio" length="10" name="q15g" value="B" />
             </td>
             <td>
             C: <input type="radio" length="10" name="q15g" value="C" />
             </td>
             <td>
                 D: <input type="radio" length="10" name="q15g" value="D" />
             </td>
             <td>
             E: <input type="radio" length="10" name="q15g" value="E" />
             
             </td>
             </tr><tr>
             
             </tr>
             <tr>
                 <td>
                h.The link between theory and practice.	
                 </td>
             <td>
                 
                 A: <input type="radio" length="10" name="q15h" value="A" />
                 
             </td>
             <td>
             B: <input type="radio" length="10" name="q15h" value="B" />
             </td>
             <td>
             C: <input type="radio" length="10" name="q15h" value="C" />
             </td>
             <td>
                 D: <input type="radio" length="10" name="q15h" value="D" />
             </td>
             <td>
             E: <input type="radio" length="10" name="q15h" value="E" />
             
             </td>
             </tr>
             </table>
             
             <table>
               <tr>
                <td>
                    <b>
                  16. What are the best aspects of your program? </br> <textarea  name="q16" rows="10" cols="25" value=""></textarea>
                  </b></td>     
               </tr>
             </table>
             <table>
               <tr>
                <td>
                    <b>
                  12. What aspects of your program could be improved??  </br> <textarea  name="q17" rows="10" cols="25" value=""></textarea>
                  </b></td>     
               </tr>
                 
               
               <input type="text" name="deptt" value="
                      <?php 
        $deptt=$_GET['deptt'];
        echo ''.$deptt;
        ?>
                   
                      " hidden="true">
                <input type="text" name="campus" value="
                      <?php 
        $campus=$_GET['campus'];
        echo ''.$campus;
        ?>
                   
                      " hidden="true">
               
             </table>
             </br>
             <input type="submit" value="submit">
               <input type="reset" value="reset">
             </form>
        
    </body>
</html>
