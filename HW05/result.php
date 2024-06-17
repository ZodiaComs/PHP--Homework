<?php

session_start();

$sName=$_POST["sName"];
$sID=$_POST["sID"];
$sEmail=$_POST["sEmail"];
$sLevel=$_POST["sLevel"];
$sGender=$_POST["sGender"];
$sGift=$_POST["sGift"];

$link = @mysqli_connect(
    'localhost',
    'root',
    '',
    'party');


$SQL = "INSERT INTO guest (name, student_id, email, level, gender, gift) VALUES ('$sName', '$sID', '$sEmail', '$sLevel', '$sGender', '$sGift')";

if($result = mysqli_query($link, $SQL)){
    echo "registration successful!</br>";
}

echo "list of guests: <a href='index.php'>view</a></br>";
echo "<a href='logout.php'>Sign Out</a>";
?>