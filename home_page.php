<?php
session_start();

$fname = $_SESSION["first_name"];
$lname = $_SESSION["last_name"];

if ($_SESSION["class"]=="jee"){
    $pyq = "pyq/jee.php";
    $qbank = "qbank/jeeq.php";
    //$dpage ="doubt_page/jee.php";
}else if($_SESSION["class"]=="neet"){
    $pyq = "pyq/neet.php";
    $qbank = "qbank/neetq.php";
    //$dpage ="doubt_page/neet.php";
}else{
    $pyq = "pyq/first.php";
    $qbank = "qbank/firstq.php";
    //$dpage ="doubt_page/first.php";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Name</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" >

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style3.css">

</head>
<body>
    
<div class="container">

<header>

    <a href="#" class="logo">Site<span>Name</span></a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="books.html">Books</a>
        <a href=<?php echo $pyq; ?>>PYQ's</a>
        <a href=<?php echo $qbank; ?>>Question Bank</a>
        <a href="submission.php">Doubt Section</a>
      
        <a href="contact_us.html">Contact Us</a>
    </nav>

</header>

<!-- home section  -->

<section class="home">

    <div style="top: 50%; text-align: left;margin-top:100px;
    left: 50%;height: 330px;" class="content">
    
        <h3 >Hello! <?php echo $_SESSION["first_name"];?> </h3>

           <h1> This is what we know about you</h1>

           <h1> Profile details</h1>

        <p>Name: <?php echo $_SESSION["first_name"]," ",$_SESSION["last_name"];?></p>

           <p> Program chosen <?php echo $_SESSION["class"];?></p>
        <p> So what are you waiting for get started!!
        </p>
        
        
    </div>
    <!-- footer section  -->

<section class="footer">

    <div class="box-container">
        <div style ="height: 310px; width: 375px;margin-top: 75px;"class ="image">
            <img src="contact.png" alt="">
        </div>

</div>

</section>


</body>
</html>






