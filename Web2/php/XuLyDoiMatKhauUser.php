<?php
ini_set('session.auto_start',0);
ini_set('session.cookie_lifetime',0);
session_start();
require('DataProvider.php');
require('common.php');
	if(isLogined()==true)
	{
		if($_SESSION['login']['MaQuyen'] == "1" || $_SESSION['login']['MaQuyen'] == "2" )
		{
				header("Location:admin.php");
		}
		else if(kiemtramatkhau()==false)
		{
				header("Location:doimatkhauUser.php?loitrangthai=1");
		}
		else if(kiemtraxacnhanmatkhau()==false)
		{
			header("Location:doimatkhauUser.php?loitrangthai=2");
		}
		else 
		{
					//------------------------Sua trong database khachhang-----------------------------------------------//
				
					$sql="UPDATE khachhang SET "	
					.	"MatKhau='".$_POST['mkmoi']."'  "
					.	"WHERE MaKH='".$_SESSION['login']['MaKH']."'";
					DataProvider::executeQuery($sql);
					
					$_SESSION['login']=array(	'TenDangNhap' => $_SESSION['login']['TenDangNhap'],
												'MaQuyen' => $_SESSION['login']['MaQuyen'],
												'TrangThai' => $_SESSION['login']['TrangThai'],
												'HoTen' => $_SESSION['login']['HoTen'],
												'MaKH' => $_SESSION['login']['MaKH'],
												'Email' => $_SESSION['login']['Email'],
												'SĐT' => $_SESSION['login']['SĐT'],
												'MatKhau' => $_POST['mkmoi']);
				
				header("Location:thongtincanhanUser.php");
				//echo "alert('Đổi mật khẩu thành công')";
		}
		
	}
	else if(isLogined()==false)
	{
			header("Location:DangNhap.php");
	}
	
	
	function kiemtramatkhau()
	{
		
		$matkhau=$_POST['mkcu'];
		$matkhaumoi=$_POST['mkmoi'];
		$xacnhanmk=$_POST['xacnhanmkmoi'];

		$sql="select * from khachhang where MaKH ='".$_SESSION['login']['MaKH']."'";
		$result=DataProvider::executeQuery($sql);
		if(mysqli_num_rows($result)==1)
		{
			$row=mysqli_fetch_array($result);
			if($row['MatKhau']!=$matkhau)
			{						  
				return false;
			}		
		}
		return true;
	}
	function kiemtraxacnhanmatkhau()
	{
		//require('DataProvider.php');
		$matkhau=$_POST['mkcu'];
		$matkhaumoi=$_POST['mkmoi'];
		$xacnhanmk=$_POST['xacnhanmkmoi'];

		$sql="select * from khachhang where MaKH ='".$_SESSION['login']['MaKH']."'";
		$result=DataProvider::executeQuery($sql);
		if(mysqli_num_rows($result)==1)
		{
			$row=mysqli_fetch_array($result);
			if($row['MatKhau']==$matkhau && $matkhaumoi!=$xacnhanmk)
			{
				return false;
			}
		}
		return true;
	}
	
?>