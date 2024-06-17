<meta charset="utf-8">

<?php
    session_start();
    header("Refresh:3 url=login.php");
?>

<html>
<head>
    <title> Error </title>
</head>
<body>
    <h1><center>Login Failed</center></h1>
    <h2><center>Incorrect username / password</center></h2>
    <h1><center>returning to login page in 3 seconds...</center></h1>
    <center><img src="../img/error.jpeg" width = "35%" height = "35%"></center>
</body>
</html>