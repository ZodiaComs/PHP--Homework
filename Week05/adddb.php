<meta charset='utf8'>

<?php
    $No=$_POST["sNo"];
    $Name=$_POST["sName"];
    $Department=$_POST["sDept"];
    $Email=$_POST["sEmail"];


$link = @mysqli_connect( 
    'localhost',
    'root',  
    '', 
    'form');  

    $SQL="INSERT INTO guest(No,Name,Department,Email) VALUES('$sNo','$sName','$sDept','$sEmail')";

if($result = mysqli_query($link, $SQL)){
    echo "<BR/>added successfully";
}
echo "<br/><a href='view.php'>view</a>";
?>