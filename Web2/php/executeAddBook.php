<?php
	require('DataProvider.php');
	if(isset($_POST['masach']))
	{
		$sql="INSERT INTO sach(MaSach, MaTheLoai, TenTacGia, TenSach, HinhAnh, Gia) VALUES ( ";
		$sql=$sql."'".$_POST['masach']."', ";
		$sql=$sql."'".$_POST['matheloai']."', ";
		$sql=$sql."'".$_POST['tentacgia']."', ";
		$sql=$sql."'".$_POST['tensach']."', ";
//-----------------------------------------------------------------------------------------------------------------------------//
		$sql=$sql."'".$_FILES['hinhanh']['name']."', ";
//-----------------------------------------------------------------------------------------------------------------------------//
		$sql=$sql."'".$_POST['gia']."' )";
		
		DataProvider::executeQuery($sql);
		
	
			$tmp_name=$_FILES['hinhanh']['tmp_name'];
			$imageURL="../images/".$_FILES['hinhanh']['name'];
			move_uploaded_file($tmp_name,$imageURL);
		
//-----------------------------------------------------------------------------------------------------------------------------//
	
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