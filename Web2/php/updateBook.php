<?php

	require('DataProvider.php');
	if(isset($_POST['masach']))
	{
		$masach=$_POST['masach'];
		$sql="select * from sach s,tacgia tg where s.MaTacGia=tg.MaTacGia and s.MaSach='".$masach."'";
		$result=DataProvider::executeQuery($sql);
		$row=mysqli_fetch_array($result);
		$matacgia=$row['MaTacGia'];
		
		//------------------------Sua trong database sach-----------------------------------------------//
		
		$sql="UPDATE sach SET "
		.	"MaTheLoai='".$_POST['matheloai']."', "
		.	"TenSach='".$_POST['tensach']."', ";
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
		
		//------------------------Sua trong database tac gia-----------------------------------------------//
		
		$sql="UPDATE tacgia SET "
		.	"TenTacGia='".$_POST['tentacgia']."' "
		.	"WHERE MaTacGia='".$_POST['tentacgia']."'";
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