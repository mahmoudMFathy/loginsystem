<?php
function regfun($name ,$mail,$pass  ,$img){
$dbcon = mysqli_connect("localhost", "root", "", "regdb");
$quary = "INSERT INTO `regtable`( `regname`, `regmail`, `regpass` ,`img` ) VALUES ('$name','$mail','$pass','$img' )";
mysqli_query($dbcon,$quary); 
$affreg = mysqli_affected_rows($dbcon);
if($affreg == 1){
    return true;
  }else{
      return false;
  }
}
