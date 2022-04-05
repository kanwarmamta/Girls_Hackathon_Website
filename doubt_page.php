<?php
session_start();


?>

<form action = "submission.php" method = "post">
        <label>Subject: </label>
        <ul><li>
        <input type="radio" name="subj"
                value="Physics">Physics </li>
        <li>
        <input type="radio" name="subj"
                value="Chemistry">Chemistry</li>
        <li>
        <input type="radio" name="subj"
                value="Maths">Mathematics</li></ul>
         <label>Write your question here: </label>
         <br>
         <input style = "width:700px;height: 400px;" type="text" name="last_name" /><br />
         <input type="submit" value="Submit" />
         
</form>