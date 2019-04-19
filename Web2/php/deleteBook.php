<?php
	require('DataProvider.php');
	if(isset($_GET['masach']))
	{
		$sql="DELETE FROM sach WHERE MaSach='".$_GET['masach']."'";
		DataProvider::executeQuery($sql);
	}
	header("Location:quanlysanpham.php");
?>