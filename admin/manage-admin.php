<?php include 'partials/menu.php' ?>

<!-- Main Content section starts here -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Admin</h1><br><br>
            <!-- button to add admin -->
            <a href="add-admin.php" class="btn-primary">Add admin</a><br><br>
            <?php
                if(isset($_SESSION['add']))
                {
                    echo "<br>";
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
                if(isset($_SESSION['delete']))
                {
                    echo "<br>";
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }
                if(isset($_SESSION['update']))
                {
                    echo "<br>";
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }
                if(isset($_SESSION['user-not-found']))
                {
                    echo "<br>";
                    echo $_SESSION['user-not-found'];
                    unset($_SESSION['user-not-found']);
                }
                if(isset($_SESSION['pwd-did-not-match']))
                {
                    echo "<br>";
                    echo $_SESSION['pwd-did-not-match'];
                    unset($_SESSION['pwd-did-not-match']);
                }
                if(isset($_SESSION['changed-password']))
                {
                    echo "<br>";
                    echo $_SESSION['changed-password'];
                    unset($_SESSION['changed-password']);
                }
            ?>

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Actions</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM tbl_admin";
                    $result = mysqli_query($myDB, $sql);
                    if($result==TRUE)
                    {
                        $count = mysqli_num_rows($result);
                        $sn=1;
                        if($count>0)
                        {
                            while($rows=mysqli_fetch_assoc($result))
                            {
                                $id= $rows['id'];
                                $fullname= $rows['fullname'];
                                $username= $rows['username'];
                ?>
                                <tr>
                                    <td> <?php echo $sn++ ?> </td>
                                    <td> <?php echo $fullname; ?></td>
                                    <td> <?php echo $username; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-adminpass.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a> 
                                        <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondary">Update</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete</a> 
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                    }
                    else
                    {

                    }
                ?>
            </table>
        </div>
    </div>
<!-- Main Content section ends here -->

<?php include 'partials/footer.php' ?>