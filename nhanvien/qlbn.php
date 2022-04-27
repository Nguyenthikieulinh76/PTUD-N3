<?php 
include("../class/clasvd.php");
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
<link rel="stylesheet" type="text/css" href="../myfile.css"/>
</head>

<body>
<div class=" container">
<header style="background-image:url(../img/background-top.png)"><img src="../img/logo.jpg" width="120" height="100" />
    	<div id="he1">
        <p>
        BAN CHỈ ĐẠO QUỐC GIA <br />
        PHÒNG CHỐNG DỊCH BỆNH COVID-19<br />
        HỆ THỐNG TIẾP NHẬN, ĐIỀU TRỊ</p>
		</div>
</header>
  <div class="menu">
      <a href="#">Đăng nhập</a>|
      <a href="#" >Đăng xuất</a>
      <a href="../trangchu.php">Trang chủ</a>
   
  </div>
    <div id="content" align="center">
    
     <form id="form1" name="form1" method="post" action="">
      <table width="623" border="1" align="center">
        <tr>
          <td colspan="2" align="center">THÊM THÔNG TIN BỆNH NHÂN</td>
        </tr>
        <tr>
          <td width="163">CMNN:</td>
          <td width="405"><label for="cmnd" ></label>
          <input type="text" name="cmnd" id="" value="<?php echo $p->laycot("select CMND from benhnhan where id='$layid' limit 1 ");?>"/>
          </td>
        </tr>
        <tr>
          <td>Tên bệnh nhân:</td>
          <td><label for="tenbn"></label>
          <input type="text" name="tenbn" id="tenbn"  value="<?php echo $p->laycot("select tenbn from benhnhan where id='$layid' limit 1 ");?>" /></td>
        </tr>
        <tr>
          <td>Số điện thoại:</td>
          <td><label for="sdt"></label>
          <input type="text" name="sdt" id="sdt" value="<?php echo $p->laycot("select dienthoai from benhnhan where id='$layid' limit 1 ");?>"/></td>
        </tr>
        <tr>
          <td>Giới tính:</td>
          <td> 
           <label <?php echo $p->laycot("select gioitinh  from benhnhan where id='$layid' limit 1 ");?> >
          <input type="radio" name="gioitinh" id="gioitinh" value="Nam" />Nam<br />
        
            <input type="radio" name="gioitinh" id="gioitinh" value="Nữ" />
            Nữ<br />
          </label></td>
        </tr>
        <tr>
          <td>Quốc tịch:</td>
          <td><label for="quoctich"></label>
          <input type="text" name="quoctich" id="quoctich"  value="<?php echo $p->laycot("select quoctich from benhnhan where id='$layid' limit 1 ");?>"/></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><label for="email"></label>
          <input type="text" name="email" id="email"   value="<?php echo $p->laycot("select email from benhnhan where id='$layid' limit 1 ");?>"/></td>
        </tr>
        <tr>
          <td>Tình trạng:</td>
          <td><label for="tinhtrang"></label>
          <textarea name="tinhtrang" id="tinhtrang" cols="45" rows="5"><?php echo $p->laycot("select tinhtrang from benhnhan where id='$layid' limit 1 ");?></textarea></td>
        </tr>
       
        <tr>
          <td>Quận:</td>
          <td><label for="quan"></label>
          <input type="text" name="quan" id="quan"  value="<?php echo $p->laycot("select maquan from benhnhan where id='$layid' limit 1 ");?>"/></td>
        </tr>
         <tr>
          <td>Phường:</td>
          <td><label for="phuong"></label>
          <input type="text" name="phuong" id="phuong"  value="<?php echo $p->laycot("select maphuong from benhnhan where id='$layid' limit 1 ");?>"/></td>
        </tr>
        <tr>
          <td>Ngày sinh:</td>
          <td><input type="date" name="ngaysinh" id="ngaysinh"  value="<?php echo $p->laycot("select ngaysinh from benhnhan where id='$layid' limit 1 ");?>"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="nut" id="nut" value="Thêm" />
          <input name="nut" type="submit" id="nut" value="xóa" />
          <input type="submit" name="nut" id="nut" value="Sửa" />
          <a href="danhsachbn.php">Quay lại danh sách</a>
          </td>
        </tr>
      </table>
      <?php 
	  	switch($_POST['nut'])
		{
			case 'Thêm':
			{
				$cmnd=$_REQUEST['cmnd'];
				$tenbn=$_REQUEST['tenbn'];
				$sdt=$_REQUEST['sdt'];
				$gioitinh=$_REQUEST['gioitinh'];
				$quoctich=$_REQUEST['quoctich'];
				$email=$_REQUEST['email'];
				$trinhtrang=$_REQUEST['tinhtrang'];
				$quan=$_REQUEST['quan'];
				$phuong=$_REQUEST['phuong'];
				$ngaysinh=$_REQUEST['ngaysinh'];
				if($cmnd!='')
				{
					if($p->themxoasua("INSERT INTO benhnhan(CMND ,tenbn,dienthoai ,gioitinh ,quoctich ,email ,tinhtrang,maquan ,maphuong ,ngaysinh) VALUES ('$cmnd', '$tenbn', '$sdt', '$gioitinh', '$quoctich', '$email', '	$trinhtrang', '$quan', '$phuong', '$ngaysinh') ")==1)
					{
						echo'Thêm khách hàng thành công';
					}
					else
					{
						echo'Thêm khách hàng không thành công';
					}
				}
				else
				{
					echo 'Vui lòng nhập đủ thông tin';
				}
				break;
				
			}
			case 'xóa';
			{
				$idxoa=$_REQUEST['id'];
				if($idxoa>0)
				{
					if($p->themxoasua("delete from benhnhan where id='$idxoa' limit 1 ")==1)
					{
						header('location:qlbn.php');
					}
					else
					{
						echo'xóa không thành công';
					}
				}
				else
				{
					echo'vui lòng chọn bệnh nhân cần xóa.';
				}
				break;
			}
			case 'Sửa':
			{
				$idsua=$_REQUEST['id'];
				
				$cmnd=$_REQUEST['cmnd'];
				$tenbn=$_REQUEST['tenbn'];
				$sdt=$_REQUEST['sdt'];
				$gioitinh=$_REQUEST['gioitinh'];
				$quoctich=$_REQUEST['quoctich'];
				$email=$_REQUEST['email'];
				$trinhtrang=$_REQUEST['tinhtrang'];
				$quan=$_REQUEST['quan'];
				$phuong=$_REQUEST['phuong'];
				$ngaysinh=$_REQUEST['ngaysinh'];
				if($idsua>0)

					{
						if($p->themxoasua("UPDATE benhnhan SET CMND = '$cmnd',tenbn = '$tenbn',dienthoai = '$sdt',gioitinh = '$gioitinh',quoctich = '$quoctich',email = '$email',tinhtrang = '$trinhtrang',maquan = '$quan',maphuong = '$phuong',ngaysinh = '$ngaysinh' WHERE id ='$idsua' LIMIT 1 ")==1)
						{
							header('location:qlbn.php');
						}
						else
						{
							echo'sửa không thành công';
						}	
					}
				else
				{
					echo 'vui lòng chọn bệnh nhân để sửa';
				}
				break;
			}
		}
	  ?>
      <hr />
      <h3>Danh sách bệnh nhân</h3>
      <?php 
	  	$p->load_ds_bn("select *from benhnhan order by id desc");
	  ?>
     </form>

</div>
    <div class="footer" style="background-image:url(../img/background-top.png)">
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
</body>
</html>