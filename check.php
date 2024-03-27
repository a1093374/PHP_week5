<?php
session_start();
?>

<meta charset="utf-8">
<?php
$sId="1093374";
$sPwd="0000";

$uId=$_POST["uId"];
$uPwd=$_POST["uPwd"];

if($sId==$uId && $sPwd==$uPwd){
    $_SESSION["check"]="Yes";
    header("Location:success.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
?>