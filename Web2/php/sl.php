<?php 
		session_start();
		$soluongsp=0;
		foreach ($_SESSION['cart'] as $key => $value){
			$soluongsp=$soluongsp+$_SESSION["cart"][$key]["sl"];
		}
		echo $soluongsp;
?>