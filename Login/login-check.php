<?php

    //Authorization -Access control
    //Check whether the user is logged in or not
    if(!isset($_SESSION['user']))
    {
        //uservis not logged in
        //Redirect to login page with message
        $_SESSION['no-login-message']="<div class='error'style='color:#ffffff;'>Please login to access Admin Panel.</div>";

        //Redirect to login page
        header('location:'.SITEURL.'/admindash/login.php');
    }
?>