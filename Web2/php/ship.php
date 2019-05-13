<?php 
	session_start();
	if(isset($_GET['ship'])){
		$ship=$_GET['ship'];
		$_SESSION['login']['Phivanchuyen']=$ship;
		echo $ship;
	}
 ?>