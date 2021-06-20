<?php
session_start();
require "function/lib.php";
if (empty($_SESSION['user'])) {
    header("LOCATION: login.php");
}
$dataofmember = showmemberdate();
include("design/userhomedesign.php");   
//  
$username = $_SESSION['user'];