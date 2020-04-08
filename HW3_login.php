<html>

<h1><i>Log in me</i></h1>

<?php

if(isset($_COOKIE["ID"])){
	$user=$_COOKIE["ID"];
	echo "歡迎再度光臨".$_COOKIE["ID"];
	setcookie("ID","",time()-3600);
}else{
	echo "歡迎新朋友";
	$user="";
}

?>

<form action="HW3_check.php" method="post">
<br/>
<b>帳號：</b><input type="text" name="id" value="<?php echo $user ?>" required><br/><br/>
<b>密碼：</b><input type="password" name="pwd" required><br/><br/>
<input type="submit" value="登入">

</form>

</html>