<meta charset='utf8'>

<?php

$No=$_GET['No'];

$link = @mysqli_connect( 
    'localhost', 
    'root',  
    '', 
    'form'); 

    $SQL="DELETE FROM guest WHERE No='$No'";

if($result = mysqli_query($link, $SQL)){
    echo "<BR/>successfully deleted";
}
echo "<br/><a href='view.php'>view</a>";
?>