
<html>
   <head>
      <title>Registration Page</title>
   </head>
   <body>
      <form action="list_page.php" method="post">
         <label>First Name: </label>
         <input type="text" name="first_name" /><br />
         <label>Last name: </label>
         <input type="text" name="last_name" /><br />
         <label>Password: </label>
         <input type="password" name="pass" /><br />

         <label>Current college/Exam preparing for: </label> 
        <input type="radio" name="grade"
                value="jee">IIT-JEE
          
        <input type="radio" name="grade"
                value="neet">NEET

        <input type="radio" name="grade"
                value="first">First Year College
                
         <input type="submit" value="Submit" />
         <input type="reset" value="Clear" />
      </form>
   </body>
</html>