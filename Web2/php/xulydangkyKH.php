<?php
	ini_set('session.auto_start',0);
	ini_set('session.cookie_lifetime',0);
	session_start();
	require('common.php');
	//kiểm tra đã đăng nhập chưa
	//chưa đn
	
			require('DataProvider.php');
			if(isset($_POST['makh']))
			{
				$sql="select * from khachhang ";
				$result=DataProvider::executeQuery($sql);
				$flag=0;
					while($row=mysqli_fetch_array($result))
					{
						if($_POST['username']==$row['TenDangNhap'])
						{
							header("Location:DangKy.php?loitrangthai=1");
							$flag=1;
							exit;
						}
					}
					 if($flag==0)
						{
							$sql="INSERT INTO khachhang VALUES ( ";
							$sql=$sql."'".addslashes($_POST['makh'])."', ";
							$sql=$sql."'".addslashes($_POST['name'])."', ";
							$sql=$sql."'".addslashes($_POST['username'])."', ";
							$sql=$sql."'".addslashes($_POST['pass'])."', ";		
							$sql=$sql."'".addslashes($_POST['email'])."', ";
							$sql=$sql."'".addslashes($_POST['phone'])."', ";
							$sql=$sql."'0', ";
							$sql=$sql."'0') ";
							DataProvider::executeQuery($sql);	
						}	
			}
					
				header("Location:DangNhap.php");
		
		
	
	
?>

