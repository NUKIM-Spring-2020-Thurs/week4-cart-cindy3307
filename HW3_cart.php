<html>

<body>
<h1>購物車</h1>

<table border="1" cellpadding="10px">
	<tr bgcolor="#123DER"><td>功能</td><td>編號</td><td>名稱</td><td>價格</td><td>數量</td></tr>
	
<?php 
$flag = false;  $total = 0;
while (list($arr, $value)=each($_COOKIE)) {
	if (isset($_COOKIE[$arr]) &&  is_array($_COOKIE[$arr])) {
		if ($flag) {
			$flag=false;
			$color="#II345S";
		}else{
			$flag=true;
			$color="#00EEIS";
		}
		echo "<tr bgcolor='".$color."'><td>";
		echo "<a href='delete.php?id=".$arr."'>";
		echo "刪除</a></td>";
		$price =0;
		$number=0;
		while (list($name, $value)=each($_COOKIE[$arr])) {
			
			echo "<td>".$value."</td>";
			
			if ($name=="price") $price=$value;
			if ($name=="number") $number=$value;
		}
		$total += $price * $number;
		echo "</tr>";
	}
}

if ($total != 0) {  
   echo "<tr bgcolor=#OOD443><td colspan=5 align=right>";
   echo "總金額 = NT$".$total."元</td></tr>";
}
 ?>
 </table><br>

<a href="HW3_catalog.php">商品目錄</a>
<a href="HW3_cart.php">檢視購物車</a>

</body>
</html>