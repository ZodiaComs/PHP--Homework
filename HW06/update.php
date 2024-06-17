<meta charset='utf8'>
<?php

session_start();

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

        $SQL="SELECT * FROM guest WHERE id='$id'";
        if($result = mysqli_query($link,$SQL))
        {
            $row=mysqli_fetch_assoc($result);
            $name=$row["name"];
            $sID=$row["student_id"];
            $email=$row["email"];
            $level=$row["level"];
            $gender=$row["gender"];
        }

?>

<form action='updatecheck.php' method='post'>
            The information you are currently modifying is: number <?php echo $id ?><input type='hidden' name='uid' value='<?php echo $id ?>'><br/><br/>
            name:<input type='text' name='uName' value='<?php echo $name ?>'><br/>
            student ID:<input type='text' name='usID' value='<?php echo $sID ?>'><br/>
            E-mail:<input type='text' name='uEmail' value='<?php echo $email ?>'><br/>
            department level:<input type='text' name='uLevel' value='<?php echo $level ?>'><br/>
            gender:<input type='text' name='uGender' value='<?php echo $gender ?>'><br/>
            <input type='submit'> </br>
            <a href='logout.php'>Sign Out</a>
        </form>
