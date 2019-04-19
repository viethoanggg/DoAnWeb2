<?php
	require("DataProvider.php");
	if(isset($_GET['cho']) && isset($_GET['ma']))
		TimKiemTrongThemSP();
	function TimKiemTrongThemSP()
	{
			$sql="select COUNT(*) as SoLuong from sach where MaTheLoai='".$_GET['ma']."'";
			$result=DataProvider::executeQuery($sql);
			$row=mysqli_fetch_array($result);
			if($_GET['ma']=="NN")
				echo "NN".$row['SoLuong'];
			else if($_GET['ma']=="KT")
				echo "KT".$row['SoLuong'];
			else if($_GET['ma']=="KNS")
				echo "KNS".$row['SoLuong'];
			else if($_GET['ma']=="LS")
				echo "LS".$row['SoLuong'];
			else if($_GET['ma']=="CN")
				echo "CN".$row['SoLuong'];
			else if($_GET['ma']=="TN")
				echo "TN".$row['SoLuong'];
			else if($_GET['ma']=="TT")
				echo "TT".$row['SoLuong'];
			else if($_GET['ma']=="VH")
				echo "VH".$row['SoLuong'];
	}
?>