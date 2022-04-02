<?php
$dbhost = 'remotemysql.com:3306';
$dbuser = 'BS1CwOyLI0';
$dbpass = 'S9h6V3fRuz';
$dbname = 'BS1CwOyLI0';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $conn ) {
   die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($conn);

?>
<!DOCTYPE html>

<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">

    <title>We3_Web_Weavers</title>

    <style>
        body{
            text-align: center;
            font-size: 30px;
        }

        .log_label{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>

</head>

<body>
    
    <h1 id = "log_label">Login</h1> 
    <br>

    <form action = "home_page.html" method = "get">
        <label>First Name</label>
        <input type = "text" name = "first_name"/>
        <br><br>
        <label>Last Name</label>
        <input type = "text" name = "second_name"/>
        <br><br>
        <label>Password</label>
        <input type="text" name="passwd" />
        <br><br>
        <input type="submit" value="Submit" />
    </form>
    

    
</body>


</html>
