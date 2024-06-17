<?php
ob_start();
session_start();
?>

<meta charset="utf-8">
<?php
$sId="nuk";
$sPwd="12345";

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