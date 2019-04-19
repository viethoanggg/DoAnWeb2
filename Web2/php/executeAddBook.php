<?php
	require('DataProvider.php');
	if(isset($_POST['masach']))
	{
		$sql="INSERT INTO sach(MaSach, MaTheLoai, TenTacGia, TenSach, HinhAnh, Gia) VALUES ( ";
		$sql=$sql."'".$_POST['masach']."', ";
		$sql=$sql."'".$_POST['matheloai']."', ";
		$sql=$sql."'".$_POST['tentacgia']."', ";
		$sql=$sql."'".$_POST['tensach']."', ";
		$sql=$sql."'".$_POST['hinhanh']."', ";
		$sql=$sql."'".$_POST['gia']."' )";
		
		DataProvider::executeQuery($sql);
		
		$sql="INSERT INTO chitietsach (MaSach, NXB, KichThuoc, TrongLuong, SoTrang, DanhMuc, NgayPhatHanh, SoLuongTon, NoiDungGioiThieu ) VALUES ( ";
		$sql=$sql."'".$_POST['masach']."', ";
		$sql=$sql."'".$_POST['nhaxuatban']."', ";
		$sql=$sql."'".$_POST['kichthuoc']."', ";
		$sql=$sql."'".$_POST['masach']."', ";
		$sql=$sql."'".$_POST['masach']."', ";
		$sql=$sql."'".$_POST['masach']."', ";
		$sql=$sql."'".$_POST['ngayphathanh']."', ";
		$sql=$sql."'".$_POST['soluongton']."', ";
		$sql=$sql."'".$_POST['noidunggioithieusach']."' )";
		DataProvider::executeQuery($sql);
		
	}
	header("Location:quanlysanpham.php");
?>