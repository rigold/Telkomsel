<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table align="center" bgcolor="#CCCCCC" border="0" cellpadding="0"
    cellspacing="1" width="300">
        <tr>
            <td>
                <form method="post" name="">
                    <table bgcolor="#FFFFFF" border="0" cellpadding="3"
                    cellspacing="1" width="100%">
                        <tr>
                            <td align="center" colspan="3"><strong>User
                            Login</strong></td>
                        </tr>
                        <tr>
                            <td width="78">Username</td>
                            <td width="6">:</td>
                            <td width="294"><input id="username" name=
                            "username" type="text"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>:</td>
                            <td><input id="password" name="password" type=
                            "password"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td><input name="submit" type="submit" value=
                            "Login"> <input name="reset" type="reset" value=
                            "reset"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
    <?php
    if (isset($_POST['submit']))
        {     
    include("connect.php");
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['login_user']=$username; 
    $query = mysqli_query($conn,"SELECT nama_user FROM user WHERE nama_user='$username' and password='$password'");
     if (mysqli_num_rows($query) != 0)
    {
        session_start();
        echo "<script language='javascript' type='text/javascript'> location.href='Home.php' </script>";   
    }
    else
    {
        session_destroy();
        echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
    }
    }
    ?>
</body>
</html>