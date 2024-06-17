<?php
    $No=$_POST["sNo"];
    $Name=$_POST["sName"];
    $Department=$_POST["sDept"];
    $Email=$_POST["sEmail"];
    
    //連接資料庫
    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'form');  // 預設使用的資料庫名稱
    
    //SQL語法
    $SQL="UPDATE guest SET Name='$Name',Department='$Department',Email='$Email' WHERE No='$No'";
    if($result = mysqli_query($link,$SQL))
    {
        echo "<br/>update completed";
    }
    echo "<br/><a href='view.php'>view</a>";


?>