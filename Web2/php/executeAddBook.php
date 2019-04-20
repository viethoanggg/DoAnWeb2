<?php
	require('DataProvider.php');
	if(isset($_POST['masach']))
	{
		$sql="INSERT INTO sach(MaSach, MaTheLoai, TenTacGia, TenSach, HinhAnh, Gia) VALUES ( ";
		$sql=$sql."'".$_POST['masach']."', ";
		$sql=$sql."'".$_POST['matheloai']."', ";
		$sql=$sql."'".$_POST['tentacgia']."', ";
		$sql=$sql."'".$_POST['tensach']."', ";		
		$sql=$sql."'".$_FILES['hinhanh']['name']."', ";
		$sql=$sql."'".$_POST['gia']."' )";
		DataProvider::executeQuery($sql);
//------------------------------------------------Xử lý chuyển file ảnh-------------------------------------------------------------------//	
		if($_FILES['hinhanh']['size'] < 2000000 )
		{	
			$tmp_name=$_FILES['hinhanh']['tmp_name'];
			$matheloai=$_POST['matheloai'];
			if($matheloai=="NN")
				$imageURL="../images/ngoaingu/".$_FILES['hinhanh']['name'];
			else if($matheloai=="KT")
				$imageURL="../images/kinhte/".$_FILES['hinhanh']['name'];
			else if($matheloai=="KNS")
				$imageURL="../images/kynangsong/".$_FILES['hinhanh']['name'];
			else if($matheloai=="LS")
				$imageURL="../images/lichsu/".$_FILES['hinhanh']['name'];
			else if($matheloai=="CN")
				$imageURL="../images/chuyennganh/".$_FILES['hinhanh']['name'];
			else if($matheloai=="TN")
				$imageURL="../images/thieunhi/".$_FILES['hinhanh']['name'];
			else if($matheloai=="TT")
				$imageURL="../images/tuoiteen/".$_FILES['hinhanh']['name'];
			else if($matheloai=="VH")
				$imageURL="../images/vanhoc/".$_FILES['hinhanh']['name'];
			move_uploaded_file($tmp_name,$imageURL);
		}	
//-----------------------------------------------------------------------------------------------------------------------------//
	
		$sql="INSERT INTO chitietsach(MaSach, NXB, KichThuoc, TrongLuong, SoTrang, DanhMuc, NgayPhatHanh, SoLuongTon, NoiDungGioiThieu ) VALUES ( ";
		$sql=$sql."'".$_POST['masach']."', ";
		$sql=$sql."'".$_POST['nhaxuatban']."', ";
		$sql=$sql."'".$_POST['kichthuoc']."', ";
		$sql=$sql."'".$_POST['trongluong']."', ";
		$sql=$sql."'".$_POST['sotrang']."', ";
		$sql=$sql."'".$_POST['danhmuc']."', ";
		$sql=$sql."'".$_POST['ngayphathanh']."', ";
		$sql=$sql."'".$_POST['soluongton']."', ";
		$sql=$sql."'".$_POST['noidunggioithieusach']."' )";
		DataProvider::executeQuery($sql);
		
	}
	header("Location:quanlysanpham.php");
?>