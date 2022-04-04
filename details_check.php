
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



$mydata = [$_SESSION['first_name'],$_SESSION['last_name'],$_SESSION['password'], $_SESSION['class']];

$k = 0;
$row = 1;
if (($handle = fopen("test_name.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        if ($data[0]==$mydata[0] && $data[1]==$mydata[1] && $data[2]==$mydata[2]){
            $k=1;
        }
        $row++;  
    }   
    fclose($handle);
}

if ($k==1){
    header("Location: home_page.php");

}else{
    echo "<p>Invalid</p>";
}



?>
