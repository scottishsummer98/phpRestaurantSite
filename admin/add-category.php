<?php include 'partials/menu.php'; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1><br>

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>
        
        <!-- Add Category form starts -->
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td> Title: </td>
                    <td> <input type="text" name="title" placeholder="Enter a Category Title"> </td>           
                </tr>
                <tr>
                    <td> Select Image: </td>
                    <td>
                        <input type="file" name="image">
                    </td>        
                </tr>
                <tr>
                    <td> Featured: </td>
                    <td>
                        <input type="radio" name="featured" value="Yes"> Yes
                        <input type="radio" name="featured" value="No"> No
                    </td>        
                </tr>
                <tr>
                    <td> Active: </td>
                    <td>
                        <input type="radio" name="active" value="Yes">Yes
                        <input type="radio" name="active" value="No">No
                    </td>           
                </tr>
                <tr>
                    <td colspan="2"><br>
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary"> 
                    </td>        
                </tr>
            </table>
        </form>
        <!-- Add Category form ends -->
    </div>
</div>
<?php

    if(isset($_POST['submit']))
    {
        $title = $_POST['title'];

        if(isset($_FILES['image']['name']))
        {
            $image_name = $_FILES['image']['name'];
            if($image_name!="")
            {
                //Auto renaming image. Get the extension from the image file
                $ext = end(explode('.',$image_name));
                //rename the image
                $image_name = "Food-category_".rand(000,999).'.'.$ext;

                $source_path = $_FILES['image']['tmp_name'];
                $destination_path = "../images/category/".$image_name;

                $upload = move_uploaded_file($source_path, $destination_path);

                if($upload==false)
                {
                    $_SESSION['upload'] = "<div class='error'>Failed to upload image</div>";
                    header('location:'.SITEURL.'admin/add-category.php');
                    die();            
                }
            }
        }
        else
        {
            $image_name= " ";
        }

        if(isset($_POST['featured']))
        {
            $featured = $_POST['featured'];
        }
        else
        {
            $featured = "No";
        }

        if(isset($_POST['active']))
        {
            $active = $_POST['active'];
        }
        else
        {
            $active = "No";
        }
        
        $sql = "INSERT INTO `tbl_category`(`title`, `image_name`, `featured`, `active`)
                VALUES ('$title', '$image_name', '$featured','$active')";

        $result = mysqli_query($myDB, $sql);

        if($result==true)
        {
            $_SESSION['add'] = "<div class='success'>Category added successfully</div>";
            header('location:'.SITEURL.'admin/manage-category.php');
        }
        else
        {
            $_SESSION['add'] = "<div class='error'>Failed to Add Category</div>";
            header('location:'.SITEURL.'admin/add-category.php');
        }
    }
        
?>
<?php include 'partials/footer.php'; ?>