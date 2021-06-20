<?php
session_start();
require "function/aut.php";
require "function/lib.php";
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $conpass = $_POST['conpass'];
    // $permission= $_POST['permission'];
    $imgname = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];

    move_uploaded_file($tmp,"design/assets/img/".$imgname);
    // $newpass = md5($pass); 
    $checkregname = regcheckname($name);
    $checkregmail = regcheckmail($mail);
    if ($pass === $conpass) {
        if ($checkregname == false) {
            include("design/regdesign.php");
            echo "<div class='mailexist'>
        <p>your name is already found<p>
        <a href='login.php'> login </a>
        </div> ";
        } elseif ($checkregmail == false) {
            include("design/regdesign.php");
            echo "<div class='mailexist'>
            <p>your mail is already found</p>
            <a href='login.php'> login </a>
            </div> ";
        } else {
            $submit = regfun($name, $mail, $pass  , $imgname);
            if ($submit == true) {
                header("LOCATION: login.php");
            } else {
                echo "not submit";
            }
        }
    } else {
        include("design/regdesign.php");
        echo "<div class='mailexist'>
        <p>your password not matching</p>
        </div> ";    }
} else {
    include("design/regdesign.php");
}
