<!DOCTYPE html>

<html >
    <head>
        <meta charset="UTF-8">
        <title>SITA Project Login</title>
        <link rel="icon" href="images/favicon.png">

        <style>
            @import url(https://fonts.googleapis.com/css?family=Exo:100,200,400);
            @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

            body{
                margin: 0;
                padding: 0;
                background: #fff;
                color: #fff;
                font-family: Arial;
                font-size: 12px;
            }

            .body{
                position: absolute;
                top: -20px;
                left: -20px;
                right: -40px;
                bottom: -40px;
                width: auto;
                height: auto;
                background-image: url(images/bg.jpg);
                background-size: cover;
                -webkit-filter: blur(5px);
                z-index: 0;
            }

            .grad{
                position: absolute;
                top: -20px;
                left: -20px;
                right: -40px;
                bottom: -40px;
                width: auto;
                height: auto;
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
                z-index: 1;
                opacity: 0.7;
            }

            .header{
                position: absolute;
                top: calc(50% - 35px);
                left: calc(50% - 255px);
                z-index: 2;
            }

            .header div{
                float: left;
                color: #fff;
                font-family: 'Exo', sans-serif;
                font-size: 35px;
                font-weight: 200;
            }

            .header div span{
                color: #5379fa !important;
            }

            .login{
                position: absolute;
                top: calc(50% - 75px);
                left: calc(50% - 50px);
                height: 150px;
                width: 350px;
                padding: 10px;
                z-index: 2;
            }

            .login input[type=text]{
                width: 250px;
                height: 30px;
                background: transparent;
                border: 1px solid rgba(255,255,255,0.6);
                border-radius: 2px;
                color: #fff;
                font-family: 'Exo', sans-serif;
                font-size: 16px;
                font-weight: 400;
                padding: 4px;
            }

            .login input[type=password]{
                width: 250px;
                height: 30px;
                background: transparent;
                border: 1px solid rgba(255,255,255,0.6);
                border-radius: 2px;
                color: #fff;
                font-family: 'Exo', sans-serif;
                font-size: 16px;
                font-weight: 400;
                padding: 4px;
                margin-top: 10px;
            }

            .login input[type=submit]{
                width: 260px;
                height: 35px;
                background: #fff;
                border: 1px solid #fff;
                cursor: pointer;
                border-radius: 2px;
                color: #a18d6c;
                font-family: 'Exo', sans-serif;
                font-size: 16px;
                font-weight: 400;
                padding: 6px;
                margin-top: 10px;
            }

            .login input[type=submit]:hover{
                opacity: 0.8;
            }

            .login input[type=submit]:active{
                opacity: 0.6;
            }

            .login input[type=text]:focus{
                outline: none;
                border: 1px solid rgba(255,255,255,0.9);
            }

            .login input[type=password]:focus{
                outline: none;
                border: 1px solid rgba(255,255,255,0.9);
            }

            .login input[type=submit]:focus{
                outline: none;
            }

            ::-webkit-input-placeholder{
               color: rgba(255,255,255,0.6);
            }

            ::-moz-input-placeholder{
               color: rgba(255,255,255,0.6);
            }
        </style>
    </head>

    <body>
      <div class="body"></div>
        <div class="grad"></div>
        <div class="header">
            <div>SITA<span>Project</span></div>
        </div>
        <br>
        <div  class="login" >
            <table align="center" border="0" cellpadding="0" cellspacing="1" width="300">
                <tr>
                    <td>
                        <form method="post" name="">
                            <?php
                                if (isset($_POST['submit']))
                                {     
                                    include("connect.php");
                                    session_start();

                                    $nik=$_POST['NIK'];
                                    $password=$_POST['password'];
                                    $_SESSION['login_user']=$nik; 
                                    $query = mysql_query("SELECT nik FROM user WHERE nik='$nik' and password='$password'",$conn);

                                     if (mysql_num_rows($query) != 0)
                                    {
                                        if(empty($_SESSION)){
                                            session_start();
                                        }
                                        echo "<script language='javascript' type='text/javascript'> location.href='Home.php' </script>";   
                                    }

                                    else
                                    {
                                        session_destroy();
                                        echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
                                    }
                                }
                            ?>

                            <table border="0" cellpadding="3" cellspacing="1" width="100%">
                                <tr>
                                    <input placeholder="NIK" id="NIK" name="NIK" type="text">
                                </tr>
                                <tr>
                                    <input placeholder="password" id="password" name="password" type="password">
                                </tr>
                                <tr>
                                    <input name="submit" type="submit" value="Login">
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </body>

</html>

<?php mysql_close($conn); ?>
