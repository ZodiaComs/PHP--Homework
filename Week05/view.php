<?php
$link = mysqli_connect(
    'localhost',  
    'root',  
    '',     
    'form');   

if (!$link) {
    die("Unable to open database！<br/>" . mysqli_connect_error());
} else {
    echo "The database was opened successfully!<br/>";
}

$SQL = "SELECT * FROM guest";
$result = mysqli_query($link, $SQL);

echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row["No"] . "</td>";
    echo "<td>" . $row["Name"] . "</td>";
    echo "<td>" . $row["Department"] . "</td>";
    echo "<td>" . $row["Email"] . "</td>";
    echo "<td><a href='del.php?No=" . $row["No"] . "'>刪除</a></td>";
    echo "<td><a href='update.php?No=" . $row["No"] . "'>修改</a></td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($link);

?>