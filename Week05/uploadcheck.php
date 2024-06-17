<meta charset='utf8'>

<?php 
echo "File Name: ".$_FILES["myFile"]["name"]."<br/>";
echo "Temporary File Name: ".$_FILES["myFile"]["tmp_name"]."<br/>";
echo "File Size: ".$_FILES["myFile"]["size"]."<br/>";
echo "File Type: ".$_FILES["myFile"]["type"]."<hr/>";

$ext = pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
$upname=time().".".$ext;
$upname="pic\\".$upname;
echo $upname;

if(copy($_FILES["myFile"]["tmp_name"],$upname)){
    echo "File uploaded successfully";
    unlink($_FILES["myFile"]["tmp_name"]);
}

echo "<br><a href='upload.php'>Previous page</a><br>";
echo "<a href='login.php'>Home</a>";

?>