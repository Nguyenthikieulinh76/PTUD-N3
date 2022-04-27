<?php 
	class ptud
	{
		private function connect()
		{
			$con= mysql_connect("localhost","covid-19", "12345");
			if(!$con)
			{
				echo 'không kết nói được csdl';
				exit();
			}
			else
			{
				mysql_select_db("covid-19");
				mysql_query("SET NAMES UTF8");
				return $con;
			}
		}
		public function themxoasua($sql)
		{
			$link=$this->connect();
			if(mysql_query($sql,$link))
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}
		
		
		
		
		public function laycot($mysql)
	{
		$link=$this->connect();
		$ketqua=mysql_query($mysql,$link);
		mysql_close($link);
		$i=mysql_num_rows($ketqua);
		$giatri='';
		if($i>0)
		{
			while($row=mysql_fetch_array($ketqua))
			{
				$id=$row[0];
				$giatri=$id;
			}
			return $giatri;	
		}
	}
	
	
		public function dem($sql){
		$link= $this->connect();
		$ketqua=mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($ketqua);
		return $i;
	}
	
		public function load_ds_bn($mysql)
		{
			$link=$this->connect();
			$ketqua=mysql_query($mysql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
			{
				echo' <table width="1147" border="1">
				<tr>
				  <td width="64" align="center">STT</td>
				  <td width="112" align="center">CMND</td>
				  <td width="106" align="center">Tên bệnh nhân</td>
				  <td width="94" align="center">Số điện thoại</td>
				  <td width="94" align="center">Giới tính</td>
				  <td width="94" align="center">Quốc tịch</td>
				  <td width="94" align="center">Email</td>
				  <td width="94" align="center">Tình trạng</td>
				  <td width="94" align="center">Quận</td>
				  <td width="94" align="center">Phường</td>
				  <td width="102" align="center">Ngày sinh</td>
				</tr>';
				$dem=1;
				while($row=mysql_fetch_array($ketqua))
				{
					$id=$row['id'];
					$cnnd=$row['CMND'];
					$tenbn=$row['tenbn'];
					$sdt=$row['dienthoai'];
					$gioitinh=$row['gioitinh'];
					$quoctich=$row['quoctich'];
					$email=$row['email'];
					$trinhtrang=$row['tinhtrang'];
					$quan=$row['maquan'];
					$phuong=$row['maphuong'];
					$ngaysinh=$row['ngaysinh'];
					echo' <tr>
						  <td align="center" valign="middle"><a href="?id='.$id.'">'.$dem.'</a></td>
						 	<td valign="middle"><a href="?id='.$id.'">'.$cnnd.'</a></td>
							 <td valign="middle"><a href="?id='.$id.'">'.$tenbn.'</a></td>
							 <td valign="middle"><a href="?id='.$id.'">'.$sdt.'</a></td>
						   <td align="center" valign="middle"><a href="?id='.$id.'">'.$gioitinh.'</a></td>
						    <td align="center" valign="middle"><a href="?id='.$id.'">'.$quoctich.'</a></td>	
							<td valign="middle"><a href="?id='.$id.'">'.$email.'</a></td>					  
						 <td valign="middle"><a href="?id='.$id.'">'.$trinhtrang.'</a></td>	
						  <td align="center" valign="middle"><a href="?id='.$id.'">'.$quan.'</a></td>	
						   <td align="center" valign="middle"><a href="?id='.$id.'">'.$phuong.'</a></td>	
						  <td align="center" valign="middle"><a href="?id='.$id.'">'.$ngaysinh.'</a></td>
						</tr>';
						$dem++;
					
				}
				echo' </table>';
			}
			else
			{
				echo'Đang cập nhật dữ liệu';
			}
			
		}
		
		
		
		
		public function load_ds_bv($mysql)
			{
			$link=$this->connect();
			$ketqua=mysql_query($mysql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
				{
					echo
					'
					    	  <table width="100%" height="435" border="1" align="center">
							   <tr>
								<td width="312" align="center">Mã bệnh viện</td>
								<td width="312" align="center">Tên bệnh viện</td>
								<td width="310" align="center">Quận</td>
								<td width="200" align="center"></td>
							  </tr>

					';
					$dem=1;
					while($row=mysql_fetch_array($ketqua))
					{
						$id=$row['id'];
						$tenbv=$row['tenbv'];
						$quan=$row['maquan'];
						echo 
							'
								 <tr>
									<td align="center" valign="middle"><a href="?id='.$id.'">'.$dem.'</a></td>
									<td align="left" ><a href="?id='.$id.'">'.$tenbv.'</a></td>
									<td align="center"><a href="?id='.$id.'">'.$quan.'</a></td>
									<td align="center"><a href="formycdt.php">Chọn</a></td>
								  </tr>';
								  $dem++;

					}
					echo ' </table>';
				}
				else
				{
					echo'Đang cập nhật dữ liệu';
				}
			}
			
		public function loadcombo_bv($sql)
		{
			$link=$this->connect();
			$ketqua=mysql_query($mysql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
			{
				echo'';
				echo'';
			}
			else
			{
				
			}
		}		
	}
?>