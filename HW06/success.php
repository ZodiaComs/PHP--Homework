<?php
    session_start();
?>

<html>
<head>
    <meta charset="utf-8"> 
    <title> Information Management Party </title>
</head>
<?php

if(isset($_SESSION["check"])){
    if($_SESSION["check"]=="Yes"){
        echo "Login Successful!</br>";
        echo "redirecting you to form page...</br>";
        header("Refresh:3;url=form.php");
    }
    
    else
    {
        echo "Illegal entry!";
        echo "returning to login page in 3 seconds...";
        header("Refresh:3;url=login.php");
    }
}

else
{
    echo "Illegal entry!";
    echo "returning to login page in 3 seconds...";
    header("Refresh:3;url=login.php");
}

?>

</html>