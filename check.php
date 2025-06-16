<?php
$a1=$_GET["user"];
$a2=$_GET["pass"];
if($a1=="1"&& $a2=="1"){
    header("location:bill.php?user=$a1");
}
else{
     echo "Dang nhap khong hop le";
}


?>
