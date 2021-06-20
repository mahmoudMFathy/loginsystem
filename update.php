<?php
session_start();
require "function/lib.php";
if (empty($_SESSION['user'])) {
    header("LOCATION: login.php");
}
if(isset($_POST['id'])){
// func show member data
$getuserdata = GetUserById($_POST['id']);
include "design/updatedesign.php";

}