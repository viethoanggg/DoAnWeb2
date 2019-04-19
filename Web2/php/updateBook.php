<?php

	require('DataProvider.php');
	if(isset($_POST['masach']))
	{
		$masach=$_POST['masach'];
		
		//------------------------Sua trong database sach-----------------------------------------------//
		
		$sql="UPDATE sach SET "
		.	"MaTheLoai='".$_POST['matheloai']."', "
		.	"TenSach='".$_POST['tensach']."', "
		.	"TenTacGia='".$_POST['tentacgia']."', ";
		if(isset($_POST['hinhanh']))
			$sql=$sql .	"HinhAnh='".$_POST['hinhanh']."', ";
		$sql=$sql .	"Gia='".(int)$_POST['gia']."' "
		.	"WHERE MaSach='".$_POST['masach']."'";
		DataProvider::executeQuery($sql);
		
		//------------------------Sua trong database chi tiet sach-----------------------------------------------//
		
		$sql="UPDATE chitietsach SET "
		.	"NXB='".$_POST['nhaxuatban']."', "
		.	"KichThuoc='".$_POST['kichthuoc']."', "
		.	"TrongLuong='".$_POST['trongluong']."', "
		.	"SoTrang='".(int)$_POST['sotrang']."', "
		.	"DanhMuc='".$_POST['danhmuc']."', "
		.	"NgayPhatHanh='".$_POST['ngayphathanh']."', "
		.	"SoLuongTon='".(int)$_POST['soluongton']."', "
		.	"NoiDungGioiThieu='".$_POST['noidunggioithieusach']."' "
		.	"WHERE MaSach='".$_POST['masach']."'";
		DataProvider::executeQuery($sql);
		
	}
		
	//------------------------Quay ve trang quanlysanpham.php-----------------------------------------------//
	
	$hostName=$_SERVER['HTTP_HOST'];
	$dirURL=rtrim(dirname($_SERVER['PHP_SELF']));
	$pageName="quanlysanpham.php";
	$url="http://".$hostName.$dirURL."/".$pageName;
	header("Location:$url");
	exit;
?>