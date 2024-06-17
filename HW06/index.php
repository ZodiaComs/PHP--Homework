<meta charset='utf8'>

<?php

session_start();



$link = mysqli_connect(
    'localhost',  
    'root',  
    '',     
    'party');   

if (!$link) 
{
    die("Unable to open database！<br/>");
} 

$SQL = "SELECT * FROM guest";
$result = mysqli_query($link, $SQL);

echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) 
{
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["student_id"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["level"]."</td>";
    echo "<td>".$row["gender"]."</td>";
    echo "<td>".$row["gift"]."</td>";
    echo "<td><a href='del.php?id=".$row["id"]."'>delete</a></td>";
    echo "<td><a href='update.php?id=".$row["id"]."'>update</a></td>";
    echo "</tr>";
}

echo "</table>";
echo "<a href='form.php'>add more</a></br>";
echo "<a href='upload.php'>Upload a Picture here</a></br>";
echo "<a href='logout.php'>Sign Out</a>";

mysqli_close($link);

?>