<?php include "partials/menu.php"; ?>

<div class="main-content">
    <div class="wrapper">
        <h1> Add Admin </h1><br>
        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>

        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td> Full Name: </td>
                    <td> <input type="text" name="fullname" placeholder="Enter Your Full Name"> </td>           
                </tr>
                <tr>
                    <td> User Name: </td>
                    <td> <input type="text" name="username" placeholder="Enter Your User Name"> </td>           
                </tr>
                <tr>
                    <td> Password: </td>
                    <td> <input type="password" name="password" placeholder="Enter Your Password"> </td>           
                </tr>
                <tr>
                    <td colspan="2"><br>
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary"> 
                    </td>        
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include "partials/footer.php"; ?>

<?php

    //1.Getting data from form
        if(isset($_POST['submit'])){

        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO `tbl_admin`(`fullname`, `username`, `password`)
                VALUES ('$fullname','$username','$password')";
        
        $result = mysqli_query($myDB, $sql) or die(mysqli_error());

        if($result==TRUE) {
            $_SESSION['add'] = "Admin Added Successfully";
            header("location:".SITEURL.'admin/manage-admin.php');
        } else {
            $_SESSION['add'] = "Failed To Add Admin";
            header("location:".SITEURL.'admin/add-admin.php');
        }
    }

?>