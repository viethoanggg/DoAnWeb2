<?php
	ini_set('session.auto_start',0);
	ini_set('session.cookie_lifetime',0);
	session_start();
	require('common.php');
	if(isLogined()==false)
	{
			header("Location:dangnhapAdmin.php");
	}
	if(isLogined()==true)
	{
		if($_SESSION['login']['MaQuyen'] != "1" && $_SESSION['login']['MaQuyen'] != "2" )
				header("Location:../index.php");
	}
	
?>
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

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
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
                    <i class="fa fa-user fa-fw"></i> <span id="ca_nhan"> <?php echo $_SESSION['login']['HoTen'] ?></span> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="thongtincanhanAdmin.php"><i class="fa fa-user fa-fw"></i> Thông tin tài khoản </a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="xulydangnhapAdmin.php?dangxuat=1"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất </a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation" >
            <div class="sidebar-nav navbar-collapse" id="myNavbar">

                <ul class="nav" id="side-menu">
                    <li>
                        <a href="admin.php" style="" class='active'><i class="fa fa-home fa-fw"></i> Trang chủ </a>
                    </li>
                    <li>
                        <a href="quanlysanpham.php" style="" class='mg'><i class="fa fa-product-hunt fa-fw"></i> Quản lý sản phẩm <span class='mg_i' style="float:right;color:red"></span></a>
                    </li>
					<li>
                        <a href="quanlyhoadon.php" style="" class='mg' ><i class="fa fa-file-text-o fa-fw"></i> Quản lý đơn hàng <span class='mg_i' style="float:right;color:red"></span></a> 
                    </li>
					<li>
                        <a href="#" style="" class='mg' ><i class="fa fa-table fa-fw"></i> Thống kê <span class='mg_i' style="float:right;color:red"></span> </a>
						<ul class="nav nav-second-level">
                                    <li>
                                        <a href="thongke.php">Thống kê doanh thu</a>
                                    </li>
                                    <li>
                                        <a href="thongkesanpham.php">Thống kê sản phẩm</a>
                                    </li>                

                        </ul>
				   </li>
					<li>
                        <a href="#" class='ad' style=""><i class="fa fa-user fa-fw"></i> Quản lý người dùng<span class="fa arrow"> <span class='ad_i' style="float:right;color:red"></span></span></a>
						<ul class="nav nav-second-level">
                                    <li>
                                        <a href="quanlykhachhang.php">Khách hàng</a>
                                    </li>
                                    <li>
                                        <a href="quanlynhanvien.php">Nhân viên quản lý và Quản trị viên</a>
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
                    <h1 class="page-header">Thông tin cá nhân</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<div clas="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-body">
								<div class="row">
								<form name="suauser" action="XuLyDoiMatKhauNV.php" method="post" onsubmit="return ValidatePassword()" >
									<div class="col-lg-3">
									</div>
									<div class="col-lg-6">
										
											<div class="form-group">
												<label>Nhập mật khẩu cũ</label>
												<input class="form-control" name="mkcu" type="password">
												<i style="color:red" id='loimk'></i>
											</div>
											<div class="form-group">
												<label>Nhập mật khẩu mới</label>
												<input class="form-control" name="mkmoi" type="password">	
											</div>
											
											<div class="form-group">
												<label>Xác nhận mật khẩu</label>
												<input class="form-control" name="xacnhanmkmoi" type="password">
												<i style="color:red" id='loimk'></i>
											</div>
											
											
											<i style="color:red" id='loimk'>
											<?php  if(isset($_GET['loitrangthai']) && $_GET['loitrangthai']=="1") echo "Mật khẩu không đúng";
											else if(isset($_GET['loitrangthai']) && $_GET['loitrangthai']=="2") echo "Mật khẩu xác nhận chưa đúng";
											 ?>
											</i>
											<div class="form-group">
												<a href="thongtincanhanAdmin.php">Quay lại</a>
											</div>
										
									</div>
									<div class="col-lg-3">
									</div>
								
									<div class="row">
											<div class="col-lg-12">
												<center>
													<button type="submit" class="btn btn-default">Lưu</button>
													
												</center>
											</div>
										</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
        </div>
    </div>

</div>

<script>
		
</script>

<?php
	
	if($_SESSION['login']['MaQuyen']=="1")
	{
		echo "<script>
				document.getElementsByClassName('mg')[0].setAttribute('style','pointer-events:none;');
				document.getElementsByClassName('mg')[1].setAttribute('style','pointer-events:none;');
				document.getElementsByClassName('mg')[2].setAttribute('style','pointer-events:none;');
				
				document.getElementsByClassName('mg_i')[0].innerHTML='<i class=\'fa fa-ban fa-fw\'></i>';
				document.getElementsByClassName('mg_i')[1].innerHTML='<i class=\'fa fa-ban fa-fw\'></i>';
				document.getElementsByClassName('mg_i')[2].innerHTML='<i class=\'fa fa-ban fa-fw\'></i>';
			</script>";
	}
	if($_SESSION['login']['MaQuyen']=="2")
	{
		echo "<script>
				document.getElementsByClassName('ad')[0].setAttribute('style','pointer-events:none;');
				document.getElementsByClassName('ad_i')[0].innerHTML='<i class=\'fa fa-ban fa-fw\'></i>';
			</script>";
	}
?>
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/admin/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/admin/startmin.js"></script>

</body>
</html>

