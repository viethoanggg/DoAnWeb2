<?php 
session_start();
$soluongsp=0;
if(!empty($_SESSION['cart'])){
	foreach ($_SESSION['cart'] as $key => $value){
		$soluongsp=$soluongsp+$_SESSION["cart"][$key]["sl"];
	}
}

$arr = [
	'masach' => $_GET['masach'],
	'sl' => $_SESSION["cart"][$_GET['masach']]["sl"]
];
echo json_encode($arr);
?>
