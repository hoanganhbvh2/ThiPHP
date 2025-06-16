<?php
session_start(); 
$a1=$_GET["user"];
$a2=$_GET["pass"];
if($a1=="1"&& $a2=="1"){
    $_SESSION["login"]=$a1;
    header("location:bill.php");

}
else{
     echo "Dang nhap khong hop le";
}


?>
