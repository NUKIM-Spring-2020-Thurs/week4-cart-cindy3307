<?php

ob_start();
session_start();

$id=$_POST["id"];
$pwd=$_POST["pwd"];
$uid="cindy";
$upwd="cindy1234567890";

if($id==$uid && $pwd==$upwd){
	$_SESSION["login"]="S";
	$_SESSION["ID"]=$id;
	header('location:HW3_catalog.php');

}else{
	$_SESSION["login"]="F";
	header('location:HW3_login.php');

	// echo "login failed,back to login page in 3 seconds";
	// echo"<meta http-equiv='refresh' content='3;url=login.php'/>";
}

?>