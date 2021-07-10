<?php

//Authorization check -Access control
if(!isset($_SESSION['user']))
{
    $_SESSION['not-logged-in'] = "<div class='error text-center'>Please login first</div>";
    header('location:'.SITEURL.'admin/login.php');
}

?>