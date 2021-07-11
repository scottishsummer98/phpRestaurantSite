<?php

include '../config/constants.php';

$id = $_GET['id'];

$sql = "DELETE FROM tbl_admin WHERE id=$id";

$result = mysqli_query($myDB, $sql);
if($result==true){
    $_SESSION['delete']="<div class='success'>Admin Deleted Successfully</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
} else {
    $_SESSION['delete']= "<div class='error'>Failed to Delete Admin. Please try again</div>";
    header('location:'.SITEURL.'admin/manage-admin.php');
}

?>