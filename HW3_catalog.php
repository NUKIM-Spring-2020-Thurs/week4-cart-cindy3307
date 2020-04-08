<html>

<?php

session_start();

if(isset($_SESSION["login"])){

	echo "登入成功</br>";
	$date=strtotime("+7 days",time());
	$username=$_SESSION["ID"];
	setcookie("ID",$username,$date);

	// echo "<a href='HW3_logout.php'>登出</a>";
	
}else{
	echo "非法進入</br>";
	echo "<a href='HW3_login.php'>乖乖回首頁</a>";
}

?>

<?php

session_start();
if(isset($_POST["product"])){
	$_SESSION["number"]=$_POST["number"];
	$id=$_POST["product"];
	$_SESSION["id"]=$id;
	switch (strtoupper($id)) {
		case "pro1":
			$_SESSION["name"]="10吋變形平板";
			$_SESSION["price"]="12000";
			break;
		case "pro2":
			$_SESSION["name"]="15.6吋筆記型電腦";
			$_SESSION["price"]="27000";
			break;
		case "pro3":
			$_SESSION["name"]="iPhone手機";
			$_SESSION["price"]="21000";
			break;
	}
	header("Location:HW3_addcart.php");
}

?>


<body>

	<h1>訂購商品</h1>

<form action="HW3_catalog.php" method="post">
<br/>
<b>選擇商品：</b>
	<select name="product">
		<option value="pro1">10吋變形平板-$12000</option>
		<option value="pro2">15.6吋筆記型電腦-$27000</option>
		<option value="pro3">iPhone手機-$21000</option>
	</select>
<br/><br/>

<b>數量：</b>
	<input type="number" name="number"><br/><br/>

<input type="submit" value="加入購物車"><br/><br/>

</form><br/>

<a href="HW3_catalog.php">商品目錄</a>
<a href="HW3_cart.php">檢視購物車</a>

</body>
</html>