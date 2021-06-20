<?php
session_start();
require "function/lib.php";
if (empty($_SESSION['user'])) {
    header("LOCATION: login.php");
}
if (isset($_POST['name'])) {
    // func to update data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $exc_update = update_user($id, $name, $mail, $pass);
    if ($exc_update == true) {
        header("LOCATION: homepage.php");
    } else {
        echo "no update";
    }
}
