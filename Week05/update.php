<meta charset='utf8'>
<?php

$No=$_GET["No"];

$link = @mysqli_connect( 
    'localhost', 
    'root',  
    '', 
    'form'); 

$SQL="SELECT * FROM guest WHERE No='$No'";
if($result = mysqli_query($link,$SQL))
{
    $row=mysqli_fetch_assoc($result);
    $Name=$row["Name"];
    $Department=$row["Department"];
    $Email=$row["Email"];
}
?>
<form action="updatecheck.php" method="post">
student ID:<?php echo $No ?><input type="hidden" name="sNo" value="<?php echo $No ?>"><br/>
name:<input type="text" name="sName"><br/>
department:<input type="text" name="sDept"><br/>
E-mail:<input type="text" name="sEmail"><br/>
<input type="submit">
</form>