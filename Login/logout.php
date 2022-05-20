<?php
    //Include constants.php for SITEURL
    include('../config/constants.php');
    //1.Destroy the session
    session_destroy();//unsets $_SESSION['user']

    //2.Direct to login page
    header('location:'.SITEURL.'admindash/login.php');
?>