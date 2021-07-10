<?php include '../config/constants.php'; ?>
<html>
    <head>
        <title>Login- Food Order System</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>
    <body>
        <div class="login">
            <h1 class="text-center">Login</h1><br>
            <!--Login form starts here-->
            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
                if(isset($_SESSION['not-logged-in']))
                {
                    echo $_SESSION['not-logged-in'];
                    unset($_SESSION['not-logged-in']);
                }
            ?>
            <br>
            <form class="text-center" action="" method="POST">
                Username:
                <input type="text" name="username" placeholder="Enter Username"><br><br>
                Password:
                <input type="password" name="password" placeholder="Enter Password"><br><br>
                <input type="submit" name="submit" value="login" class="btn-primary"><br><br>
            </form>
            <!--Login form ends here-->
            <p class="text-center">Created By Sami Rahman</p>
        </div>
    </body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

        $result = mysqli_query($myDB, $sql);

        $count = mysqli_num_rows($result);
        if($count==1)
        {
            $_SESSION['login'] = "<div class='success'>Login Successfull</div>";
            $_SESSION['user'] = $username;
            header('location:'.SITEURL.'admin/index.php');
        }
        else
        {
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match</div>";
            header('location:'.SITEURL.'admin/login.php');  
        }
    }

?>