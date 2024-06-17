<meta charset='utf8'>

<?php

session_start();

if(isset($_SESSION["check"]))
{
    if($_SESSION["check"]=="Yes")
    {
        $id=$_GET['id'];

        $link = @mysqli_connect( 
        'localhost', 
        'root',  
        '', 
        'party'); 

        if (!$link) 
        {
            die("Unable to open database！<br/>");
        } 

    $SQL="DELETE FROM guest WHERE id='$id'";

    if($result = mysqli_query($link, $SQL))
    {
        echo "successfully deleted</br>";
    }

    echo "<a href='index.php'>view</a></br>";
    echo "<a href='logout.php'>Sign Out</a>";

    mysqli_close($link);

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