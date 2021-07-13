<?php include 'partials-front/menu.php'; ?>

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php
            
            $sql = "SELECT * FROM tbl_category WHERE active='Yes'";
            $result = mysqli_query($myDB, $sql);
            $count = mysqli_num_rows($result);
            if($count>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    $id = $row['id'];
                    $title = $row['title'];
                    $image_name = $row['image_name'];
                    ?>

                        <a href="<?php echo SITEURL; ?>htmlpages/category-foods.php">
                            <div class="box-3 float-container">
                                <?php
                                    if($image_name=="")
                                    {
                                        echo "<div class='error'>Image Not Found</div>";
                                    }
                                    else
                                    {
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name ?>" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                <img src="../images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">
                                <h3 class="float-text text-white">Pizza</h3>
                            </div>
                        </a>

                    <?php
                }
            }
            else
            {
                echo "<div class='error'>Category Not Found</div>";
            }
            ?>

            <a href="<?php echo SITEURL; ?>htmlpages/category-foods.php">
            <div class="box-3 float-container">
                <img src="../images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>
            
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <?php include 'partials-front/footer.php'; ?>