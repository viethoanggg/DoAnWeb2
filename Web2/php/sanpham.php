<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nhà sách OnePiece</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<script type="text/javascript" language="javascript" src="../js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="../js/showBook.js"></script>

</head>
<body>

                                            <!--------------- header --------------->
<nav class="navbar navbar-inverse " style="border-radius:0px">
  <div class="container">
  
     	 <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
                </button>
                <a class="navbar-brand" href="../index.php" title="Trang chủ"><img src="../images/onepiece.PNG" style="margin:-16px" width="200px" height="52px" alt="logo-trang chủ"></a>
         </div>
 
        <div class="collapse navbar-collapse" id="myNavbar">
			
			<div class="row">    
				<div class="col-md-4 col-md-offset-2">
					<form class="navbar-form navbar-left" action="" name="searchIndex">
						<div class="input-group" >
							<input type="text" class="form-control" placeholder="Tìm kiếm" name="search">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</form>	
				</div>
		
				<ul class="nav navbar-nav navbar-right" >
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Đăng ký</a></li>
				</ul>
			</div>
			
        </div>
  
   

  </div>
</nav>

                                           <!---------------- slder ----------------->
 <div id="title-background" class="header-page header-shop" style="background:;background-size: cover;margin-top:-20px">
<div class="theme">
	<div class="title-page tieude"></div>
</div>
</div>


                                    <!------------- navbar menu ---------------->
<nav class="navbar navbar-inverse" style="margin-top:0px;border-radius:0px">
  <div class="container">
     	 <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar2">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
                </button>
         </div>
			<div class="collapse navbar-collapse" id="myNavbar2">
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Trang chủ</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Thể loại <span class="caret"></span></a>
					  <ul class="dropdown-menu">
							<li><a href="sanpham.php?theloai=hocngoaingu&page=1" >Học ngoại ngữ</a></li>
							<li><a href="sanpham.php?theloai=kinhte&page=1" >Kinh tế</a></li>
							<li><a href="sanpham.php?theloai=kynangsong&page=1" >Kỹ năng sống</a></li>
							<li><a href="sanpham.php?theloai=lichsu&page=1" >Lịch sử</a></li>
							<li><a href="sanpham.php?theloai=chuyennganh&page=1" >Sách chuyên ngành</a></li>
							<li><a href="sanpham.php?theloai=thieunhi&page=1" >Sách thiếu nhi</a></li>
							<li><a href="sanpham.php?theloai=tuoiteen&page=1" >Sách tuổi teen</a></li>
							<li><a href="sanpham.php?theloai=vanhoc&page=1" >Sách văn học</a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header"></li>
						<li><a href="sanpham.php?theloai=tatca&page=1">Tất cả</a></li>
					  </ul>
					</li>
				</ul>
				
				
			  <ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a>
				</li>
			  </ul>
			</div>
	

    </div>
</nav>
                                          <!---------------------content sach ----------------------->
<div class="container" >
			<div class="row">
			
				<div class="col-md-2">
					<div class="list-group" style="margin-top:20px">
						<a href="sanpham.php?theloai=hocngoaingu&page=1" class="list-group-item" >Học ngoại ngữ</a>
						<a href="sanpham.php?theloai=kinhte&page=1" class="list-group-item" >Kinh tế</a>
						<a href="sanpham.php?theloai=kynangsong&page=1" class="list-group-item" >Kỹ năng sống</a>
						<a href="sanpham.php?theloai=lichsu&page=1" class="list-group-item" >Lịch sử</a>
						<a href="sanpham.php?theloai=chuyennganh&page=1" class="list-group-item" >Sách chuyên ngành</a>
						<a href="sanpham.php?theloai=thieunhi&page=1" class="list-group-item" >Sách thiếu nhi</a>
						<a href="sanpham.php?theloai=tuoiteen&page=1" class="list-group-item" >Sách tuổi teen</a>
						<a href="sanpham.php?theloai=vanhoc&page=1" class="list-group-item" >Sách văn học</a>
					</div>
					
					<form name="timkiemnangcao">
						<fieldset>
							<legend style="font-size:1.33em">Tìm kiếm nâng cao</legend>
							
								<legend style="font-size:1.2em;padding-left:10px">Thể loại</legend>
									<select name ="theloai" style="padding:5px  10px;margin-left:3px">
										<option>--Chọn--</option>
										<option>Kinh tế</option>
										<option>Kỹ năng sống</option>
										<option>Sách thiếu nhi</option>
										<option>Sách tuổi teen</option>
										<option>Sách văn học</option>
										<option>Học ngoại ngữ</option>
										<option>Sách chuyên ngành</option>
										<option>Sách lịch sử</option>
									</select>
									
								<legend style="font-size:1.2em;padding-left:10px;margin-top:20px">Nhập giá</legend>
								Từ <input type="text" name="giatu" style="padding:5px  10px;margin-left:18px;width:125px;" ><br>
								Đến <input type="text" name="giaden" style="padding:5px  10px;margin-left:10px;margin-top:10px;width:125px;" >
								
								<legend style="font-size:1.2em;padding-left:10px;margin-top:20px">Sắp xếp</legend>
								<select name="sapxep"style="padding:5px  10px">
									<option>--Chọn--</option>
									<option>Giá từ thấp tới cao</option>
									<option>Giá từ cao đến thấp</option>
									<option>Theo tên từ A đến Z</option>
									<option>Theo tên từ Z đến A</option>
								</select>
							
						</fieldset>
					</form>
					
				</div>
				
				<div class="col-md-10">
				
					<div class="bar" > 
						<div class="tieude"></div>	
					</div>
					<div id="sanpham">
						<?php 
							include('showbook.php');
							ShowBook::showBookk();
						?>
					</div>
				</div>

</div>

<script>
	showBook();
</script>                               <!---------------------- footer ----------------------->
<div class="container">
	<hr style="border:1px solid black;">
		<div class="gioithieu">
			<h4>Mua Sách Online Tại Onepiece.Vn</h4><br>
            <p>- Ra đời từ năm 2011, đến nay Onepiece.vn đã trở thành địa chỉ mua sách online quen thuộc của hàng ngàn độc giả trên cả nước. Với đầu sách phong phú, thuộc các thể loại: Văn học nước ngoại, Văn học trong nước, Kinh tế, Kỹ năng sống, Thiếu nhi, Sách học ngoại ngữ, Sách chuyên ngành,... được cập nhật liên tục từ các nhà xuất bản uy tín trong nước. </p><br>
            <p>- Khi mua sách online tại Onepiece.vn, Quý khách được Bọc plastic miễn phí đến 99% (trừ sách bìa cứng, sách dạng hộp - dạng đặc biệt, sách khổ quá to, ...)</p><br>
            <p>- Ngoài ra, với hình thức Giao hàng thu tiền tận nơi và Đổi hàng trong vòng 7 ngày nếu sách có bất kỳ lỗi nào trong quá trình in ấn sẽ giúp Quý khách yên tâm hơn khi mua sắm tại Onepiece.vn</p>
            
		</div>
	<hr style="border:1px solid black;">
	<div class="chitietfooter">
					<h4>HỖ TRỢ KHÁCH HÀNG</h4><br>
					Email: admin@onepiece.vn<br>
					Hotline: 0938 424 289
				</div>
				<div class="chitietfooter">
					<h4>Giới Thiệu</h4><br>
					Về Onepiece<br>
					Tuyển dụng
				</div>
				<div class="chitietfooter">
					<h4>Tài Khoản</h4><br>
					Tài khoản<br>
					Danh sách đơn hàng<br>
					Thông báo
				</div>
				<div class="chitietfooter">
					<h4>Hướng Dẫn</h4><br>
					Hướng dẫn mua hàng<br>
					Phương thức thanh toán<br>
					Câu hỏi thường gặp<br>
					Phương thức vận chuyển
				</div>
		</div>
</div>
</body>
</html>

