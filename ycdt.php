<?php 
include("class/clasvd.php");
$p= new ptud();
$layid=0;
if(isset($_REQUEST['id']))
{
	$layid= $_REQUEST['id'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="myfile.css"/>
</head>

<body>
<div class=" container">
<header style="background-image:url(img/background-top.png)"><img src="img/logo.jpg" width="120" height="100" />
    	<div id="he1">
        <p>
        BAN CHỈ ĐẠO QUỐC GIA <br />
        PHÒNG CHỐNG DỊCH BỆNH COVID-19<br />
        HỆ THỐNG TIẾP NHẬN, ĐIỀU TRỊ</p>
		</div>
  </header>
    <div class="menu">
      <a href="dangnhap.php">Đăng nhập</a>|
      <a href="#" >Đăng xuất</a>
     
   
    </div>
     <div class="conten">
 		<?php 
			$p->load_ds_bv("select * from benhvien");
		
		?>
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
