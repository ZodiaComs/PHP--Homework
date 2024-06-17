<meta charset='utf8'>

<?php

session_start();

if(isset($_SESSION["check"]))
{
    if($_SESSION["check"]=="Yes")
    {
        $id=$_POST["uid"];
        $sName=$_POST["uName"];
        echo "name：".$sName."<br/>";
        $sID=$_POST["usID"];
        echo "student ID：".$sID."<br/>";
        $sEmail=$_POST["uEmail"];
        echo "E-mail：".$sEmail."<br/>";
        $sLevel=$_POST["uLevel"];
        echo "department level：".$sLevel."<br/>";
        $sGender=$_POST["uGender"];
        echo "gender：".$sGender."<br/>";
        
        
        $link = @mysqli_connect( 
            'localhost',
            'root',  
            '', 
            'party');  
        
            $SQL="UPDATE guest SET name='$sName', student_id='$sID', email='$sEmail', level='$sLevel', gender='$sGender' WHERE id='$id'";
        if($result = mysqli_query($link, $SQL)){
            echo "updated successfully";
        }
        echo "<br/><a href='index.php'>view</a><br/>";
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