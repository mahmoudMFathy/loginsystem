<?php
session_start();
require "function/lib.php";
if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    // $loginpass = md5($pass);
    $checklogin = logincheck($mail, $pass);
    print_r($checklogin);

    if ($checklogin != false) {
        $_SESSION['user'] = $checklogin;
        header("LOCATION: homePage.php");
    } else {
        echo "<div class='mailexist'>
        <p>you not a member insert correct 
        <br>email and password  <p>
        </div> ";
    }
}
include("design/logindesign.php");
