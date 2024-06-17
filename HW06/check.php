<?php
ob_start();
session_start();
?>

<meta charset="utf-8">
<?php

        $link = @mysqli_connect( 
            'localhost', 
            'root',  
            '', 
            'party'); 
    
            if (!$link) 
            {
                die("Unable to open database<br/>");
            } 
        
        
        $SQL="SELECT * FROM login";
        if($result = mysqli_query($link,$SQL))
        {
            $row=mysqli_fetch_assoc($result);
            $sId=$row["sId"];
            $sPwd=$row["sPwd"];
        }


$uId=$_GET["uId"];
$uPwd=$_GET["uPwd"];

if($sId==$uId && $sPwd==$uPwd)
{
    $_SESSION["check"]="Yes";
    header("Location:success.php");
}

else
{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}

ob_flush();

?>