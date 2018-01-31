<?php

    // $username = "admin";
    // $pass = "123";
    if(isset($_POST['save'] ))
    {
            if($_POST['username'] == "admin"&& $_POST['password']== "123")
            {
                echo "<script language='javascript'>";
                echo "alert(' Dang nhap thanh cong');";
                echo "location.href='welcome.php';";
                echo "</script>";
            }
    }
?>
<html>
<head>
   <title>POST</title> 
</head>
<body>
    <form method = "POST">
        <input type="text" name ="username">
        <input type="password" name = "password">
        <input type="submit" name="save" value = "save" >
    </form>
</body>
</html>