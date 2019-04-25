<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nhà sách OnePiece</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
<!--<script type="text/javascript" language="javascript" src="../js/bootstrap.js"></script>-->
<script type="text/javascript" language="javascript" src="../js/showBook.js"></script>
<!-- MetisMenu CSS -->
    <link href="../css/admin/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/admin/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/admin/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/admin/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <img src="../images/onepiece.PNG" style="" width="250px" height="52px" alt="logo-trang chủ">
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Hoàng <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản </a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Cài đặt </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li>
                        <a href="admin.php" style=""><i class="fa fa-home fa-fw"></i> Trang chủ </a>
                    </li>
                    <li>
                        <a href="quanlysanpham.php"><i class="fa fa-product-hunt fa-fw"></i> Quản lý sản phẩm</a>
                    </li>
					<li>
                        <a href="quanlyhoadon.php"><i class="fa fa-file-text-o fa-fw"></i> Quản lý hóa đơn</a>
                    </li>
					<li>
                        <a href="quanlydonhang.php"><i class="fa fa-file-text-o fa-fw"></i> Quản lý đơn hàng</a>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Thống kê sản phẩm</a>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Quản lý người dùng<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
                                    <li>
                                        <a href="quanlykhachhang.php">Khách hàng</a>
                                    </li>
                                    <li>
                                        <a href="#">Admin và Quản lý</a>
                                    </li>                 
                        </ul>
                                <!-- /.nav-second-level -->
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quản lý chi tiết hóa đơn</h1>
                </div>
            </div>
			
	<!---------------------------------hien san pham ----------------------------------->
            <!-- ... Your content goes here ... -->
			
			
			<div clas="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						
						<div class="panel-heading">
							Danh sách chi tiết hóa đơn
						</div>
						
						<div class="panel-body">
							
							<div class="row">
								<form name="chitiethoadon">
									<div class="col-lg-4" style="">
									
										<div class="panel panel-default">
											<div class="panel-body">
											<?php
												require('DataProvider.php');
												if(isset($_GET['MaHD']) && isset($_GET['MaKH']))
												{
													$sql="select * from hoadon hd,khachhang kh, hinhthucthanhtoan httt,hinhthucgiaohang htgh where kh.MaKH=hd.MaKH and hd.HinhThucThanhToan=httt.MaHinhThuc and  hd.HinhThucGiaoHang=htgh.MaHinhThuc and MaHD='".$_GET['MaHD']."'";
													$result=DataProvider::executeQuery($sql);
													$row=mysqli_fetch_array($result);
													$tenkh=$row['HoTen'];
													$ngaydathang=$row['NgayDatHang'];
													$diachi=$row['DiaChi'];
													$hinhthucthanhtoan=$row['TenHinhThucTT'];
													$hinhthucgiaohang=$row['TenHinhThucGH'];
													$sdt="gg";
												}													
												else 
												{
													$tenkh="";
													$ngaydathang="";
													$tenkh="";
													$hinhthucthanhtoan="";
													$hinhthucgiaohang="";
													$sdt="";
												}
											?>
												<div class="form-group">
                                                    <label>Họ tên khách hàng</label>
                                                    <input type="text" class="form-control" name="hoten" value="<?php echo $tenkh ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Ngày đặt hàng</label>
                                                    <input type="text" class="form-control" name="ngaydathang" value="<?php echo $ngaydathang ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" class="form-control" name="sdt" value="<?php echo $sdt ?>">
                                                </div>
											</div>
										</div>
										
									</div>
									
									<div class="col-lg-8">
										<div class="panel panel-default">
											<div class="panel-body">
												<div class="form-group">
                                                    <label>Địa chỉ</label>
                                                    <input type="text" class="form-control" name="diachi" value="<?php echo $diachi ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Hình Thức thanh toán</label>
                                                    <input type="text" class="form-control" name="hinhthucthanhtoan" value="<?php echo $hinhthucthanhtoan ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Hình Thức giao hàng</label>
                                                    <input type="text" class="form-control" name="hinhthucgiaohang" value="<?php echo $hinhthucgiaohang ?>">
                                                </div>
											</div>
										</div>
										
									</div>
								</form>	
							</div>
							
							<!------------------------table-------------------------------------------------------------->
							<style>
								#gg td,#gg th
								{
									text-align:center;
									vertical-align:middle;
								}
							</style>
							<div class="row" style="margin-top:10px">
								
								<div class="col-lg-12" id="hoadon">
									<?php
										require('Bill.php');
										Bill::showDetailBill();
									?>
								</div>
								<script>
									
									function capnhathoadon(value) {
										var xhttp;
										//var trangthai=document.getElementById('tinhtrang').value;
										//var mhd=document.getElementById('mhd').value;
										//var ms=document.getElementById('ms').value;
										var url="capnhathoadon.php?"+value;
										xhttp = new XMLHttpRequest();							
										xhttp.onreadystatechange = function() {
										if (this.readyState == 4 && this.status == 200) {
												alert("Đã thay đổi trạng thái");
												//alert(value);
											}
										  };
										//  window.location.href=url;
										  xhttp.open("GET",url, true);
										  xhttp.send();
										}
								</script>
							</div>
							
						</div>
					</div>
				</div>
			</div>

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/admin/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/admin/startmin.js"></script>
<script>
	$(document).ready(function(){
		$('.tinhtrang').click(function(e){
			
			$(this).each(function(){
				alert($(this).val());
			});
			
		})
	});
</script>
</body>
</html>

