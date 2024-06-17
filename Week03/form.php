<html>

<head>
    <meta charset="utf-8"> 
    <title> Information Management Party </title>
</head>

<body style = "background-color: teal;">
    <center>
        <b> Information Management Party Registration Form </b>
        </br>
        <img src = "../img/party.jpg" width = "35%" height = "35%">
    </center>

<center>
<form action="reply.php" method="post">
    Name：<input type="text" name="sName" required></br>
    Student ID：<input type="text" name="sID" required></br>
    E-mail：<input type="email" name="sEmail" required><br/>
    Department level：<input type="text" name="sLevel" required></br>
    Gender：
    <input type="radio" name="sGender" value="male">male
    <input type="radio" name="sGender" value="female">female    
    </br>

    <P>
    Choose one of the gifts：
    <input type="radio" name="sGift" value="candies">candies
    <input type="radio" name="sGift" value="pins">pins
    <input type="radio" name="sGift" value="snacks">snacks
    </p>
    
    <input type="submit" value="submit">
    <input type="reset" value="reset">
</form>
</center>

</body>
</html>