<?php
session_start(); 

include('config.php');

if($dbconfig)
{
    //echo "Database connected";
}
else
{
    header("location: index.php");
}

if(!$_SESSION['username'])
{
    header('location: login.php');
}



?>