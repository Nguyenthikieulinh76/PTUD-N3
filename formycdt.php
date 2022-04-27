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
      <a href="trangchu.php">Trang chủ</a>
     
   
    </div>
     <div class="conten" align="center">
    <form id="form1" name="form1" method="post" action=""  >
      <table width="691" border="1" align="center">
        <tr>
          <td colspan="2" align="center">GỬI YÊU CẦU ĐIỀU TRỊ</td>
        </tr>
        <tr>
          <td width="143">Chọn bệnh viện:</td>
          <td width="532">
          <label for="select"></label>
          	<?php 
				$p->loadcombo_bv("");
			?>
            <select name="select" id="select" value="chọn bệnh viện">
          </select></td>
        </tr>
        <tr>
          <td>Mã bệnh nhân:</td>
          <td><label for="mabn"></label>
          <input type="text" name="mabn" id="mabn" /></td>
        </tr>
        <tr>
          <td>Tên bệnh nhân:</td>
          <td><label for="tenbn"></label>
          <input type="text" name="tenbn" id="tenbn" /></td>
        </tr>
        <tr>
          <td>Số điện thoại:</td>
          <td><label for="sdt"></label>
          <input type="text" name="sdt" id="sdt" /></td>
        </tr>
        <tr>
          <td>Giới tính:</td>
          <td><input type="radio" name="gioitinh" id="gioitinh" value="Nam" />
          <label for="radio">Nam<br />
            <input type="radio" name="gioitinh" id="gioitinh" value="Nữ" />
          Nữ</label></td>
        </tr>
        <tr>
          <td>Quốc tịch:</td>
          <td><label for="quoctich"></label>
          <input type="text" name="quoctich" id="quoctich" /></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><label for="email"></label>
          <input type="text" name="email" id="email" /></td>
        </tr>
        <tr>
          <td>Tình trạng:</td>
          <td><label for="tinhtrang"></label>
          <textarea name="tinhtrang" id="tinhtrang" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td>Quận:</td>
          <td><label for="quan"></label>
          <input type="text" name="quan" id="quan" /></td>
        </tr>
        <tr>
          <td>Phường:</td>
          <td><label for="phuong"></label>
          <input type="text" name="phuong" id="phuong" /></td>
        </tr>
        <tr>
          <td>Ngày sinh:</td>
          <td><label for="ngaysinh"></label>
          <input type="text" name="ngaysinh" id="ngaysinh" /></td>
        </tr>
        <tr>
          <td>Ngày lập:</td>
          <td><label for="ngaylap"></label>
          <input type="text" name="ngaylap" id="ngaylap" /></td>
        </tr> 
        <tr>
    		<td colspan="2" align="center"><input name="nut" type="submit" id="nut" value="Gửi yêu cầu" /></td>
		</tr>
      </table>
    </form>
<?php 
	 	$p->load_ds_bn("select * from benhnhan");
	 ?>
   
    
 
  </div>
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
