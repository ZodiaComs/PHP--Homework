<meta charset='utf8'>
<?php
echo "File name: ".$_FILES["myFile"]["name"]."<br/>";
echo "Temporary file name: ".$_FILES["myFile"]["tmp_name"]."<br/>";
echo "File size: ".$_FILES["myFile"]["size"]."<br/>";
echo "File type: ".$_FILES["myFile"]["type"]."<hr/>";
$ext=prthinfo($_FILES["myFile"]["name"],PATHINFO_EXTENSUON);
$upname=time().".".$ext;
$upname="pic\\".$upname;
echo $upname;
if(copy($_FILES["myFile"]["tmp_name"],"test.jpg")){
    echo"image uploaded successfully!";
    unlink($_FILES["myFile"]["tmp_name"]);
}
?>