
<?php
// Initialize the session
session_start();
       
// Store the submitted data sent
// via POST method, stored 
  
// Temporarily in $_POST structure.
$_SESSION['first_name'] = $_POST['first_name'];
  
$_SESSION['last_name']
        = $_POST['last_name'];

$_SESSION['password']
        = $_POST['pass'];

$_SESSION['class'] = $_POST['grade'];

$mydata = [$_SESSION['first_name'],$_SESSION['last_name'],$_SESSION['password'], $_SESSION['class']];


$row = 1;
if (($handle = fopen("test_name.csv", "r+")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        
        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";

        } 
    }
    fputcsv($handle, $mydata);
    echo "<br /><p>These are your details: </p>\n";
    
    for ($c=0; $c < $num; $c++) {
        
        echo $mydata[$c] . "<br />\n";

    } 
    
    fclose($handle);
}



?>
