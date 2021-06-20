<?php
// chech mail in reg page
function regcheckmail($mail)
{
    $dbconmail = mysqli_connect("localhost", "root", "", "regdb");
    $quarymail = mysqli_query($dbconmail, "SELECT  `regmail` FROM `regtable` WHERE `regmail` = '$mail'");
    $fitchmail = mysqli_fetch_assoc($quarymail);
    if (empty($fitchmail)) {
        return true;
    } else {
        return false;
    }
}
// chech name in reg page
function regcheckname($name)
{
    $dbconname = mysqli_connect("localhost", "root", "", "regdb");
    $quaryname = mysqli_query($dbconname, "SELECT  `regname` FROM `regtable` WHERE `regname` = '$name'");
    $fitchname = mysqli_fetch_assoc($quaryname);
    if (empty($fitchname)) {
        return true;
    } else {
        return false;
    }
}
// chech mail matching with password in login page
function logincheck($mail, $pass)
{
    $logincon = mysqli_connect("localhost", "root", "", "regdb");
    $loginquary = mysqli_query($logincon, "SELECT  * FROM `regtable` WHERE `regmail` = '$mail' AND `regpass` ='$pass'");
    $fitchlogin = mysqli_fetch_assoc($loginquary);
    if (empty($fitchlogin)) {
        return false;
    } else {
        return $fitchlogin;
    }
}
function showmemberdate()
{
    $membercon = mysqli_connect("localhost", "root", "", "regdb");
    $memberquary = mysqli_query($membercon, "SELECT  * FROM `regtable` ");
    while ($memberdate = mysqli_fetch_assoc($memberquary)) {
        $truedata[] = $memberdate;
    }
    return $truedata;
}
// function encrpass($pass){
//     return md5($pass);
// }

function delete_user($id)
{
    $delmembercon = mysqli_connect("localhost", "root", "", "regdb");
    $delmemberquary = mysqli_query($delmembercon, "DELETE FROM `regtable` where `id` = '$id' ");
    return  mysqli_affected_rows($delmembercon);
}
//  permission
function permission()
{
    return $_SESSION['user']['admin'];
}

// update
function GetUserById($id)
{
    $getusercon = mysqli_connect("localhost", "root", "", "regdb");
    $getuserqu = mysqli_query($getusercon, "SELECT  * FROM `regtable` WHERE `id` = '$id'");
    $fitchupdate = mysqli_fetch_assoc($getuserqu);
    return $fitchupdate;
}

function update_user($id, $name, $mail , $pass)
{
    $updatemembercon = mysqli_connect("localhost", "root", "", "regdb");
    $updatememberquary = mysqli_query($updatemembercon, "UPDATE `regtable` SET `regname`= '$name',`regmail`= '$mail',`regpass`= '$pass' where `id` = '$id' ");
    return  mysqli_affected_rows($updatemembercon);
}

function selectpermission(){
    $permisioncon = mysqli_connect("localhost", "root", "", "regdb");
    $permisionquary = mysqli_query($permisioncon, "SELECT  `admin` FROM `regtable` WHERE `admin`>2   ");
    while ($permisiondate = mysqli_fetch_assoc($permisionquary)) {
        $truedata[] = $permisiondate;
    }
    return $truedata;
}