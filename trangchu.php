<?php session_start(); 
echo $_SESSION['user'],$_SESSION['pass'],$_SESSION['role'];?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Giao diện chính</title>
<link rel="stylesheet" type="text/css" href="myfile.css"/>
</head>

<body>
<div class="container "> 
	<header style="background-image:url(img/background-top.png)"><img src="img/logo.jpg" width="120" height="100" />
    		
    
    	<div id="he1" >
        <p>
        BAN CHỈ ĐẠO QUỐC GIA <br />
        PHÒNG CHỐNG DỊCH BỆNH COVID-19<br />
        HỆ THỐNG TIẾP NHẬN, ĐIỀU TRỊ</p>
		</div>
    </header>
    <div class="menu">
      <?php if(isset($_SESSION['user']) && isset($_SESSION['pass'])) { echo $_SESSION['role']; ?>

			<p>dntc</p>
	  <?php }else{ ?>
             <a href="dangnhap.php">Đăng nhập</a>|
       <a href="#" >Đăng ký</a>
       <a href="dangnhap.php" >Quản lý thông tin bệnh nhân</a>
   <?php } ?>
    </div>
    <div class="conten">
    	<div id="left"><img src="img/1.jpg" width="458" height="500" /></div>
        <div id="center"><img src="img/5k.jpg" width="458" height="500" /></div>
        <div id="right">
        	<img src="img/b-1022.png" width="458px" height="160" />
            <img src="img/b-hcdc.png" width="458x" height="160" />
            <img src="img/b-mapcovid.png" width="458px" height="180"/>
        </div>
    </div>
    <div class="footer" style="background-image:url(img/background-top.png)">
   		
    	<div id="fo1">
        <p>
        	Hỗ trợ điều trị COVID19_3761<br />
        	Số điện thoại:0900672345 <br />
            Email:hotrotrilieu3761@gmail.com<br />
            Địa chỉ: 12 Nguyễn Văn Bảo, phường 4, Quận Gò Vấp, TP.HCM  
        </p>
        </div>
        <div id="fo2">
        <p >
        	Đường dây nóng thành phố: 1022<br />
            Trung tâm cấp cứu: 115<br />
            Trung tâm kiểm soát bệnh tật:(08)69 577 113
        </p>
    </div>
    </div>
</div>    
</body>
</html>
