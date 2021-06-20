<?php
session_start();
require "function/lib.php";
if (empty($_SESSION['user'])) {
    header("LOCATION: login.php");
}
// echo ($_POST['id']);
delete_user($_POST['id']);
header("LOCATION: homepage.php");
