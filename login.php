<?php
sesssion_start();
$cookie_username =$_seassio['user'];
$cookie_password =$_SESSION['password'];
setcookie($_cookies $cookie_username,$_cookies_password,time ()+(80400*30),"/")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content=width=device-width,initial-scale=1.0">
        <title>Rejistration</title>
</head>
<body>
    <table border="1" width="60%" cellspacing="0" aling="center">
        <tr>
            <td>img src=<"abstract-geomatric-logo-or-infinity-line-logo-for-your-company-free -vector.jpg"width ="80px"hight="80px"aling="left">
            <p aling="right"><a href="index.php">|</a>
            <a herf="login.php">login|</a>
            <a herf="Rejistationonindex.php">Rejistation</a></p>
</tr>
<tr>
    <td co;span="2" height="100px">
        <form method="post">
            <fieldset>

            <legent>LOGIN</legent>
            user Name:<input type="text" name="uname" value=""></br>
            password: <input type="password"name="pass"value=""></br>
            <hr>
            <input type="checkbox" name="rem"value=""remember me
            <input type="submit" name="sub"value="submit">
            <a href="Forgetpassword.php">Forget password?</a>
</fieldset>
</form>
</td>
</tr>
<td colspan="2"height="10px"aling="center">copyright@ 2017</td>
</tr>

</table>

</body>
</html>
<?php

if(isset($_post['sub']))
{
    if($_POST['uname'] !=" "&& $_post['pass'] != " ")
    {
        if($_SESSION ['user'] ==$_POST['uname']&&$_SESSION['pass'] ==$_POST['pass'])
        {
            header("location : dasboard.php");
        }
        else if($_SESSION['user']==$_post['uname']&&$_SESSION['pass']&& isset($_POST['rem']))
        {

        }
        else
        {
            echo"wrong username or password !";
        }
        
    }
}


