<?php include 'partials/menu.php' ?>

<!-- Main Content section starts here -->
    <div class="main-content">
        <div class="wrapper">
            <h1>Dashboard</h1><br><br>

            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>

            <div class="col-4 text-center">
                <?php
                    $sql = "SELECT * FROM tbl_category";
                    $result = mysqli_query($myDB, $sql);
                    $count = mysqli_num_rows($result);
                ?>
                <h1><?php echo $count; ?></h1><br>
                Categories
            </div>

            <div class="col-4 text-center">
                <?php
                    $sql2 = "SELECT * FROM tbl_food";
                    $result2 = mysqli_query($myDB, $sql2);
                    $count2 = mysqli_num_rows($result2);
                ?>
                <h1><?php echo $count2; ?></h1><br>
                Foods
            </div>

            <div class="col-4 text-center">
                <?php
                    $sql3 = "SELECT * FROM tbl_order";
                    $result3 = mysqli_query($myDB, $sql3);
                    $count3 = mysqli_num_rows($result3);
                ?>
                <h1><?php echo $count3; ?></h1><br>
                Total Orders
            </div>

            <div class="col-4 text-center">
                <?php
                    $sql4 = "SELECT SUM(total) AS Total FROM tbl_order WHERE status='Delivered'";
                    $result4 = mysqli_query($myDB, $sql4);

                    $row4 = mysqli_fetch_assoc($result4);
                    $total_revenue = $row4['Total'];
                ?>
                <h1>$<?php echo $total_revenue; ?></h1><br>
                Revenue Generated
            </div>
            <div class="clearFix"></div>

        </div>
    </div>
<!-- Main Content section ends here -->

<?php include 'partials/footer.php' ?>       