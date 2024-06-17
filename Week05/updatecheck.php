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

    $SQL="UPDATE guest SET Name='$Name',Department='$Department',Email='$Email' WHERE No='$No'";
if($result = mysqli_query($link, $SQL)){
    echo "updated successfully";
}
echo "<br/><a href='view.php'>view</a>";
?>