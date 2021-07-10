<?php include "partials/menu.php"; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1><br>
        <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
        ?>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td> Current Password: </td>
                    <td> <input type="password" name="currentpassword" placeholder="Current Password"> </td>
                </tr>
                <tr>
                    <td> New Password: </td>
                    <td> <input type="password" name="newpassword" placeholder="New Password"> </td>
                </tr>
                <tr>
                    <td> Confirm Password: </td>
                    <td> <input type="password" name="confirmpassword" placeholder="Confirm Password"> </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" class="btn-primary" name="submit" value="Change Password">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php

    if(isset($_POST['submit']))
    {
        $id= $_POST['id'];
        $current_password = md5($_POST['currentpassword']);
        $new_password = md5($_POST['newpassword']);
        $confirm_password = md5($_POST['confirmpassword']);

        $sql = "SELECT * FROM tbl_admin WHERE id= $id AND password='$current_password'";

        $result = mysqli_query($myDB, $sql);

        if($result==true)
        {
            $count=mysqli_num_rows($result);
            if($count==1)
            {
                if($new_password==$confirm_password)
                {
                    $sql2 = "UPDATE tbl_admin SET password='new_password' WHERE id=$id";

                    $result2 = mysqli_query($myDB, $sql2);

                    if($result2==true){
                        $_SESSION['changed-password'] = "<div class='success'>Password changed</div>";
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                    else
                    {
                        $_SESSION['changed-password'] = "<div class='error'>Failed To Change Password</div>";
                        header('location:'.SITEURL.'admin/manage-admin.php');
                    }
                }
                else
                {
                    $_SESSION['pwd-did-not-match'] = "<div class='error'>Password didnt match</div>";
                    header('location:'.SITEURL.'admin/manage-admin.php');
                }
            }
            else
            {
                $_SESSION['user-not-found'] = "<div class='error'>User Not Found</div>";
                header('location:'.SITEURL.'admin/manage-admin.php');
            }
        }
    }
    else
    {
    }

?>

<?php include "partials/footer.php"; ?>